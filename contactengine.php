<?php

$EmailFrom = "Sofos Contact Form";
$EmailTo = "abdishay@gmail.com";
$Subject = "Inquiry";
$Name = Trim(stripslashes($_POST['Name'])); 
$Phone = Trim(stripslashes($_POST['Phone'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Orgtype = Trim(stripslashes($_POST['Orgtype'])); 
$Desiredrole = Trim(stripslashes($_POST['Desiredrole'])); 
$Interest = Trim(stripslashes($_POST['Interest'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Organization Type: ";
$Body .= $Orgtype;
$Body .= "\n";
$Body .= "Desired Role: ";
$Body .= $Desiredrole;
$Body .= "\n";
$Body .= "Practice Area Interest: ";
$Body .= $Interest;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>