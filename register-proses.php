<?php

	if(isset($_POST['register']))
	{
		include('koneksi.php');
        
		$nama		= $_POST['name'];
		$no_hp		= $_POST['no_hp'];
		$email		= $_POST['email'];
		$password   = $_POST['password'];
		$active 	= bin2hex(random_bytes(5));

		$input = mysqli_query($con,"INSERT INTO register VALUES(NULL,'$nama', '$no_hp', '$email', '$password', '$active', 0)") or die(mysqli_connect_error());
		
		if($input)
		{
			
			$nama = strip_tags(htmlspecialchars($_POST['name']));
			$email = strip_tags(htmlspecialchars($_POST['email']));

			$email_subject      = "Website Contact From:  Be Queen Salon";
			$headers            = "From: bequeen@bequeen.000webhostapp.com"."\r\n";
			$headers            .= "Reply-To:noreply@bequeen.000webhostapp.com" . "\r\n";
			$headers            .= "MIME-Version: 1.0\r\n";
			$headers            .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			$message ='<html>';
			$message .='<body>';
				$message .='<div class="mail" style="margin: auto; width: 100%; max-width: 350px; text-align: center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 30px;">';
					$message .='<div class="mail-header" style="color: white; background-color: #003365; width: 100%; font-size: 20px; padding: 20px; border-top-left-radius: 25px; border-top-right-radius: 25px;">';
						$message .='<strong>VERIFIKASI EMAIL DARI <br/>BE QUEEN</strong>';
					$message .='</div>';
					$message .='<div class="mail-body" style="color: black; background-color:  #CFE7EA; width: 100%; padding: 20px;">';
						$message .='<h1>Hallo '.$nama.', Silahkan lakukan verifikasi email anda dengan menekan tombol berikut </h1>';
						$message .='<a href="https:/bequeen@bequeen.000webhostapp.com/api/mail/verifikasiEmail.php?active='.$active.'"><button style="background-image: linear-gradient(to left, #0025BC , #0071BC); width: 100%; text-align: center; margin: auto; min-height: 40px; color: white; font-size: 30px; cursor: pointer;">Klik disini</button></a>';
					$message .='</div>';
					$message .='<div class="mail-footer" style="color: black; background-color: #adadad; width: 100%; font-size: 20px;padding: 20px; border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">';
						$message .='Apabila link tersebut bermasalah, silahkan akses url berikut:';
						$message .='https://bequeen@bequeen.000webhostapp.com/api/verifikasiEmail.php?active='.$active;
					$message .='</div>';
				$message .='</div>';
			$message .='</body>';
			$message .='</html>';

			if(mail($email,$email_subject,$message,$headers)){
				echo "berhasil";
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