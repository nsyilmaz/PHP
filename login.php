
<?php

require_once 'lib/lib.php';






$UserName = isset($_POST["username"]) ? $_POST["username"] : null;
$UserPassword = isset($_POST["password"]) ? $_POST["password"] : null;


if ( $UserName && $UserPassword){


	$Filter = new SecurityFilter;

	if (  !($Filter->Check($UserName)<0)  ){

		$MY = new MySqlConnection;
		$MY->Open();
		$UserPasswordHash = hash('sha256', $UserPassword);

		$getquery=sprintf("select * from auth where user_name='$UserName' and auth_pass='$UserPasswordHash' ");
		$RESULT=$MY->ExecSql($getquery);


		if ($r = mysqli_fetch_array($RESULT)) {
			$user_id = $r["user_id"];
			$user_name = $r["user_name"];
			$first_name = $r["first_name"];
			$last_name = $r["last_name"];
			$auth_group = $r["auth_group"];


			session_start();
			session_reset();
			session_regenerate_id();

			$_SESSION['SessionID']	= session_id();
			$_SESSION['UserID']	= $user_id;
			$_SESSION['UserName']	= $user_name;
			$_SESSION['FirstName']	= $first_name;
			$_SESSION['LastName']	= $last_name;
			$_SESSION['UserAuth']	= $auth_group;
			$_SESSION['LOGIN']	= 1;


			header("Location:dashboard.php");
			die();


		}else {
			header("Location:index.php?error=login");
			die();
		}


		$MY->Close();


	}
	else{
		header("Location:index.php?error=login");
		die();
	}

}
else{
	header("Location:index.php?error=login");
	die();
}

die();


?>
