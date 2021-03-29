<?php

namespace Equus\P5\controllers;
require_once('views/View.php');
require_once('models/PostManager.php');

Class ControllerHome
{
    private $postManager;
    private $view;

    public function __construct()
    {
        if (isset($url) && count($url) > 1) {
            throw new \Exception("Page introuvable", 1);
        } else {
            $this->listPosts();
        }

        $this->postManager = new \Equus\P5\models\PostManager();

    }

    public function listPosts()
    {
        $this->postManager = new \Equus\P5\models\PostManager();
        $knowledge = $this->postManager->getListChapters();
        $this->view = new \Equus\P5\views\View('Home');
        $this->view->generate(array('knowledge' => $knowledge));
    }












}