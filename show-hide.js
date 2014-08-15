/*
Author			James Tudsbury
Date			02/2012
Website			http://www.robotcreative.co.uk
*/
 $(document).ready(function() {
	 $('#intro-text').show();
	 $('#event-text').hide();
	 $('#venue-text').hide();
	 $('#technical-text').hide();
	 $('#equipment-text').hide();
 });
 $(document).ready(function() {
   $('#event-button').click(function(){
     $('#event-text').show();
	 $('#venue-text').hide();
	 $('#intro-text').hide();
	 $('#technical-text').hide();
	 $('#equipment-text').hide();
   });
    $('#venue-button').click(function(){
     $('#venue-text').show();
	 $('#event-text').hide();
	 $('#intro-text').hide();
	 $('#technical-text').hide();
	 $('#equipment-text').hide();
   });
    $('#technical-button').click(function(){
     $('#technical-text').show();
	 $('#event-text').hide();
	 $('#intro-text').hide();
	 $('#venue-text').hide();
	 $('#equipment-text').hide();
   });
    $('#equipment-button').click(function(){
     $('#equipment-text').show();
	 $('#event-text').hide();
	 $('#intro-text').hide();
	 $('#technical-text').hide();
	 $('#venue-text').hide();
   });
 });