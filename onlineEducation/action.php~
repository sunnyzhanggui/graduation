<?php 
	$link = mysqli_connect("localhost","phplamp","1234","online_education");

	if(!$link){
		echo "failed";	
		return;
	}

    header("Location:http://localhost/index.php");
	switch ($_GET["action"]) {
		case "register":
			 $username = $_POST["username"];
			 $password = $_POST["password"];
			 $sql = "insert into user(name,password) values('{$username}','{$password}')";
			 $result = mysqli_query($link,$sql);
			 if($result){
			 	header("Location:http://localhost/onlineEducation/index.php");
			 }else{
			 	header("Location:http://localhost/onlineEducation/register.php");
			 }
			break;
		case "login":		
			$username = $_POST["username"];
			$password = $_POST["password"];
			$sql = "select id,password from user where name='{$username}'";
			$result = mysqli_query($link,$sql);
			$rst = $result->fetch_row();
			if($rst[1] == $password){
				session_start();
				$_SESSION['userId'] = $rst[0];
				header("Location:http://localhost/onlineEducation/index.php");
				
			}else{
				header("Location:http://localhost/onlineEducation/login.php");
			}
			break;
			//echo $psd[0];
		case "addCollection":
			$courseId = $_GET["courseId"];
			$userId = $_GET["userId"];
			$sql = "select * from collection where course_id=".$courseId." and user_id=".$userId;
			$result = mysqli_query($link,$sql);
			$rst = $result->fetch_row();
			$response = "收藏：";
			if($rst == null){
				$sql = "insert into collection(user_id,course_id) values('".$userId."','".$courseId."')";
				mysqli_query($link,$sql);
				$response = "已收藏：";
			}else{
				$sql = "delete from collection where user_id=".$userId." and course_id=".$courseId;
				mysqli_query($link,$sql);
			}
			echo $response;
			beak;			
	}
	mysqli_close($link);
?>
