<?php

include '../Controller/userC.php';
$userC = new userC();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$email = $_POST['email'];
	$n= $userC->verifEmail($email);
	if($n!=0)
	{
		$token=uniqid(md5(time()));
		$userC->insertToken($email,$token);
		$subject= "Ecotopia: Password Reset Link!";
		$mess= "Hi $email,<br> Click <a href='http://localhost/Ecotopia/reset.php?token=$token'>here</a> to reset your password. ";
		$message="	
<body>

<head>

<style type='text/css'>
            @font-face {
              font-family: &#x27;Postmates Std&#x27;;
              font-weight: 600;
              font-style: normal;
              src: local(&#x27;Postmates Std Bold&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-bold.woff) format(&#x27;woff&#x27;);
            }

            @font-face {
              font-family: &#x27;Postmates Std&#x27;;
              font-weight: 500;
              font-style: normal;
              src: local(&#x27;Postmates Std Medium&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-medium.woff) format(&#x27;woff&#x27;);
            }

            @font-face {
              font-family: &#x27;Postmates Std&#x27;;
              font-weight: 400;
              font-style: normal;
              src: local(&#x27;Postmates Std Regular&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-regular.woff) format(&#x27;woff&#x27;);
            }
        </style>
<style media='screen and (max-width: 680px)'>
            @media screen and (max-width: 680px) {
                .page-center {
                  padding-left: 0 !important;
                  padding-right: 0 !important;
                }
                
                .footer-center {
                  padding-left: 20px !important;
                  padding-right: 20px !important;
                }
            }
        </style>
</head>
<body style='background-color: #f4f4f5;'>
<table cellpadding='0' cellspacing='0' style='width: 100%; height: 100%; background-color: #f4f4f5; text-align: center;'>
<tbody><tr>
<td style='text-align: center;'>
<table align='center' cellpadding='0' cellspacing='0' id='body' style='background-color: #fff; width: 100%; max-width: 680px; height: 100%;'>
<tbody><tr>
<td>
<table align='center' cellpadding='0' cellspacing='0' class='page-center' style='text-align: left; padding-bottom: 88px; width: 100%; padding-left: 120px; padding-right: 120px;'>
<tbody><tr>
<td style='padding-top: 24px;'>
<img src='https://i.ibb.co/DYjpJWD/icon-tab.png' style='width: 56px;'>
</td>
</tr>
<tr>
<td colspan='2' style='padding-top: 72px; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 48px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: -2.6px; line-height: 52px; mso-line-height-rule: exactly; text-decoration: none;'><span style='color: green;'><b>Ecotopia: </b></span><br>Reset your password</td>
</tr>
<tr>
<td style='padding-top: 48px; padding-bottom: 48px;'>
<table cellpadding='0' cellspacing='0' style='width: 100%'>
<tbody><tr>
<td style='width: 100%; height: 1px; max-height: 1px; background-color: #d9dbe0; opacity: 0.81'></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td style='-ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #9095a2; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 16px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.18px; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;'>
                                      You're receiving this e-mail because you requested a password reset for your account.
                                    </td>
</tr>
<tr>
<td style='padding-top: 24px; -ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #9095a2; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 16px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.18px; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;'>
                                      Please tap the button below to change you password.
                                    </td>
</tr>
<tr>
<td>
<a data-click-track-id='37' href='http://localhost/Ecotopia/view/reset.php?token=$token' style='margin-top: 36px; -ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #ffffff; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 12px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: 0.7px; line-height: 48px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 220px; background-color: #00cc99; border-radius: 28px; display: block; text-align: center; text-transform: uppercase'>
                                        Reset Password
                                      </a>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table align='center' cellpadding='0' cellspacing='0' id='footer' style='background-color: #000; width: 100%; max-width: 680px; height: 100%;'>
<tbody><tr>
<td>
<table align='center' cellpadding='0' cellspacing='0' class='footer-center' style='text-align: left; width: 100%; padding-left: 120px; padding-right: 120px;'>
<tbody><tr>
<td colspan='2' style='padding-top: 72px; padding-bottom: 24px; width: 100%;'>

</td>
</tr>



</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>



</body>
<!-- partial -->
  
</body>
		";
		$userC->resetmail($email,$message);
		header("location:check.html");
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" href="images/icon_tab.png">
    <link rel="stylesheet" href="assets/css/Login.css">
	<title>Forgot password</title>
	

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="wrapper">
		<div class="container">
			<h1>Enter your Email</h1>

			<form class="form" action="#" method="POST">
				<input type="email" placeholder="Email" name="email">
				<button type="submit" id="login-button">Send</button><br><br>
		</form>
		</div>
    

		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- partial -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>