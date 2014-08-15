<?php require_once('recaptchalib.php');
	$privatekey = "6LfSAcwSAAAAAO2CBx2dosShtLjj9uEbWegu_3En";
	$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

	if (!$resp->is_valid){ // What happens when the CAPTCHA was entered incorrectly
    	die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." . "(reCAPTCHA said: " . $resp->error . ")");
  	} else {

	if(isset($_POST['ctc_submit'])) { // When the form is submitted
	
	// Define form field content 
	$ctc_q_one	 	= $_POST['ctc_q_one'];
	$ctc_q_two	 	= $_POST['ctc_q_two'];
	$ctc_q_three	= $_POST['ctc_q_three'];
	
	$p_title	 	= $_POST['p_title'];
	$p_firstname 	= $_POST['p_firstname'];
	$p_lastname 	= $_POST['p_lastname'];
	$p_email 		= $_POST['p_email'];
	
	{
	echo "<meta http-equiv=\"Refresh\" content=\"0; url=https://nres.naturalretreats.com/pls/apex/nres.web_register?p_title=" . $p_title . "&p_firstname=" .$p_firstname . "&p_lastname=" .$p_lastname ."&p_email=" .$p_email . "&p_mailing_list_code=" .'XMAS20UK' . "&p_url_success=" .'http://www.naturalretreats.co.uk/thank-you-corporate.php'. "&p_url_fail=" .'http://www.naturalretreats.co.uk/sorry.php' ."\">";
	}

		// If there is no error, send the email
		if(!isset($hasError)) {
			
			$ctc_hdr.='From: '.$ctc_title.' '.$ctc_forename.' '.$ctc_surname.' <'.$ctc_email.'>' ."\r\n". 'Reply-To: '.$ctc_email;

			$ctc_msg.='Name: '.$ctc_title.' '.$ctc_forename.' '.$ctc_surname."\n\n";
			$ctc_msg.='Email: '.$ctc_email."\n\n";

			$ctc_msg.='Q1: How many penthouse apartments are there at Fistral Beach?'."\n";
			$ctc_msg.= $ctc_q_one."\n\n";
			$ctc_msg.='Q2: Which of our locations has been awarded the Green Tourism Award?'."\n";
			$ctc_msg.= $ctc_q_two."\n\n";
			$ctc_msg.='Q3: Which of our locations is closest to the Eden Project?'."\n";
			$ctc_msg.= $ctc_q_three;
			
			$ctc_rsp.='Dear '.$ctc_title.' '.$ctc_surname."\n\n";
			$ctc_rsp.="Thank you for entering our competition."."\n\n";
			$ctc_rsp.="Natural Retreats";
	
			mail('info@naturalretreats.com', 'Natural Retreats - Corporate traveller competition', $ctc_msg, $ctc_hdr);
			mail('j.reid@naturalretreats.com', 'Natural Retreats - Corporate traveller competition', $ctc_msg, $ctc_hdr);
			mail($ctc_email, 'Natural Retreats - Thank you for entering', $ctc_rsp, 'From: info@naturalretreats.com');
		}
	}
} ?>