<?php
include '../common/configuration.php';
include '../model/database.php';
include '../model/coffeeorders_db.php';
include '../common/functions.php';
session_start();

// get default values
$message = "";
$firstname = filter_input(INPUT_POST,'first_name');
$lastname = filter_input(INPUT_POST,'last_name');
$coffee_hot = filter_input(INPUT_POST,'coffee_hot');
$coffee_size = filter_input(INPUT_POST,'coffee_size');
$coffee_type = filter_input(INPUT_POST,'coffee_type');
$comments = filter_input(INPUT_POST,'comments');   
$coffee_soy = "N";
$coffee_no_whip = 'N';
$coffee_cream = 'N';
$coffee_sugar = 'N';

// if the list token was provided
if (isset($_GET['list'])){
    if (isset($_SESSION['LOGGED_IN'])){
        $orders = getCoffeeOrders();
        include 'request_list.php';
        exit();
    } else
    {
      header('Location: index.php');
    }
}

// if the button was clicked
if (isset($_POST['GOBUTTON'])){
   
    // get the check boxes
    if (isset($_POST['coffee_soy']))   
        {$coffee_soy = 'Y';}
    if (isset($_POST['coffee_no_whip']))   
        {$coffee_no_whip = 'Y';}
    if (isset($_POST['coffee_cream']))   
        {$coffee_cream = 'Y';}
    if (isset($_POST['coffee_sugar']))   
        {$coffee_sugar = 'Y';}
    
    // if any one of the required fields is missing... 
    if (empty($firstname) || empty($lastname) || empty($coffee_hot) || empty($coffee_type) || empty($coffee_type)|| empty($coffee_size) ){
        $message = "One or more required fields are missing.";
        include('request_add.php');
        exit();
    } else {
        $success = addCoffeeOrder($firstname,$lastname,$coffee_hot,$coffee_size,$coffee_type,$coffee_soy,$coffee_no_whip,$coffee_cream,$coffee_sugar,$comments);
        if ($success)
            {
            // direct the user over to the thank you page.
            include('request_confirm.php');
            exit();
            }
        else 
            {
            $message = "An unexpected error has occurred.";
            include 'request_add.php';
            exit();
            }
    } 
} else {
    //no button click
    include 'request_add.php';
    exit();
}
?>