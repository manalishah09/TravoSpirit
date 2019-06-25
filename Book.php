<html><head><meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
	<link href='./Book_files/css' rel='stylesheet'>
	<title>Tavospirit | Book</title>
<style type='text/css'>
	body{
		background-color: #344457;
		font-family: 'Montserrat';
	}
	.first{
		float: left;
		width: 50%;
	}
	.form{
		color: white;
		text-align: center;
	}
	.outer{
		text-align: center;
	}
	.img{
    	background: linear-gradient(to bottom left, #131a2f 40%, #00ffff 100%);
    	background-repeat: no-repeat;
    	background-size: cover;
    	background-position: center;
    	background-attachment: fixed;
	}
	/*input[type='text']{
		border:3px inset gray;
	}*/
	#search{
		font-family: 'Montserrat'; 
		width: 10em;  
		height: 3em;
	}
</style></head>

<body class='img'>

	<form class='form' method="POST" action="">
			<h1 style='margin-top: 75px;'><b style='color: white;'>Enter Details</b></h1>
			<div style='float: left;margin-left: 330px;margin-top: 30px'>
				<label style='text-align: left;float: left;'>Name*</label>
				<br>
				<input type='text' name='name' style='width: 150%;height: 20px;float: left;border-style: inset;' required>	

				<br>
				<br>

				<label style='float: left;'>Email*</label>
				<br>
				<input type='text' name='email' style='float: left;width: 150%;height: 20px' required>

				<br>
				<br>

				<label style='float: left;'>Mobile*</label>
				<br>
				<input type='text' name='mobile' style='float: left;width: 150%;height: 20px;' required>

				<br>
				<br>

				<label style='float: left;'>Your State</label>
				<br>
				<input type='text' name='state' style='float: left;width: 150%;height: 20px;'>

				<br>
				<br>

			</div>

			<div style='float: left;margin-top: 30px'>
				
				<label style='text-align: left;float: left;margin-left: 130px;'>Address*</label>
				<br>
				<textarea name="address" rows='5' cols='41' style='float: left;margin-left: 130px;border:3px inset gray;' required></textarea>

				<br>
				<br>
				<br>
				<br>
				<br>

				<label style='text-align: left;float: left;margin-left: 130px;'>Your Country</label>
				<br>
				<input type='text' name='country' style='float: left;margin-left: 130px;width: 70%;height: 20px'>

				<br>
				<br>

				<label style='text-align: left;float: left;margin-left: 130px;'>Your City</label>
				<br>
				<input type='text' name='city' style='float: left;margin-left: 130px;width: 70%;height: 20px;'>

			</div>

			<br>
<!-- 			<br>
 -->
			<h1>
				<input type='submit' id='search' name='submit' style='margin-right: 500px;margin-top: 50px;' onclick='onSubmitPerformAction()'>
			</h1>
	</form>


	<script type='text/javascript'>
		function onSubmitPerformAction(){
            alert("<?php
                        $emailId = $_POST['email'];
                        $subject = "Booking Information";
                        $message = "Welcome " . $_POST['name'].",\n";
                        $message .= "Your Booking has been confirmed";
                        $message .= "\n\n\n";
                        $message .= "Regards,\n"."Travospirit";
                        if(mail($emailId,$subject,$message)){
                            echo "Mail sent successfully";
                        }else{
                            echo " Error encountered ";
                        }
                ?>");
        }
	</script>

</body></html>

