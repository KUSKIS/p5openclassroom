<?php

namespace Equus\P5\models;

require_once('models/Model.php');
require_once('models/PostOne.php');

Class PostOneManager extends Model
{



    protected function getAll()
    {
        $db = $this->dbConnect();
        $var = [];
        $req = $db->query(' SELECT * FROM  knowledge  ORDER BY id ASC ');
        $req->execute();
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            $var[] = new \Equus\P5\models\PostOne($data);
        }
        return $var;
        $req->closeCursor();

    }

    protected function getPost()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('  SELECT id, know_title, know_content, know_date, know_img  FROM
         knowledge  WHERE id = ? ');
        $req->execute(array($_GET['id']));
        if ($req->rowCount() == 1);
        return $req->fetch();
        $req->closeCursor();
    }

    protected function createPost()
    {
        $db = $this->dbConnect();
        $req = $db->prepare(' INSERT INTO  knowledge (know_title, know_content, know_date, know_img) VALUES (?, ?, NOW(), ?)');
        $req->execute(array($_POST['know_title'], $_POST['know_content']), $_POST['know_img']);
        $req->closeCursor();
    }

    public function getListPostOne()
    {
        return $this->getAll('PostOne', 'knowledge');
    }

    public function getOnePostOne()
    {
        return $this->getPost('PostOne', 'knowledge');
    }

    public function createPostOne()
    {
        return $this->createPost('PostOne', 'knowledge');
    }


}