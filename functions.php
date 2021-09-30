<?php

// require MySQL Connection
require('database/DBController.php');

// require Product Class
require('database/course.php');

// require Cart Class
//require ('database/Cart.php');


// DBController object
$db = new DBController();

// Course object
$course = new Course($db);
$course_shuffle = $course->getData();
print_r($course->getData());

// Cart object
//$Cart = new Cart($db );
