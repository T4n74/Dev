<?php

    $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    $isSuccess = false;
    $emailTo ="alban.clergeot@nemoxia.fr";


    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $firstname = verifyInput($_POST["firstname"]);
        $name = verifyInput($_POST["name"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);
        $isSuccess= true; 
        $emailText = "";

        if(empty($firstname))
        {            
            $firstnameError = "Je veux connaitre votre prénom !";
            $isSuccess = false;
        }
          else
        {
            $emailText .= "Firstname: $firstname\n";
        }

         if(empty($name))
        {
            $nameError = "Vous avez oublier votre nom !";
            $isSuccess = false;
        }
         else
        {
            $emailText .= "Name: $name\n";
        }

        if(!isEmail($email))
        {
            $emailError = "Ce n'est pas un email valide";
            $isSuccess = false;
        }
         else
        {
            $emailText .= "Email: $email\n";
        }
         if (!isPhone($phone))
        {
            $phoneError = "Que des chiffres et des espaces, svp.";
            $isSuccess = false;
        }
         else
        {
            $emailText .= "Phone: $phone\n";
        }
         if(empty($message))
        {            
            $messageError = "Quel est votre message ?";
            $isSuccess = false;
        }
          else
        {
            $emailText .= "Message: $message\n";
        }
        if($isSuccess) 
        {
            $headers = "From: $firstname $name <$email>\r\nReply-To: $email";
            mail($emailTo, "Un message du site CV", $emailText, $headers);
            $firstname = $name = $email = $phone = $message = "";

        }
    } 

    function isPhone($var) 
    {
        return preg_match("/^[0-9 ]*$/",$var);
    } 

    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripcslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }  
 
?>