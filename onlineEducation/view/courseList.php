<script type= "text/javascript" src="/resource/js/onlineEducation.js"></script>
<center>
	<?php  include("head.html")?>
</center>
<div style="float:left;width:20%;">
	<table border="1" style="font-size:30px;">
		<tr><td><a href="courseList.php?kind=math">数学</a></td></tr>
		<tr><td><a href="courseList.php?kind=it">计算机</a></td></tr>
		<tr><td><a href="courseList.php?kind=finance">金融</a></td></tr>
	</table>
</div>

<?php
    $userId = $_SESSION['userId'];
    if($userId == null){
        $userId = 0;
    }
	$kind = $_GET["kind"];
	if($kind != ""){
		$link = mysqli_connect("localhost","phplamp","1234","online_education");
		$sql = "select * from course where kind ='{$kind}'";
		$result = mysqli_query($link,$sql);
	}
?>

<div style="float:left;width:60%">

	<?php $i=1;
	     while(($course = $result->fetch_row()) != null){?>
	
		<div style="width:30%;float:left;">
			<a href="course.php?id=<?php echo $course[0];?>"><image src="/resource/image/<?php echo $course[0];?>.jpg" width="200" height="200"/></a><br>
			<span><?php echo $course[1];?></span><br>
          <?php   $sql = "select * from collection where user_id ='{$userId}' and course_id='{$course[0]}'";
                    $data = mysqli_query($link,$sql);
                    if($data->fetch_row() == null){
            ?>
			        <span onclick="addCollection(<?php echo $userId;?>,<?php echo $course[0];?>)">收藏：<?php echo $course[3];?>&nbsp</span><span>点击：<?php echo $course[4];?></span>
            <?php }else{ ?>
                    <span onclick="">已收藏：<?php echo $course[3];?>&nbsp</span><span>点击：<?php echo $course[4];?></span>
            <?php } ?>
		</div>
		
    <?php    $i++;}
             mysqli_close($link);
    ?>
</div>


