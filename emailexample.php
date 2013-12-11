<?php

$allowedFields = array(
  'Name',
  'Email',
  'Telephone',
  'Subject',
  'Comments',
);

$requiredFields = array(
  'Name',
  'Email',
  'Comments',
  'Subject'
);

$errors = array();
foreach($_POST AS $key => $value)
{
    // first need to make sure this is an allowed field
    if(in_array($key, $allowedFields))
    {
        $$key = $value;
         
        // is this a required field?
        if(in_array($key, $requiredFields) && $value == '')
        {
            $errors[] = "The field $key is required.";
        }
	if ($key == 'Subject'){
	    if (isset($_POST['Subject']) && $_POST['Subject'] == 'Choose Subject'){
		$errors[] = "The field $key is required.";
	    }
	}
    }  
}


if(count($errors) > 0)
{
    $errorString = '<p style="color:red">There was an error processing the form.</p>';
    $errorString .= '<ul style="color:red;">';
    foreach($errors as $error)
    {
        $errorString .= "";
        $errorString .= "<li>$error</li>";
    }
    $errorString .= '</ul>';
    $errorString .= '<br>';
     
    // display the previous form
    include 'contact.php';
}
else{
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $telephone = $_POST['Telephone'];
    $subject = $_POST['Subject'];
    $comments = $_POST['Comments'];
    $mailto = "sradhika13@yahoo.com";
    
    $message =
            "This message was sent from:\n" .
	"$http_referrer\n\n" .
	
	// Input Your Personal Information Here
	"Name: $name\n\n" .
	"Email: $email\n\n" .
	"Comments: $comments\n\n" .
	"\n\n------------------------------------------------------------\n" ;
        
        mail($mailto, $subject, $message);
        header( "Location: thankyou.html" );
    
}


?>