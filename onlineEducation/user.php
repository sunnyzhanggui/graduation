<center>
		<?php  include("head.html")?>
</center> <br>
<div style="float:left;width:20%;">
	<table border="1" style="font-size:30px;">
		<tr><td><a href="#">我的收藏</a></td></tr>
		<tr><td><a href="#">我看过的</a></td></tr>
		<tr><td><a href="#">账号设置/a></td></tr>
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
</div>
