
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="author" content="gddflvplayer">
<title>gddflvplayer example</title>
<style>
body{
font-family: Tahoma, Arial, sans;
font-size:11px;
color:#4e4e4e;
}
img {
border:0px;
}
</style>
</head>
<body style="margin: 10px;background-color: #fff;">
<center>
<!-- START gddflvplayer code -->

<p><embed wmode="transparent" height="500" width="500" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" name="gddcoder8" bgcolor="#ffffff" quality="high" src="http://www.gdd.ro/gdd/flvplayer/gddcoder8.swf"></embed></p> 
<p><em>Please note that the `settings` tab uses flash cookies to remember your settings.</em><br /> 
</p> 
<h2>ALWAYS TEST YOUR HTML CODE ONLINE</h2> 
You can test your code here:<br /> 
<a rel='nofollow' target='_blank' href="http://htmledit.squarefree.com/">http://htmledit.squarefree.com/</a> 
           </div> 
<!-- END gddflvplayer code -->
<div style="text-align:left; width:600px; margin-top:30px;">
<b>EXTERNAL PARAMS:</b><br>
<i>autoplay</i> = false // or true (false by default if missing)<br>
<i>vdo</i> =http://www.mysite.com/mymovie.flv // this is the video file in flv format (required)<br>
<i>sound</i> =50 // sound volume 0 to 100 , (50 by default if missing)<br>
<i>advert</i> =intro or commercial video// optional<br>
<i>advertdesc</i> =the intro or commercial title // optional<br>
<i>mylogo</i> = the path to a image file representing your logo // optional<br>
<i>tracker</i> = URL to track videos on play (statistics) // optional<br>
<i>buffer</i> = buffer size in seconds // type: number, default:2 if missing<br>
<i>splashscreen</i> = splash image url // optional<br>
<i>clickTAG</i> = creates a clickable button over video. clickTAG variable should be a URL // optional<br>
<i>endclipaction</i> = auto call a url or javascript function at the end of the clip. Very useful when using playlists. // optional<br>
<i>loop</i> = 'true'. Set this to  loop='true' to auto-loop ; default is 'false' // optional
<br><br>
<small>FOR SECURITY REASONS YOU MUST USE 'http:' IN FRONT OF URL PATH FOR: vdo, advert, tracker, mylogo, splashscreen,clickTAG,endclipaction<br>
<a href="http://www.adobe.com/resources/richmedia/tracking/designers_guide/" target="_blank">http://www.adobe.com/resources/richmedia/tracking/designers_guide/</a><br></small>

</div>


<h2>GDD FLVPLAYER <span style="color: #d62800;"> ONLINE DEMO</span> - also please view html code source</h2> 
<!-- player -->
<p>see this page online : <a target="_blank" href="http://gdd.ro/flvplayer/examples/example.html">http://gdd.ro/flvplayer/examples/example.html</a></p>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="http://www.stephenbelanger.com/wp-content/uploads/2010/01/jquery.flash.min_.js"></script>
<div id="myplayer">
<script type="text/javascript">
    $(document).ready(function(){
        $('#myplayer').flash({
            'src':'qq.mp4',
            'width':'640',
            'height':'480',
            'allowfullscreen':'true',
            'allowscriptaccess':'always',
            'wmode':'transparent',
            'flashvars': {
                'vdo':'http://www.gdd.ro/flvplayer/examples/video.mp4',
                'sound':'50',
                'splashscreen':'http://www.gdd.ro/flvplayer/examples/fast-and-furious-1.jpg',
                'autoplay':'false',
				'clickTAG':'http://www.gdd.ro',
                'endclipaction':'javascript:endclip();'
            }
        });
    });
</script>
</div>
<!-- player -->
<br><br><br>
<a href="http://www.gdd.ro/free-flash-flv-player/copyright" target="_blank"><img src="creativecommons.gif"></a>
<br><br><br>
</center>

<script>
// endclip function called when clip ends
function endclip(){
			$('#myplayer').flash({
            'src':'qq.mp4',
            'width':'640',
            'height':'480',
            'wmode':'transparent',
            'flashvars': {
                'vdo':'http://www.gdd.ro/flvplayer/examples/AvatarHD.mp4',
                'autoplay':'true',
            }
			});	
	}
</script>
</body>
</html>
