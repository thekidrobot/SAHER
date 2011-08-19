<?php 

//EVERY FUNCTION HERE SHOULD BE COMMENTED.

//Email recipient. Change after test.
$email_admin = "andres.gonzalez.vargas@gmail.com";

// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');

// Shows the name of the script in execution, used by menus and custom scripts
$file = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $file);
$curr_page = $break[count($break) - 1];

//Website name for page titles
$website_name = "SAHER - Society for Awareness, Harmony &amp; Equal Rights."; 

//Safely escape values.
function escape_value($value)
{
	$value = trim($value);
	$value = stripslashes($value);
	$value = htmlspecialchars($value);
  return $value;
}

//Safely Redirects
function redirect($filename)
{
	if (!headers_sent()) header('Location: '.$filename);
	else echo '<meta http-equiv="refresh" content="0;url='.$filename.'" />';
}


//Generic function to send mails

function sendemail($to,$subject,$msg)
{
  $mailcheck = spamcheck($to);
  
  if ($mailcheck==FALSE){
    echo "Invalid email format";
  }
  else{
    $headers='Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers.='From:'. $email_admin ."\r\n";
    
    $subject.="<br /><br /><pre>Intercontinental Trust Ltd is regulated by the
    Financial Services Commission in Mauritius. If you are not the intended
    recipient, please advise the sender immediately and delete this message. See
    http://www.intercontinentaltrust.com/disclaimer.htm for further information
    on confidentiality and the risks inherent in electronic communication</pre>";

    mail( $to, $subject, $msg, $headers );	  
  }
}


function spamcheck($field)
{
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  if(filter_var($field, FILTER_VALIDATE_EMAIL))
  {
    return TRUE;
  }
  else
  {
    return FALSE;
  }
}

?>