
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery-3.2.0.min.js"/></script>
<script src="js/jquery.dataTables.min.js"/></script>
<script src="js/dataTables.bootstrap.min.js"/></script>
<?php
if (isset($_POST['btnLogin'])) {

	$us = $_POST['txtUsername'];
	$pa = $_POST['txtPass'];
	
    $err = "";
   	if($us==""){
		$err .= "Enter Username, please<br/>";
	}
	if($pa==""){
		$err .= "Enter Password, please<br/>";
	}

	if($err != ""){
		echo $err;
	}
	else{
		include_once("connection.php");
		$us = htmlspecialchars(mysqli_real_escape_string($conn,$us));
		$pa = htmlspecialchars(mysqli_real_escape_string($conn, $pa));
		$pass = md5($pa);
		$res = mysqli_query($conn, "SELECT Username, Password, state FROM Customer WHERE Username='$us' AND Password='$pass'")
		or die(mysqli_errno($conn));
		$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
		if(mysqli_num_rows($res)==1){				
			$_SESSION["us"] = $us;
			$_SESSION["admin"] = $row["state"];
			echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
			}
		else{
			echo "Your username or password is incorrect. Please try again!";
			}					
	}
}
?>
<div style="padding-left: 5rem">
<h3 style="text-align: center">Login</h3>
<form id="form1" name="form1" method="POST" action="">
<div class="" style="padding: 0 30rem 0 40rem;">
        <label for="txtUsername" class="col-sm-2 control-label">Username(*):  </label>
		<div class="col-sm-10 mb-2">
		      <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username" value=""/>
		</div>
		<label for="txtPass" class="col-sm-2 control-label">Password(*):  </label>			
		<div class="col-sm-10">
		      	<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password" value=""/>
		</div>
        <div class="col-sm-2"></div>
        <div class="col-sm-10" style="text-align: end">
        	<input type="submit" name="btnLogin"  class="btn btn-success mt-3" id="btnLogin" value="Login"/>
<!--            <input type="submit" name="btnCancel"  class="btn btn-primary" id="btnLogin" value="Cancel"/>-->
			<div><br></div>
		</div>
 </div>
</form>
</div>
