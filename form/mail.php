<?php


if(isset($_POST['submit'])){
    $to       = 'info@getmailout.com';
$subject  = 'Wennovation Hub';
$message  = 'Hello Admin, <br><br> you just received an email from a new client, below are the details meant for processing: <br><br>' .
    '<br> Client First Name : ' . $_POST['contact-name'] .
    '<br> Client Last Name : ' . $_POST['contact-last'] .
    '<br> Client Email : ' . $_POST['contact-email'] .
    '<br> Client Request : ' . $_POST['contact-subject'] .
    '<br> Client Comments : ' . $_POST['msg'] .
    '<br> Client Phone number : ' . $_POST['contact-phone'] .
    '<br><br> Please Ensure you respond to this request promptly and Reach out to the client within 48 hours. Thanks for your service';
$headers  = 'From: info@getmailout.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';  
    
  if(mail($to, $subject, $message, $headers))
    echo "<script>window.location = 'http://getmailout.com/wenno/success/'</script>";
else
    echo "Something went wrong your Registration process failed.";
    }

?>