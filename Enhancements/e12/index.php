<?php
// Sets the session lifetime to last for two weeks (14 days) in seconds
$lifetime = 60 * 60 * 24 * 14;
// Sets the cookie parameters
session_set_cookie_params($lifetime, '/');
// Starts the session
session_start();

// Gets the array of variables for the session and then sets them to an array
// If it doesn't exist, it creates the array with preset values
if (isset($_SESSION['Values'])){
    $value_set = $_SESSION['Values'];  
} else {
    $value_set = array(10000, 5, 5);
}

// Sets the values of the investment, interest rate, and years variables
$investment = $value_set[0];
$interest_rate = $value_set[1];
$years = $value_set[2];

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_calc_page';
    }
}

if ($action == 'show_calc_page'){
    //set default value of variables for initial page load
    include('calculation_page.php');
    
} else if ($action == 'calculate_value'){
    // get the data from the form
    $investment = filter_input(INPUT_POST, 'investment', 
            FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', 
            FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', 
            FILTER_VALIDATE_INT);
    
    // Update the array
    $value_set[0] = $investment;
    $value_set[1] = $interest_rate;
    $value_set[2] = $years;

    // validate investment
    if ($investment === FALSE ) {
        $error_message = 'Investment must be a valid number.'; 
    } else if ( $investment <= 0 ) {
        $error_message = 'Investment must be greater than zero.'; 
    // validate interest rate
    } else if ( $interest_rate === FALSE )  {
        $error_message = 'Interest rate must be a valid number.'; 
    } else if ( $interest_rate <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.'; 
    // validate years
    } else if ( $years === FALSE ) {
        $error_message = 'Years must be a valid whole number.';
    } else if ( $years <= 0 ) {
        $error_message = 'Years must be greater than zero.';
    } else if ( $years > 30 ) {
        $error_message = 'Years must be less than 31.';
    // set error message to empty string if no invalid entries
    } else {
        $error_message = ''; 
    }
    
    // Checks to see if the months were set
    if (isset($_POST['month'])){
        $month = 'Yes';
        $year = $years * 12;
    } else {
        $month = 'No';
        $year = $years;
    }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('calculation_page.php');
        exit();
    }

    // calculate the future value
    $future_value = $investment;
    for ($i = 1; $i <= $year; $i++) {
        $future_value = ($future_value + ($future_value * $interest_rate *.01));
    }
    
    // apply currency and percent formatting
    $investment_f = '$'.number_format($investment, 2);
    $yearly_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);
    include('display_results.php');
}
// Updates the session array with the values
$_SESSION['Values'] = $value_set;
?>