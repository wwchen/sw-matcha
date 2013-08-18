<?php 
if(!isset($_POST['email'])) {
  die('Please enter an email address');
}

$link = mysql_connect('corkico.domaincommysql.com', 'corkico', 'Social_Sipper12'); 
if (!$link) { 
  die('Could not connect: ' . mysql_error()); 
} 
// echo 'Connected successfully'; 
mysql_select_db('email',$link); 

//$query = "INSERT INTO email (datetime, email) VALUES (NOW(), '" . $email . "')";
$query = "INSERT INTO email (email) VALUES ('" . $email . "')";
$email = mysql_real_escape_string($_POST['email']);
mysql_query($query) or die(mysql_error());
mysql_close($link);

// echo $query;
// echo $_POST;
echo "Thanks! You've signed up for our mailing list!"

?> 
