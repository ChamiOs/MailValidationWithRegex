
<form method="post">

	Enter Valid Email: <input type="text" name="email">
	<input type="Submit" value="sent" >
</form>



<?php


	if (isset($_REQUEST['email'])) {
	    $to = $_REQUEST['email'];
			if (preg_match("/^([_a-z0-9\-]+)(\.[_a-z0-9\-]+)*@([a-z0-9\-]{2,}\.)*([a-z]{2,4})(,([_a-z0-9\-]+)(\.[_a-z0-9\-]+)*@([a-z0-9\-]{2,}\.)*([a-z]{2,4}))*$/", $to)  ) {
			echo 'Valid email address';
			} else {
		    echo 'The email is not valid';
		}
	}

?>