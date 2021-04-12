<?php

namespace Equus\P5\controllers;

require_once('views/View.php');
require_once('models/PostOneManager.php');

Class ControllerHome
{
    private $postOneManager;
    private $view;

    public function __construct()
    {
        if (isset($url) && count($url) > 1) {
            throw new \Exception("Page introuvable", 1);
        } else {
            $this->listPosts();
        }

        $this->postOneManager = new \Equus\P5\models\PostOneManager();

    }

    public function listPosts()
    {
        $this->postOneManager = new \Equus\P5\models\PostOneManager();
        $knowledge = $this->postOneManager->getListPostOne();
        $this->view = new \View('Home');
        $this->view->generate(array('knowledge' => $knowledge));
    }












}