<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';

if(isset($_POST['register']))
{
	include('../koneksi.php');
	
	$nama			= $_POST['name'];
	$no_hp			= $_POST['no_hp'];
	$email			= $_POST['email'];
	$password   	= password_hash($password, PASSWORD_DEFAULT);
	$active 		= bin2hex(random_bytes(5)); //anggap ini hash semacam password random

	$input = mysqli_query($con,"INSERT INTO register VALUES(NULL,'$nama', '$no_hp', '$email', '$password', '$active', 0)") or die(mysqli_connect_error());
	
	if($input)
	{
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
			$mail->SMTPDebug = 0;                                 // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'kakuna.rapidplex.com;www.thekingcorp.org';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'bequeen@thekingcorp.org';                 // SMTP username
			$mail->Password = 'bequeen@TheKing~18';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465 ;                                    // TCP port to connect to

			//Recipients
			$mail->setFrom('bequeen@thekingcorp.org', 'Bequeen');
			$mail->addAddress($email);               // Name is optional
			$mail->addReplyTo('noreply@thekingcorp.org', 'noreply');
			$mail->addCC('bequeen@thekingcorp.org');
			$mail->addBCC('bequeen@thekingcorp.org');


			//Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Website Contact From:  Bequeen';
			$mail->Body = '

			Thanks for signing up!
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

			------------------------
			Username: '.$nama.'
			------------------------

			Please click this link to activate your account:
			https://bequuen.thekingcorp.org/verify.php?active='.$active.'

			
				'; 

				$mail->send();
				echo "Berhasil dikirim ke ".$email;
			return true;
		} catch (Exception $e) {
				return false;
				echo "gagal";
		}
		
	}
	else
	{
		echo 'Gagal terdaftar! ';
		//echo '<a href="still_found.php">Kembali</a>';
	}
}
else
{
	echo 'test';
	echo '<script>window.history.back()</script>';
}
?>