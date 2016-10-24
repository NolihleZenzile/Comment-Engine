<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

    public function action_index() {

        $comment = ORM::factory('Comments')->find_all();
        $view = View::factory('site')
                ->bind('Comments', $comment);
      
        
        $this->response->body($view);
        
           
    }
    

    public function action_addComment() {
        //all main comments have parentID -1 and replies 0
        if ($_POST) {
            $comment = ORM::factory('Comments');
            $date = new dateTime;
            $d = $date->format('Y-m-d h:i:s');
            $comment = ORM::factory('Post');
            $comment->username = $_POST['name'];
            $comment->comment = $_POST['comment'];
            $comment->comment_date = $d;
            $comment->user_email == $_POST['email'];
            $comment->parent_Id = -1;
            $comment->save();
            $this->redirect('welcome' / index . php);
        }
        $view = View::factory('site');

       
    }

    function action_tests() {
        echo "inside test :D";
    }
    
    

}


