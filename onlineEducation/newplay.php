<script type="text/javascript" src="js/mootools.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/videobox.js"></script>

<link rel="stylesheet" href="css/videobox.css" type="text/css" media="screen" />

<a onclick="test()">play</a>

<script language=javascript>
	  function test(){
	  	Videobox.open("2.swf","caption","vidbox 800 600");
	  }
   
      function changeImg(src){
      	//$("#image").attr("src","logo.jpg");
      	//alert(var);
      	document.getElementById("img").src = src;
      }

	</script>