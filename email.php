<?php 
$headers	= "MIME-Version: 1.0\r\n";
$headers	.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers	.= "From: Admin <sales@biconbay.com>";
$to			= "riyas@craftinteractive.ae";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$msg		 = "<html>
					<head></head>
					<body>
						<table>
							<tr>
								<td>
									 Name : $name
								</td>
							</tr>
							<tr>
								<td>
									Phone : $phone
								</td>
							</tr>
							<tr>
								<td>
									Email : $email
								</td>
							</tr>
							<tr>
								<td>
									Message : $message
								</td>
							</tr>
						</table>
					</body>
				</html>
				";
		
if(mail($to,"Mail from Bicon Bay",$msg,$headers)) echo "Success";
else echo "Failed";

?>
