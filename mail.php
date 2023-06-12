<?php

if (isset($_POST['submmit'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $message = $_POST['contact'];

    $mailTo = "rpzentpris@gmail.com"
    $headers = "From: ".$contact;
    $txt = "You have received a mail form:".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
