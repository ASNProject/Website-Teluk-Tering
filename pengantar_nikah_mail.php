<?php
$message = '';

if (isset($_POST["submit"])){
    $path = 'upload/' . $_FILES["pengantar"]["name"];
    move_uploaded_file($_FILES["pengantar"]["tmp_name"], $path);
    $path2 = 'upload/' . $_FILES["ktp"]["name"];
    move_uploaded_file($_FILES["ktp"]["tmp_name"], $path2);
    $path3 = 'upload/' . $_FILES["kk"]["name"];
    move_uploaded_file($_FILES["kk"]["tmp_name"], $path3);
    $path4 = 'upload/' . $_FILES["aktelahir"]["name"];
    move_uploaded_file($_FILES["aktelahir"]["tmp_name"], $path4);
    $path5 = 'upload/' . $_FILES["foto"]["name"];
    move_uploaded_file($_FILES["foto"]["tmp_name"], $path5);
    $path6 = 'upload/' . $_FILES["suratnikah"]["name"];
    move_uploaded_file($_FILES["suratnikah"]["tmp_name"], $path6);
    $path7 = 'upload/' . $_FILES["nikahagama"]["name"];
    move_uploaded_file($_FILES["nikahagama"]["tmp_name"], $path7);
    $message = '
    <h3 align="center">Permohonan Pengantar Nikah</h3>
    <table border="1" width="100%" cellpadding="5" cellspacing="5">
        <tr>
            <td width="30%">Nama</td>
            <td width="70%">' .$_POST["nama"] . '</td>
        </tr>
        <tr>
            <td width="30%">NIK</td>
            <td width="70%">' .$_POST["nik"] . '</td>
        </tr>
        <tr>
            <td width="30%">Email</td>
            <td width="70%">' .$_POST["email"] . '</td>
        </tr>
        <tr>
            <td width="30%">No.HP</td>
            <td width="70%">' .$_POST["nohp"] . '</td>
        </tr>
        <tr>
            <td width="30%">Alamat Domisili</td>
            <td width="70%">' .$_POST["alamatdomisili"] . '</td>
        </tr>
    ';

require 'class/class.phpmailer.php';
$mail = new PHPMailer;
$mail->IsSMTP();

// ADD YOUR DETAILS HERE
    $mail->Host = 'smtp.gmail.com';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '465';                                //Sets the default SMTP server port
    $mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'emailpengirim@gmail.com';                    //Sets SMTP username
    $mail->Password = 'passwordemailpengirim';                    //Sets SMTP password
    $mail->SMTPSecure = 'ssl';                            //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = 'emailpengirim@gmail.com';                    //Sets the From email address for the message
    $mail->FromName = '' .$_POST["nama"] . '';                //Sets the From name of the message
    $mail->AddAddress('emailpenerima@gmail.com', 'username email pengirim');        //Adds a "To" address
// ADD YOUR DETAILS HERE
    
    $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML
    $mail->AddAttachment($path);
    $mail->AddAttachment($path2); 
    $mail->AddAttachment($path3); 
    $mail->AddAttachment($path4); 
    $mail->AddAttachment($path5); 
    $mail->AddAttachment($path6); 
    $mail->AddAttachment($path7); //Adds an attachment from a path on the filesystem
    $mail->Subject = 'Permohonan Pengantar Nikah';                //Sets the Subject of the message
    $mail->Body = $message;                            //An HTML or plain text message body
    if ($mail->Send())                                //Send an Email. Return true on success or false on error
    {
        $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
        unlink($path);
    } else {
        $message = '<div class="alert alert-danger">There is an Error</div>';
    }
}

?>
