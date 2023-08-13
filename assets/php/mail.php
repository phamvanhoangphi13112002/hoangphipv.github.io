<?php

$to 		= 'hoangphi1311.gpa@gmail.com';

//All form values
$name 		= $_POST['name'];
$email 		= $_POST['email'];
$subject 	= $_POST['subject'];
$msg 		= $_POST['msg'];

$headers	= 'FROM: "'.$email.'"';

$output 	= "Name: ".$name."\nEmail: ".$email."\nSubject: ".$subject."\n\nMessage: ".$msg;

$send		= mail($to, $name, $output, $headers);