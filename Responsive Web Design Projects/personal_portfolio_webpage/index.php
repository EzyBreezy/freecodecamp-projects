<?php
if (isset($_POST['submit'])) {
    // variables

    $mailTo         =   "ezanab2@gmail.com";

    $name       =   $_POST['name'];
    $email      =   $_POST['email'];
    $phone      =   $_POST['phone'];
    $subject    =   $_POST['subject'];
    $message    =   $_POST['message'];

    
    // concatenated message with details of post.
    $body       =   "You have received an e-mail from ".$name.".\n\n".$subject."\n\n".$message."\n\n I can be reached at".$phone."\n or \n".$email;

    //email to send it too, subject, the concatenated message.
    mail($mailTo, $subject, $body);
}
    
?>