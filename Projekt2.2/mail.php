<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Food maker - Vi laver mad sammen</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">      <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
<body class="container">
	<header class="row">
        <nav class="col-lg-12">
        	<ul>
            	<li><a href="events.php">Events</a></li>
            	<li><a href="team.php">Team</a></li>
            	<li><a href="index.html"><img src="#"></a></li>
            	<li><a href="shop.php">Shop</a></li>
            	<li><a href="join.php">Join</a></li>
        	</ul>
        </nav>
		
	</header>
	<main>
		<?php
		/* Set e-mail recipient */
		$myemail = "simon.lund18@gmail.com";
 
		/* Check all form inputs using check_input function */
		$name = check_input($_POST['inputName'], "Your Name");
		$email = check_input($_POST['inputEmail'], "Your E-mail Address");
		$subject = check_input($_POST['inputSubject'], "Message Subject");
		$message = check_input($_POST['inputMessage'], "Your Message");
 
		/* If e-mail is not valid show error message */
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
		{
		show_error("Invalid e-mail address");
		}
		/* Let's prepare the message for the e-mail */
 
		$subject = "Besked fra Food Maker";
 
		$message = "
 
		Der er kommet en besked fra Food Maker's hjemmeside:
 
		Navn: $name
		Email: $email
		Emne: $subject
 
		Besked:
		$message
 
		";
 
		/* Send the message using mail() function */
		mail($myemail, $subject, $message);
 
		/* Redirect visitor to the thank you page */
		header('Location: http://amandakassow.dk/rif/haandbold/tak.php');
		exit();
 
		/* Functions we used */
		function check_input($data, $problem='')
		{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		if ($problem && strlen($data) == 0)
		{
		show_error($problem);
		}
		return $data;
		}
 
		function show_error($myError)
		{
		?>
		<html>
		<body>
 
		<p>Du bør rette følgende fejl:</p>
		<strong><?php echo $myError; ?></strong>
		<p>Gå tilbage og prøv igen.</p>
 

	</main>
			
		<?php
		exit();
		}
		?>
	<footer>
		
	</footer>
</body>