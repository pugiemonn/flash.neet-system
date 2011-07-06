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
        if(!empty($this->data))
        {
            if($this->Entory->save($this->data))
            {
                $this->flash('Flash情報が投稿されました', '/entories');
            }
        }
    }

}


?>
