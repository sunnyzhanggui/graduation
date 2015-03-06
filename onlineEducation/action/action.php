<?php 
	$link = mysqli_connect("localhost","phplamp","1234","online_education");

	if(!$link){
		echo "failed";	
		return;
	}

   // header("Location:http://localhost/view/index.php");
	switch ($_GET["action"]) {
		case "register":
			 $username = $_POST["username"];
			 $password = $_POST["password"];
			 $sql = "insert into user(name,password) values('{$username}','{$password}')";
			 $result = mysqli_query($link,$sql);
			 if($result){
			 	header("Location:http://localhost/view/index.php");
			 }else{
			 	header("Location:http://localhost/view/register.php");
			 }
			break;
		case "login":		//处理登陆
			$username = $_POST["username"];
			$password = $_POST["password"];
			$sql = "select id,password from user where name='{$username}'";
			$result = mysqli_query($link,$sql);
			$rst = $result->fetch_row();
			if($rst[1] == $password){
				session_start();//在session里存已登陆用户
				$_SESSION['userId'] = $rst[0];
				header("Location:http://localhost/view/index.php");
				
			}else{
				header("Location:http://localhost/view/login.php");
			}
			break;
			//echo $psd[0];
		case "addCollection":
			$courseId = $_GET["courseId"];
			$userId = $_GET["userId"];
			$sql = "select * from collection where course_id=".$courseId." and user_id=".$userId;
			$result = mysqli_query($link,$sql);
			$rst = $result->fetch_row();
			//$response = "收藏：";
            echo 1;
			if($rst == null){
				$sql = "insert into collection(user_id,course_id) values('".$userId."','".$courseId."')";
				mysqli_query($link,$sql);
                $sql = "update course set collect_num=collect_num+1 where id=".$courseId;
                mysqli_query($link,$sql);
                header("Location:http://localhost/view/courseList.php?kind=math");
                //echo "javascript:history.go(-1);";
				//$response = "已收藏：";
			}else{
				$sql = "delete from collection where user_id=".$userId." and course_id=".$courseId;
				mysqli_query($link,$sql);
                header("Location:http://localhost/view/courseList.php");
               // echo "javascript:history.go(-1);";
                //echo 3;
			}
			//echo $response;
			beak;
        case "play":

            break;
	}
	mysqli_close($link);
?>
