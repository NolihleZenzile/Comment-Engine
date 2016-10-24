<?php

class Model_Comments extends ORM{
    protected $_table_name='comments';
    protected $_table_id='comment_ID';
   

   public function save_comments($username,$email,$comment,$date){
       $coms = ORM::factory($this->_table_name);
 
        
        $coms->username = $username;
        $coms->user_email= $email;
        $coms->comment = $comment;
        $coms->comment_date = $date;
        $coms->parent_Id = -1;
        if($coms->save()){
        return true;
        }else{
            return false;
        }
   }
   
   public function save_reply($username,$email,$comment,$date,$id){
       
       $reply = ORM::factory($this->_table_name);
        $reply->username = $username;
        $reply->user_email= $email;
        $reply->comment = $comment;
        $reply->comment_date = $date;
        $reply->parent_Id = $id;
        if($coms->save()){
        return true;
        }else{
            return false;
        }
   }
   
   public function get_comments(){
       $coms= ORM::factory($this->_table_name);
       return $coms->find_all();
       
   }
   
   public function delete_comments(){
       
   }

}
