<?
// Send email to admin
    $to = "brandon.baughman@gmail.com";
    $subject = "Thanks for Registering";
    $txt = "$firstname $lastname was added to the database";
    $headers = "From: webmaster@example.com";

    mail($to,$subject,$txt,$headers);
    ?>