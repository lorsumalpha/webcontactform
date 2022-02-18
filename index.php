<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple web contact form</title>
</head>
<body>
    <h1>Simple web contact form</h1>
    <div class="content">
        <form action='index.php?page=submit'>
            <label for="name">Name</label>
            <input name="name" type="text">
            <label for="mail">E-Mail</label>
            <input name="mail" type="email">
            <label for="dropdown">Issue</label>
            <select name="dropdown">
                <option value="query">Query</option>
                <option value="feedback">Feedback</option>
                <option value="complaint">Complaint</option>
                <option value="other">Other</option>
            </select>
            <label for="comment">Comment</label>
            <input name="comment" type="text">
            <input name="submit" type="submit">
        </form>
    </div>
    <script>

    </script>
</body>
</html>
<?php

	$currentPage = $_GET['page'];

	
    if(isset($_POST['submit'])){
        if(empty($name = $_POST['name'])){
            $name = "Name can't be empty";
        }else{
            $name = $_POST['name'];
        }

        if(empty($mail = $_POST['mail'])){
            $mail = "E-Mail can't be empty";
        }else{
            $mail = $_POST['mail'];
        }

        if(empty($issue = $_POST['issue'])){
            $issue = "Issue can't be empty";
        }else{
            $issue = $_POST['issue'];
        }

        if(empty($message = $_POST['message'])){
            $message = "Message can't be empty";
        }else{
            $message = $_POST['message'];
        }
    }

	if($currentPage == 'submit'){
		 echo "<h1>Your message</h1>";
		 echo "<h2> Name: </h2>  <p> ". $name ."</p>"; 
    	 echo "<h2>E-Mail: </h2> <p> ". $mail ."</p>";
    	 echo "<h2>Issue: </h2> <p> ". $issue ."</p>";
    	 echo "<h2>Message: </h2> <p> ". $message ."</p>";
	}else{
		
	}
?>