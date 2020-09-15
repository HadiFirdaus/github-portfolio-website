<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    
    $email_from = 'Index.html';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n";

    $to = "hadi97firdaus@yahoo.com";

    $headers = "From: $email_from \r\n";

    $headers .="Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);

    header("Location: Index.html");
?>