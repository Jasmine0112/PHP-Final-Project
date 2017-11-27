<?php

/**
* 
*/
class login extends page{
	   public function _construct(){
         
          
          $Firstname = '$_POST[FirstName]';
          $Lastname = '$_POST[LastName]';          
          $email_address = '$_POST[email]';
          $password = '$_POST[pwd]';
          $password_confirm = '$_POST[pwdconfirm]';
          
          if ($password==$password_confirm) {
              $db = dbConn::getConnection();
            # code...
          }
  
    

    }

}





?>
