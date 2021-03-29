<?php

namespace Equus\P5\models;

Class Post
{

    protected $id,
        $know_title,
        $know_content,
        $know_date,
        $know_img;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    //hydratation

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //setters

    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0) {
            $this->id = $id;
        }
    }

    public function setKnow_title($know_title)
    {
        if (is_string($know_title)) {
            $this->know_title = $know_title;
        }
    }

    public function setKnow_content($know_content)
    {
        if (is_string($know_content)) {
            $this->know_content = $know_content;
        }
    }

    public function setKnow_date($know_date)
    {
        $this->know_date = $know_date;
    }

    public function setKnow_img($know_img)
    {
        $this->know_img = $know_img;
    }

    //getters

    public function id()
    {
        return $this->id;
    }

    public function know_title()
    {
        return $this->know_title;
    }

    public function know_content()
    {
        return $this->know_content;
    }

    public function know_date()
    {
        return $this->know_date;
    }

    public function know_img()
    {
        return $this->know_img;
    }






}