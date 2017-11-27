<?php

/**
* 
*/
class signup extends page{
	 public function get(){

$this->html .= '<div class="container"><form action="index.php?page=createaccount" method="post">
 
 <div class="form-group">
    <label  for="email">First Name:</label>
    <input type="text" class="form-control" id="Firstname">
  </div>
 <div class="form-group">
    <label  for="email">Last Name:</label>
    <input type="Text" class="form-control" id="LastName"name="Lastname">
  </div>
  <div class="form-group">
    <label  for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  <div class="form-group">
    <label  for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
  <div class="form-group">
    <label  for="pwd">Password Confirm:</label>
    <input type="password" class="form-control" id="pwdconfirm" name="pwdconfirm">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form></div>';}

}
