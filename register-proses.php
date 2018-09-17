<?php

	if(isset($_POST['register']))
	{
		include('koneksi.php');
        
		$nama			= $_POST['name'];
		$no_hp			= $_POST['no_hp'];
		$email			= $_POST['email'];
		$password   	= password_hash($password, PASSWORD_DEFAULT);
		$active 		= bin2hex(random_bytes(5)); //anggap ini hash semacam password random

		$input = mysqli_query($con,"INSERT INTO register VALUES(NULL,'$nama', '$no_hp', '$email', '$password', '$active', 0)") or die(mysqli_connect_error());
		
		if($input)
		{
			$to      = $email; // Send email to our user
			$subject = 'Signup | Verification'; // Give the email a subject 
			$message = '

			Thanks for signing up!
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

			------------------------
			Username: '.$nama.'
			Password: '.$active.'
			------------------------

			Please click this link to activate your account:
			http://thekingcorp.org/verify.php?active='.$active.'

			'; // Our message above including the link
							
			$headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
			 // Send our emailv

			if(mail($to, $subject, $message, $headers)){
				echo "berhasil kirim email ";
				return true; 
			}else{
				echo "gagal";
			}
			//echo 'Anda berhasil terdaftar!';
			//echo '<a href="Login.php">Kembali</a>'
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