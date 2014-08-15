<!DOCTYPE html>
<head>
<link rel="stylesheet" href="slider.css" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect(); ?>
</head>

<body>

<div class="container">

<?php if ($detect->isMobile()) { ?> <!-- if mobile use swipe IDs and classes and ignore CSS checked functionality -->
        
        <div class="rotator">
        
        <div id='callSwipe' class='swipe-window'>
  			<div class='swipe-slides' id="slides">
                <div><a href="#slide1"><?php include ('inc/slide1.php'); ?></a></div>
                <div><a href="#slide2"><?php include ('inc/slide2.php'); ?></a></div>
                <div><a href="#slide3"><?php include ('inc/slide3.php'); ?></a></div>
  			</div>
		</div>

		<div class="buttons">
  			<button onclick='touchSwipe.prev()'><span>Previous slide</span><</button> 
       		<button onclick='touchSwipe.next()'><span>Next slide</span>></button>
		</div>
        
        </div><!-- end rotator -->
  
  	<?php } else { ?> <!-- else use the CSS checked functionality -->

<div class="rotator">
    <input type="radio" name="slider" id="slide1" class="slide1" checked />
    <input type="radio" name="slider" id="slide2" class="slide2" />
    <input type="radio" name="slider" id="slide3" class="slide3" />
    
    <div class="window">
        <ul class="slides">
        
            <li class="slide1 active">
                <?php include ('inc/slide1.php'); ?>
            </li>
            
            <li class="slide2">
                <?php include ('inc/slide2.php'); ?>
          	</li>
            
            <li class="slide3">
                <?php include ('inc/slide3.php'); ?>
            </li>
        </ul><!-- end slides -->
    </div><!-- end window -->
    
    <ul class="controls">
        <li><label class="control1 active" for="slide1">Slide 1</label></li>
        <li><label class="control2" for="slide2">Slide 2</label></li>
        <li><label class="control3" for="slide3">Slide 3</label></li>
    </ul>
</div><!-- end rotator -->

<?php } ?><!-- end mobile detect -->

</div><!-- end container -->

</body>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="matchmedia.js"></script>
<script type="text/javascript" src="picturefill.js"></script>
<script type="text/javascript" src="slider.js"></script>
<?php if ($detect->isMobile()) { ?>
	<script type="text/javascript" src='swipe.js'></script> <!-- contain all ifMobile specific JS to avoid null errors -->
<?php } ?>

</html>