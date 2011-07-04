<?php
//class PostsController extends AppController {
class EntoriesController extends AppController {
//      EntoriesController 

    var $name = 'Entories';
    function index() {
        $this->set('entories', $this->Entory->find('all'));    
    }

}


?>
