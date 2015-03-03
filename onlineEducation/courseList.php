<html>
<center>
	<?php  include("head.html")?>
</center> 
<script src="onlineEducation.js"></script> 
<div style="float:left;width:20%;">
	<table border="1" style="font-size:30px;">
		<tr><td><a href="courseList.php?kind=math">数学</a></td></tr>
		<tr><td><a href="courseList.php?kind=it">计算机</a></td></tr>
		<tr><td><a href="courseList.php?kind=finance">金融</a></td></tr>
	</table>
</div>

<?php
	$kind = $_GET["kind"];
	if($kind != ""){
		$link = mysqli_connect("localhost","phplamp","1234","online_education");
		$sql = "select * from course where kind ='{$kind}'";
		//echo $sql;
		$result = mysqli_query($link,$sql);
		// $courses = array();
		
		//print_r($courses);	
		//echo count($courses);
		//echo $courses[0]["id"];
	}
	
?>

<div style="float:left;width:60%">

	<?php $i=1;
	     while(($course = $result->fetch_row()) != null){?>
	
		<div style="width:30%;float:left;">
			<a href="course.php?id=<?php echo $course[0];?>"><image src="<?php echo $course[0];?>.jpg" width="200" height="200"/></a><br>
			<span><?php echo $course[1];?></span><br>
			<span id="txtHint" onclick="addCollection(<?php echo $course[0];?>)">收藏：<?php echo $course[3];?>&nbsp</span><span>点击：<?php echo $course[4];?></span>			
		</div>
		
    <?php $i++;} 
    mysqli_close($link);
    ?>
</div>

<script language=javascript>




    function addCollection(courseId){
        if(<?php echo isset($_SESSION['userId']);?>){
            var userId = <?php echo $_SESSION['userId'];?>;
            // alert("haha");
             //window.location.href("action.php?action");
             xmlHttp = GetXmlHttpObject();

             if (xmlHttp==null)
            {
                alert ("Browser does not support HTTP Request")
                return;
            }
            var url = "action.php?action=addCollection";
            url = url + "&userId=" + userId + "&courseId=" + courseId;
            xmlHttp.onreadystatechange = stateChanged();
            xmlHttp.open("GET",url,true);
            xmlHttp.send(null);
        }
    }
</script>
</html>
