<?php

require 'model/database.php';
require 'model/functions.php';

session_start();

$action = filter_input(INPUT_POST, 'action');
// Sets action to show the login if there is no value set to action
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'start';
    }
}

if ($action == 'start') {
    include 'view/login.php';
} 

else if ($action == 'login') {
    $playerName = filter_input(INPUT_POST, 'username');
    $playerPassword = filter_input(INPUT_POST, 'password');
    $value = getPlayerID($playerName, $playerPassword);
    if ($value == NULL) {
        $login_error = 'Invalid username/password';
        include 'view/login.php';
    } else {
        $_SESSION['id'] = $value[0];
        include 'view/loginSplash.php';
    }
} 

else if ($action == 'create') {
    include 'view/createUser.php';
} 

else if ($action == 'create_user') {
    $playerName = filter_input(INPUT_POST, 'username');
    $playerPassword = filter_input(INPUT_POST, 'password');
    $value = checkUserName($playerName);
    if ($value[0] == 1) {
        $create_error = 'Username is already in use. Please try another name.';
        include('view/createUser.php');
    } else {
        addUser($playerName, $playerPassword);
        $value2 = getPlayerID($playerName, $playerPassword);
        $_SESSION['id'] = $value2[0];
        addPuzzles($_SESSION['id']);
        include 'view/loginSplash.php';
    }
} 

else if ($action == 'logout'){
    $login_error = 'Thank you for playing. You have successfully logged out.';
    include 'view/login.php';
} 

else if ($action == 'delete_splash'){
    include 'view/delete_user.php';
} 

else if ($action == 'delete_user'){
    $playerID = $_SESSION['id'];
    deleteUser($playerID);
    deleteSolved($playerID);
    $login_error = 'Thank you for playing. Your account has been deleted.';
    include 'view/login.php';
} 

else if ($action == 'options'){
    include 'view/userOptions.php';
} 

else if ($action == 'update_splash'){
    include 'view/updateUser.php';
} 

else if ($action == 'update_user'){
    $playerName = filter_input(INPUT_POST, 'username');
    $playerPassword = filter_input(INPUT_POST, 'password');
    $value = checkUserName($playerName);
    if ($value[0] == 1) {
        $update_error = 'Username is already in use. Please try another name.';
        include('view/updateUser.php');
    } else {
        $playerID = $_SESSION['id'];
        updateUser($playerID, $playerName, $playerPassword);
        $update_message = 'User details updated successfully.';
        include 'view/userOptions.php';
    }
}

else if ($action == 'home'){
    include 'view/loginSplash.php';
}

else if ($action == '1'){
    $_SESSION['puzzleID'] = 1;
    $challenge = getChallenge($_SESSION['puzzleID']);
    include 'view/Zavanna/Message1.php';
}

else if ($action == '2'){
    $_SESSION['puzzleID'] = 2;
    $challenge = getChallenge($_SESSION['puzzleID']);
    include 'view/Zavanna/Message2.php';
}

else if ($action == '3'){
    $_SESSION['puzzleID'] = 3;
    $challenge = getChallenge($_SESSION['puzzleID']);
    include 'view/Damion/Message1.php';
}

else if ($action == '4'){
    $_SESSION['puzzleID'] = 4;
    $challenge = getChallenge($_SESSION['puzzleID']);
    include 'view/Damion/Message2.php';
}

else if ($action == '5'){
    $_SESSION['puzzleID'] = 5;
    $challenge = getChallenge($_SESSION['puzzleID']);
    include 'view/Damion/Message3.php';
}

else if ($action == '6'){
    $_SESSION['puzzleID'] = 6;
    $challenge = getChallenge($_SESSION['puzzleID']);
    include 'view/d1gg3r/Message1.php';
}

else if ($action == '7'){
    $_SESSION['puzzleID'] = 7;
    $challenge = getChallenge($_SESSION['puzzleID']);
    include 'view/d1gg3r/Message2.php';
}

else if ($action == 'unlocked'){
    $unlocked = getUnlocked($_SESSION['id']);
    include 'view/unlockedSplash.php';
}

else if ($action == 'puzzles'){
    include 'view/puzzleSplash.php';
}

else if ($action == 'check_solution'){
    $text = filter_input(INPUT_GET, 'answer');
    $answer = strtolower($text);
    $value = getAnswer($_SESSION['puzzleID']);
    if($answer == $value[0]){
        updateUnlocked($_SESSION['id'], $_SESSION['puzzleID']);
        $answer_error = 'New content unlocked';
        include 'view/puzzleSplash.php';
        
    } else {
        $answer_error = 'Incorrect answer. Please try again.';
        include 'view/puzzleSplash.php';
    }
}
else if ($action == 'show_info'){
    $info = $_POST['information'];
    switch($info){
        case 1:
            include 'view/Unlocked files/1.php';
            break;
        case 2:
            include 'view/Unlocked files/2.php';
            break;
        case 3:
            include 'view/Unlocked files/3.php';
            break;
        case 4:
            include 'view/Unlocked files/4.php';
            break;
        case 5:
            include 'view/Unlocked files/5.php';
            break;
        case 6:
            include 'view/Unlocked files/6.php';
            break;
        case 7:
            include 'view/Unlocked files/7.php';
            break;
        default:
            include 'view/Unlocked files/errorPage.php';
            break;
    }
}
?>