<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact</title>
<link href="styles/style.css" rel="stylesheet" type="text/css"><link href="webfonts/Barthowheel/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>

    <header class="body">
    
    </header>

    <section class="body">
    </section>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: NOICE Games'; 
    $to = 'noicenews@gmail.com'; 
    $subject = 'Contact';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>
<?php
if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    } 
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
?>
<form method="post" action="index.php">
        
  <label>Name</label>
    <input name="name" placeholder="Type Here">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="Type Here">
            
    <label>Message</label>
    <textarea name="message" placeholder="Type Here"></textarea>
           
    <label>*What is 2+2? (Anti-spam)</label>
<input name="human" placeholder="Type Here">
            
    <input name="submit" type="submit" class="word" id="submit" value="Submit">
        
</form>

    <footer class="body">
    </footer>

</body>

</html>