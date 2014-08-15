<head>
<link rel="stylesheet" href="slider.css" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="matchmedia.js"></script>
<script type="text/javascript" src="picturefill.js"></script>
<script type="text/javascript" src="slider.js"></script>
</head>

<div class="rotator">
    <input type="radio" name="slider" id="slide1" class="slide1" checked />
    <input type="radio" name="slider" id="slide2" class="slide2" />
    <input type="radio" name="slider" id="slide3" class="slide3" />
    
    <div class="window">
        <ul class="slides">
        
            <li class="slide1 active">
                <div data-picture data-alt="Placeholder alt text">
                    <div data-src="images/small.jpg"></div>
                    <div data-src="images/small_x2.jpg"      data-media="	(min-device-pixel-ratio: 2),
                    														(min--moz-device-pixel-ratio: 2),
                                                                            (-o-min-device-pixel-ratio: 2/1),
                                                                            (min-device-pixel-ratio: 2),
                                                                            (min-resolution: 192dpi),
                                                                            (min-resolution: 2dppx)">
                	</div>
                    <div data-src="images/medium.jpg"        data-media="(min-width: 400px)"></div>
                    <div data-src="images/medium_x2.jpg"     data-media="(min-width: 400px) and 
                    														(min-device-pixel-ratio: 2),
                    														(min--moz-device-pixel-ratio: 2),
                                                                            (-o-min-device-pixel-ratio: 2/1),
                                                                            (min-device-pixel-ratio: 2),
                                                                            (min-resolution: 192dpi),
                                                                            (min-resolution: 2dppx)">
                	</div>
                    <div data-src="images/large.jpg"         data-media="(min-width: 800px)"></div>
                    <div data-src="images/large_x2.jpg"      data-media="(min-width: 800px) and
                    														(min-device-pixel-ratio: 2),
                    														(min--moz-device-pixel-ratio: 2),
                                                                            (-o-min-device-pixel-ratio: 2/1),
                                                                            (min-device-pixel-ratio: 2),
                                                                            (min-resolution: 192dpi),
                                                                            (min-resolution: 2dppx)">
                	</div>
                    <div data-src="images/extralarge.jpg"    data-media="(min-width: 1000px)"></div>
                    <div data-src="images/extralarge_x2.jpg" data-media="(min-width: 1000px) and
                    														(min-device-pixel-ratio: 2),
                    														(min--moz-device-pixel-ratio: 2),
                                                                            (-o-min-device-pixel-ratio: 2/1),
                                                                            (min-device-pixel-ratio: 2),
                                                                            (min-resolution: 192dpi),
                                                                            (min-resolution: 2dppx)">
                	</div>
            
                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                    <noscript>
                        <img src="images/small.jpg" alt="Fallback placeholder text(/image) for when no JS">
                    </noscript>
    			</div><!-- end picturefill -->
            </li><!-- end slide -->
            
            <li class="slide2"> <!-- Example - use include for tidyness/better readability -->
                <?php include ('inc/slide2.php'); ?>
          	</li>
            
            <li class="slide3">
                <div data-picture data-alt="Placeholder alt text">
                    <div data-src="images/small.jpg"></div>
                    <div data-src="images/small_x2.jpg"      data-media="	(min-device-pixel-ratio: 2),
                    														(min--moz-device-pixel-ratio: 2),
                                                                            (-o-min-device-pixel-ratio: 2/1),
                                                                            (min-device-pixel-ratio: 2),
                                                                            (min-resolution: 192dpi),
                                                                            (min-resolution: 2dppx)">
                	</div>
                    <div data-src="images/medium.jpg"        data-media="(min-width: 400px)"></div>
                    <div data-src="images/medium_x2.jpg"     data-media="(min-width: 400px) and 
                    														(min-device-pixel-ratio: 2),
                    														(min--moz-device-pixel-ratio: 2),
                                                                            (-o-min-device-pixel-ratio: 2/1),
                                                                            (min-device-pixel-ratio: 2),
                                                                            (min-resolution: 192dpi),
                                                                            (min-resolution: 2dppx)">
                	</div>
                    <div data-src="images/large.jpg"         data-media="(min-width: 800px)"></div>
                    <div data-src="images/large_x2.jpg"      data-media="(min-width: 800px) and
                    														(min-device-pixel-ratio: 2),
                    														(min--moz-device-pixel-ratio: 2),
                                                                            (-o-min-device-pixel-ratio: 2/1),
                                                                            (min-device-pixel-ratio: 2),
                                                                            (min-resolution: 192dpi),
                                                                            (min-resolution: 2dppx)">
                	</div>
                    <div data-src="images/extralarge.jpg"    data-media="(min-width: 1000px)"></div>
                    <div data-src="images/extralarge_x2.jpg" data-media="(min-width: 1000px) and
                    														(min-device-pixel-ratio: 2),
                    														(min--moz-device-pixel-ratio: 2),
                                                                            (-o-min-device-pixel-ratio: 2/1),
                                                                            (min-device-pixel-ratio: 2),
                                                                            (min-resolution: 192dpi),
                                                                            (min-resolution: 2dppx)">
                	</div>
            
                    <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
                    <noscript>
                        <img src="images/small.jpg" alt="Fallback placeholder text(/image) for when no JS">
                    </noscript>
    			</div><!-- end picturefill -->
            </li><!-- end slide -->
        </ul><!-- end slides -->
    </div><!-- end window -->
    
    <ul class="controls">
        <li><label class="control1 active" for="slide1">Slide 1</label></li>
        <li><label class="control2" for="slide2">Slide 2</label></li>
        <li><label class="control3" for="slide3">Slide 3</label></li>
    </ul>
</div><!-- end rotator -->
