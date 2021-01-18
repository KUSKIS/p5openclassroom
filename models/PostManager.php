<?php

namespace Equus\P5\models;

require_once('models/Model.php');
require_once('models/Post.php');

Class PostManager extends Model
{



    public function getAll()
    {
        $db = $this->dbConnect();
        $var = [];
        $req = $db->query(' SELECT * FROM  chapters  ORDER BY id ASC ');
        $req->execute();
        //on crée la variable data qui contient les données
        while ($data = $req->fetch(\PDO::FETCH_ASSOC)) {
            //var contiendra les donnees sous forme d'objet
            $var[] = new \Equus\P5\models\Post($data);
        }
        return $var;
        $req->closeCursor(); //on maintient la requete

    }

    public function getListChapters()
    {
        return $this->getAll('chapters', 'Post');
    }



}