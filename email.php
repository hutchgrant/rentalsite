<?php


/*
Copyright 2014-2015 Grant Hutchinson

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

One exception, this software is not allowed to be used by Simon Choucroun or any assosciate or affiliate individual/company */
class ccEmail{
	function get_include_contents($filename, $variablesToMakeLocal) {
	    extract($variablesToMakeLocal);
	    if (is_file($filename)) {
	        ob_start();
	        include $filename;
	        return ob_get_clean();
	    }
	    return false;
	}

	function sendEmail($args){
	    include('config.php');
	    require './PHPMailer/PHPMailerAutoload.php';
	    //Create a new PHPMailer instance
	    $mail = new PHPMailer();

	    //Tell PHPMailer to use SMTP
	    $mail->isSMTP();

	    //Enable SMTP debugging
	    // 0 = off (for production use)
	    // 1 = client messages
	    // 2 = client and server messages
	    $mail->SMTPDebug = 0;

	    //Ask for HTML-friendly debug output
	    $mail->Debugoutput = 'html';

	    //Set the hostname of the mail server
	    $mail->Host = $smtpHost;

	    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	    $mail->Port = $smtpPort;

	    //Set the encryption system to use - ssl (deprecated) or tls
	    $mail->SMTPSecure = $smtpType;

	    //Whether to use SMTP authentication
	    $mail->SMTPAuth = $smtpAuth;

	    //Username to use for SMTP authentication - use full email address for gmail
	    $mail->Username = $smtpUser;

	    //Password to use for SMTP authentication
	    $mail->Password = $smtpPass;

	    //Set who the message is to be sent from
	    $mail->setFrom($smtpFromEmail, $smtpFromName);

	    //Set an alternative reply-to address
	    $mail->addReplyTo($smtpReplyEmail, $smtpReplyName);

	    //Set who the message is to be sent to
	    $mail->addAddress($smtpSendToEmail);

	    //Set the subject line
	    $mail->Subject = 'A newly registered client';
	    $args['title'] = 'New Client';
    	$args['content'] = 'A new client has registered:';

	    $body = $this->get_include_contents('./templates/email_content.php', $args);

		$mail->msgHTML($body);

		//send the message, check for errors
		if (!$mail->send()) {
		    //echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    //echo "Message sent!";
		}
	} /// end sendEmail()

}

?>
