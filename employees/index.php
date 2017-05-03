<?php include '../common/configuration.php';?>
<?php include "../model/database.php"; ?>
<?php
$message = "";

if (isset($_GET['logout'])){
    include 'employee_logout.php';
    exit();
}
if (isset($_POST['go_button']))
{
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');
    if ($username=='admin' && $password=='mittens'){
        session_start();
        $_SESSION['LOGGED_IN']='OK';
        header('Location: ../requests/index.php?list');
        exit();
    } else
    {
        $message = "Login failed. Please try again.";
        include 'employee_login.php';
        exit();
    }
    
    /*
     * this is where the code goes that will
     * look for a user named "admin" and a password of
     * "mittens".  If those two things are provided,
     * then
     * start a session
     * assign a session variable called LOGGED_IN a 
     * value of "OK" and direct the user over 
     * to the suggestion list with the following command:
     */
    
    /*
     * if the login fails.  Set $message some appropriate text and
     * then include the employee login page again.
     */
    
    
} else
{
    include 'employee_login.php';
    exit();
}
?>
