<?php
    if ($_POST['submit'])
    // variables

    $mailTo         =   "ezanab2@gmail.com";

    $visitor_name       =   $_POST['name'];
    $visitor_email      =   $_POST['email'];
    $visitor_phone      =   $_POST['phone'];
    $visitor_subject    =   $_POST['subject'];
    $visitor_message    =   $_POST['message'];

    // the email to come in
    $email_from         = 'EzyBreezyPage@test.com';
    $email_subject      = $visitor_subject;
    $email_body         = "You have received an e-mail from $visitor_name.\n".
                            "Contact Email is: $visitor_email.\n".
                            "Contact Phone is: $visitor_phone.\n".
                            "Visitors Message is.\n $visitor_message.\n";
    
    // concatenated message with details of post.
    // $body       =   "You have received an e-mail from ".$name.".\n\n".$subject."\n\n".$message."\n\n I can be reached at".$phone."\n or \n".$email;

    //email to send it too, subject, the concatenated message.
    mail($mailTo, $email_subject,$email_body);
    
    header("Location: index.html")
?>