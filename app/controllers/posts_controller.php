<?php
class PostsController extends AppController {
    var $name = 'Posts';
	function index()
    {
        $this->set('posts', $this->Post->find('all'));
	}
	
	function view($id=null)
	{
		$this->Post->id=$id;
		$this->set('post',$this->Post->read());
	}

    function add()
    {
        if(!empty($this->data))
        {
            if($this->Post->save($this->data))
            {
                $this->flash('投稿は保存されました', '/');
            }
        }
        
    }

}
?>
