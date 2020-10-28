<?php

require_once('connect');

$subject= $_POST['subject'];
$body= $_POST['body'];

//Block 4

$query= "SELECT * FROM $apply";
$result= mysqli_query ($conncet, $query) 
or die ('Error querying database.');

//Block 6
while ($row = mysqli_fetch_array($result)) {
$first_name= $row['first_name'];
$last_name= $row['last_name'];
$email= $row['email'];

//Block 7
$msg= "Dear $first_name $last_name,\n$body";
mail($email, $subject, $msg, 'From:' . $from);
echo 'Email sent to: ' . $email. '<br>';
}

//Block 8
mysqli_close($dbc);
?>

