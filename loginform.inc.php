<?php 
if (isset($_POST['username'])&& isset($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
if (!empty($username)&&!empty($password)) {
	$query="SELECT  * FROM member WHERE username='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password)."'";
if ($query_run=mysql_query($query)) {

	$mysql_num_rows=mysql_num_rows($query_run);
	if ($mysql_num_rows==0) {
		echo "invalid username and password";
		
	}

	else if($mysql_num_rows==1)
	{
   
	$user_id=mysql_result($query_run, 0,'mem_id');

	$_SESSION['user_id']=$user_id;
	header('location:index.php');
	}
}

}
else
{

	echo "please input username and password";
}



}


 ?>

 <form action="<?php echo $current_file; ?>" method="post">
 username:	
<input type="text" name="username">
passsword:
<input type="password" name="password">
<input type="submit" value="log in">

 </form>