<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;
use FMWork\Models\Model;
/**
 * Description of Article
 *
 * @author fabio
 */
class Article extends Model {
    
    private $id;
    private $title;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
}
