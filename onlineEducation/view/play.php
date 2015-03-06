

<!doctype html>

<html>

<head>
   <meta charset="utf-8">

   <title>Minimalist skin · Standalone demo · Flowplayer</title>

   <!-- optimize mobile versions -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- The "minimalist" skin, "minimalist.css", "functional.css" and "playful.css" are available -->
   <link rel="stylesheet" href="//releases.flowplayer.org/5.5.2/skin/minimalist.css">

   <!-- Minimal styling for this standalone page (can be removed) -->
   <style>
   body {
      font-family: "myriad pro", tahoma, verdana, arial, sans-serif;
      font-size: 14px;
      margin: 0;
      padding: 0;
   }
   #content {
      margin: 50px auto;
      max-width: 982px;
   }
   .flowplayer {
  background-image: url("/resource/image/logo.jpg");
}
   </style>

   
   <!-- Flowplayer depends on jquery -->
   <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

   <!-- Flowplayer-->
   <script src="//releases.flowplayer.org/5.5.2/flowplayer.min.js"></script>

   <script>
   // configure rtmp for this demo
   flowplayer.conf.rtmp = "rtmp://s3b78u0kbtx79q.cloudfront.net/cfx/st";
</script>

</head>

<body>
<div id="content">

<div data-ratio="0.4167" class="flowplayer is-splash">
   <video>
   
   
   <source type="video/mp4"
           src="/resource/video/qq.mp4">
   <source type="video/flash"
           src="/resource/video/qq.mp4"></video>
</div>


</div><!--/end content -->
</body>

</html>