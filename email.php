<?php
   
   $allowedFields = array(
       'Name',
       'Telephone',
       'Email',
       'Subject',
       'Comments',
   );
   
   $requiredFields = array(
       'Name',
       'Email',
       'Subject',
       'Comments',
   );
   $errors = array();
   foreach($_POST AS $key => $value){
    if(in_array($key,$allowedFields)){
        $$key = $value;
        if(in_array($key, $requiredFields)){
            if (value == ''){
                $errors[] = "The field $key is required";
            }
        }
    }
   }
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $_POST['Email'])){
        $errors = "Invalid email address";
    }
    
    if (count($errors) > 0){
        $errorString = '<p>There was an error processing the form</p>';
        $errorString .= '<ul style="color:white">';
        foreach($errors as $error){
            foreach($errors as $error)
    {
        $errorString .= "<li>$error</li>";
    }
    $errorString .= '</ul>';
     
    // display the previous form
    include 'contact.php';

        }
    }
    else{
        header("Location: thankyou.html");

    }
?>
   
