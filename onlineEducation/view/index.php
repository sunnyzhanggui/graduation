<html>

<head>
	<script language=javascript>
	  function test(){
	  	alert("登录成功!");
	  }
   
      function changeImg(src){
      	//$("#image").attr("src","logo.jpg");
      	//alert(var);
      	document.getElementById("img").src = src;
      }

	</script>
</head>
	
<body>
	<center>
		<?php  include("head.html")?>
	</center> <br>
	<div>
		<div style="float:left;width:60%;text-align:right;">
		   <span><image id="img" src="/resource/image/math.jpg" width="300" height="300"/></span><br>
		   <span><a onclick="changeImg('/resource/image/math.jpg')">test</span></tr>
		   <span><a onclick="changeImg('/resource/image/it.jpg')">test</span></tr>
		   <span><a onclick="changeImg('/resource/image/finance.jpg')">test</span></tr>
		</div>
		<div style="width:30%;float:right;text-align:right;">
			
			<table border="1">
			    <tr>
					<td><a href="#">热门课程</a></td>
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>				
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>				
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>				
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>				
				</tr>
				<tr>
					<td><a href="#">row 1涉及广泛的学科涉及广</a></td>
				</tr>
            </table>
		</div>
	</div>
</body>
</html>
