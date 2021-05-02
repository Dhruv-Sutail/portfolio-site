<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "dhruvsutail338@gmail.com";
    $mail->Password = 'Angel@2015';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $my_email ="dhruvsutail338@gmail.com";
    $mail->isHTML(true);
    $mail->setFrom($email, "noreply@DhruvSutail");
    $mail->addAddress($email);
    $mail->Subject = ("$subject");
    $mail->Body = "Your Query Regarding this ".$body . " has been noted and will be Replyed back soon !!";

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }
    exit(json_encode(array("status" => $status, "response" => $response)));
}
?>
      