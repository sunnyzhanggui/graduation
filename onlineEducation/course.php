
<center>
	<?php  include("head.html"); ?>
</center>
<a href="http://www.youtube.com/watch?v=VhtIydTmOVU" rel="vidbox 800 600" title="caption">our video1</a>

<?php 
   $id = $_GET["id"];
	if($id != ""){
		$link = mysqli_connect("localhost","phplamp","1234","online_education");
		$sql = "update course set click_num = click_num + 1";
		mysqli_query($link,$sql);

		$sql = "select * from course where id ='{$id}'";
		//echo $sql;
		$result = mysqli_query($link,$sql);
		$course = $result->fetch_row();
	}

?>

<div>
	<div>
		<image src="<?php echo $course[0];?>.jpg" width="400" height="300"/><br>
		<span><?php echo $course[1];?></span><br>
		<span>收藏：<?php echo $course[3];?></span><span>点击：<?php echo $course[4];?></span><a href="play.php?id=<?php echo $course[0];?>">播放</a>
	</div>
</div>

<div>
	<h5>课程简介</h5>
	<p>
		<?php include($course[0].".txt");?>
	</p>
</div>

<div>
	<h5>课程目录</h5>
	<ol>
		<li>hhh</li>
		<li>kkkk</li>
		<li>ddds</li>
	</ol>
</div>
