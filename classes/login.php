
<?php

/**

* 

*/

class login extends page

{

	public function get(){

		$this->html .= '<div class="container"><form class="form-inline" action="index.php?page=auth" method="post">

			  <div class="form-group">

			    <label for="email">Email address:</label>

			    <input type="email" class="form-control" id="email">

			  </div>

			  <div class="form-group">

			    <label for="pwd">Password:</label>

			    <input type="password" class="form-control" id="pwd">

			  </div>

			  <div class="checkbox">

			    <label><input type="checkbox"> Remember me</label>

			  </div>

			  <button type="submit" class="btn btn-default">Submit</button>

			</form></div>';



	}

}



?>
