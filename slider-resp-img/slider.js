/* Play slides automatically
--------------------------------------------------*/
function playslides(){
	var active	= $('.rotator input:checked').attr('id'); 		// retrieve ID of checked input
	var current	= active.replace("slide",""); 					// isolate integer of checked input
	
	if ($('.rotator input:last').is(':checked')){				// if last slide
		var newval	= 1; 										// restart animation at first slide
	} else {													// if not last slide
		var newval	= parseInt(current) + 1;					// display next slide
	}

	$('.rotator input:checked').removeAttr('checked');
	$('.rotator ul.controls label.active').removeClass('active');
	$('.rotator div.active').removeClass('active');
	$('.rotator input#slide'+newval).attr('checked','checked');
	$('.rotator ul.controls label.control'+newval).addClass('active');
	$('.rotator div.slide'+newval).addClass('active');
}

function startLoop(){
	interval = setInterval(playslides,5000);  					// loop animation at 5 second intervals
}

function pauseLoop(){
	clearInterval(interval);
}

$().ready(function(){
	startLoop();
	$('.rotator').hover(
		function(){
			pauseLoop();
		},
		function(){
			startLoop();
		}
	);
});