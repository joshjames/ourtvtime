<?php
$file = htmlspecialchars($_GET["file"]);
?>



<meta property="og:image" content="http://robojosh.com/media/poster.jpg" />

<meta property="og:title" content="RoboJosh Presents - Oblivion - Staring Tom Cruise" />
<meta property="og:description" content="Watch in High Definition Presented from RoboJosh servers" />
<head>
<img src='banner.png' style='position:absolute; top:0; left:0;' width='280' height='40' alt='logo' />
<script>
var express = require('express');
var evercookie = require('evercookie');

var app = express();
app.use(express.cookieParser());
app.use(evercookie.backend());
app.use(express.cookieParser());
app.use(express.static(__dirname + '/public'));
</script>
<style>
#container {
  display:                 flex;
  display:                 -webkit-flex; /* Safari 8 */
  flex-wrap:               wrap;
  -webkit-flex-wrap:       wrap;         /* Safari 8 */
  justify-content:         center;
  -webkit-justify-content: center;       /* Safari 8 */
}

.block {
  width:              800px;
  height:             800px;
  background-color:   #cccccc;
  margin:             10px;        
}
.video-js {
    position: relative !important;
    width: 45% !important;
    height: 45% !important;
}
.vjs-poster {
    position: absolute !important;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}

</style>

  <link href="video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="videojs-ie8.min.js"></script>
</head>

<body style="background-color:black" font>
<div align="center"> 
<h2 color='red'>
<font color="red">
<?php
echo $file
?>
</font>
</h2></div>
<div id="container" width="1200" height="800">
  <video id="<?php echo $file ?>" class="video-js" controls preload="auto" width="800" height="600"
  poster="poster.jpg" data-setup="{}">
    <source src='<?php echo $file ?>' type='video/mp4'>
    <source src="<?php echo $file ?>" type='video/webm'>
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>
</div>
  <script src="video.js"></script>
</body>
