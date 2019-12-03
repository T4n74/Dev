<?php

    $array = array("log" => "", "enfant" => "", "email" => "", "dest" => "", "pro" => "", "logError" => "", "enfantError" => "", "emailError" => "", "destError" => "", "proError" => "", "isSuccess" => false);
    
    $emailTo = "ophelie.crambert@gmail.com";

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
         $array["log"] = verifyInput($_POST["log"]);
        $array["enfant"] = verifyInput($_POST["enfant"]);
        $array["dest"] = verifyInput($_POST["dest"]);
        $array["pro"] = verifyInput($_POST["pro"]);
        $array["email"] = verifyInput($_POST["email"]);
        $array["isSuccess"] = true; 
        $emailText = "";
        
        if (empty($array["log"])) 
        {
            $array["logError"] = "Je veux connaître ton avis !";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Log: {$array['log']}\n";
        } 

        if (empty($array["enfant"])) 
        {
            $array["enfantError"] = "Je veux connaître ton avis !";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Enfant: {$array['enfant']}\n";
        }
       
        if (empty($array["dest"])) 
        {       
            $array["destError"] = "Je veux connaître ton avis !";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "dest: {$array['dest']}\n";
        }
       
        if (empty($array["pro"])) 
        {           
            $array["proError"] = "Je veux connaître ton avis !";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "pro: {$array['pro']}\n";
        }
        if(!isEmail($array["email"])) 
        {
            $array["emailError"] = "Je veux ton email grrrr ^^";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Email: {$array['email']}\n";
        }

        if($array["isSuccess"]) 
        {
            $headers = "From: {$array['pro']} {$array['dest']} <{$array['email']}>\r\nReply-To: {$array['email']}";
            mail($emailTo, "Un message du site pour nos 5 ans", $emailText, $headers);
        }
        
        echo json_encode($array);
        
    }

    function isEmail($var) 
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    function verifyInput($var) 
    {
      $var = trim($var);
      $var = stripslashes($var);
      $var = htmlspecialchars($var);
      return $var;
    }
 
?>


