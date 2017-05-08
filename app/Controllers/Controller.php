<?php

namespace App\Controllers;
class Controller {
    /**
    * @var string
    */
    private $baseDir;
    
    public function __construct($baseDir = '') {
        $this->baseDir = $baseDir;
    }
    
    public function index() {
        require '../views/index.php' . $this->baseDir;
    }
    
    /**
    * @return string
    */
    public function getBaseDir() {
        return $this->baseDir;
    }
    
    /**
    * @param string $baseDir
    */
    public function setBaseDir($baseDir) {
        $this->baseDir = $baseDir;
    }
}