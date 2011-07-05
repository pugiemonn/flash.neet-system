<?php
//class PostsController extends AppController {
class EntoriesController extends AppController {
//      EntoriesController 

    var $name = 'Entories';

    function index() {
        $this->layout = "flash";
        $this->set('entories', $this->Entory->find('all'));    
    }

    function add() {
        $this->layout = "flash";
    }

}


?>
