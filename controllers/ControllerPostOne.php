<?php

namespace Equus\P5\controllers;

require_once('views/View.php');
require_once('models/PostOneManager.php');

Class ControllerPostOne
{

    private $postOneManager;
    private $view;

    public function __construct()
    {
        if (isset($url) && count($url) > 1) {
            throw new \Exception("Page introuvable", 1);
        } elseif (isset($_GET['createPostOne'])) {
            $this->writePostOne();
        } elseif (isset($_GET['status']) && isset($_GET['status']) == "new") {
            $this->editPostOne();
        } else {
            $this->OnePostOne();
        }

        $this->postOneManager = new \Equus\P5\models\PostOneManager();

    }

    public function OnePostOne()
    {
        /*var_dump('test');*/
        if(isset($_GET['id'])) {
            $this->postOneManager = new \Equus\P5\models\PostOneManager();
            $knowledge = $this->postOneManager->getOnePostOne($_GET['id']);
            $this->view = new \View('Knowledge');
            $this->view->generate(array('knowledge' => $knowledge));
        }
    }

    public function WritePostOne()
    {
        $this->view = new \View('CreatePostOne');
        $this->view->generate(array());
    }

    public function editPostOne()
    {
        $this->postOneManager = new \Equus\P5\models\PostOneManager();
        $knowledge = $this->postOneManager->createPostOne();
        if (isset($_POST['know_title']) || isset($_POST['know_content']) || isset($_POST['know_img'])) {
            $this->view = new \View('Home');
            $this->view->generate(array('knowledge' => $knowledge));
        }
    }







}