
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<body style="margin: 10px;background-color: #fff;">
<center>
<!-- START gddflvplayer code -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="http://www.stephenbelanger.com/wp-content/uploads/2010/01/jquery.flash.min_.js"></script>
<div id="myplayer">
<script type="text/javascript">
    $(document).ready(function(){
        $('#myplayer').flash({
            'src':'qq.mp4',
            'width':'640',
            'height':'480',
            'allowfullscreen':'false',
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
