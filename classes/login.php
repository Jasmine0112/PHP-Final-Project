<?php

/**
* 
*/
class login extends page{
	 public function get(){
/*echo '<html> <title>Login</title> <body> <?php $usr = "admin"; $psw = "password"; $username = '$_POST[username]'; $password = '$_POST[password]'; //$usr == $username && $psw == $password session_start(); if ($_SESSION['login']==true || ($_POST['username']=="admin" && $_POST['password']=="password")) { echo "password accepted"; $_SESSION['login']=true; else { echo "incorrect login"; } ?> <form name="input" action="adminportal.php" method="get"> <input type="submit" value="Home"> </form> </body> </html>'
*/
$this->html .= '<form class="form-inline">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label  for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>';}

}





?>
