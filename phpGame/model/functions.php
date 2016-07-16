<?php
// Function used to check the database if a username is already in use
function checkUserName($playerName) {
    global $db;
    $query = 'SELECT IF(EXISTS (SELECT username FROM player WHERE username = 
        :userName), 1, 0 )';
    $statement = $db->prepare($query);
    $statement->bindValue(':userName', $playerName);
    $statement->execute();
    $answer = $statement->fetch();
    $statement->closeCursor();
    return $answer;
}

// Function used to check login information and get the player id
function getPlayerID($playerName, $playerPassword) {
    global $db;
    $query = 'SELECT playerID FROM player WHERE userName = :userName AND '
            . 'userPassword = :userPassword ';
    $statement = $db->prepare($query);
    $statement->bindValue(':userName', $playerName);
    $statement->bindValue(':userPassword', $playerPassword);
    $statement->execute();
    $answer = $statement->fetch();
    $statement->closeCursor();
    return $answer;
}

// Function to create a new user in the database
function addUser($playerName, $playerPassword) {
    global $db;
    $query = 'INSERT INTO player (userName, userPassword ) 
VALUES (:userName, :userPassword)';
    $statement = $db->prepare($query);
    $statement->bindValue(':userName', $playerName);
    $statement->bindValue(':userPassword', $playerPassword);
    $statement->execute();
    $answer = $statement->fetch();
    $statement->closeCursor();
    return $answer;
}

function addPuzzles($playerID){
    global $db;
    $query = 'INSERT INTO unlocked_pages (playerID, puzzleID, unlocked, '
            . 'description) VALUES '
            . '(:userID, 1, FALSE, "Zavanna"),'
            . '(:userID, 2, FALSE, "Bake-Kujira"),'
            . '(:userID, 3, FALSE, "Professor Damion"),'
            . '(:userID, 4, FALSE, "Kyorinrin"),'
            . '(:userID, 5, FALSE, "Ungaikyo"),'
            . '(:userID, 6, FALSE, "Myron Savio"),'
            . '(:userID, 7, FALSE, "Thaddeus Kline")';
    $statement = $db->prepare($query);
    $statement->bindValue(':userID', $playerID);
    $statement->execute();
    $statement->closeCursor();
}

function deleteUser($playerID){
    global $db;
    $query = 'DELETE FROM player WHERE playerID = :userID';
    $statement = $db->prepare($query);
    $statement->bindValue(':userID', $playerID); 
    $statement->execute();
    $statement->closeCursor();
}

function deleteSolved($playerID){
    global $db;  
    $query = 'DELETE FROM unlocked_pages WHERE playerID = :userID';
    $statement = $db->prepare($query);
    $statement->bindValue(':userID', $playerID);
    $statement->execute();
    $statement->closeCursor();
}

function updateUser($playerID, $playerName, $playerPassword){
    global $db;
    $query = 'UPDATE player SET userName = :userName, '
            . 'userPassword = :userPassword WHERE playerID = :userID';
    $statement = $db->prepare($query);
    $statement->bindValue(':userID', $playerID);
    $statement->bindValue(':userName', $playerName);
    $statement->bindValue(':userPassword', $playerPassword);
    $statement->execute();
    $statement->closeCursor();
}

function getChallenge($puzzleID){
    global $db;
    $query = 'SELECT challenge FROM puzzle WHERE puzzleID = :puzzleID';
    $statement = $db->prepare($query);
    $statement->bindValue(':puzzleID', $puzzleID);
    $statement->execute();
    $answer = $statement->fetch();
    $statement->closeCursor();
    return $answer;
}

function getAnswer($puzzleID){
    global $db;
    $query = 'SELECT challenge FROM password WHERE puzzleID = :puzzleID';
    $statement = $db->prepare($query);
    $statement->bindValue(':puzzleID', $puzzleID);
    $statement->execute();
    $answer = $statement->fetch();
    $statement->closeCursor();
    return $answer;
}

function updateUnlocked($playerID, $puzzleID){
    global $db;
    $query = 'UPDATE unlocked_pages SET unlocked = TRUE WHERE '
            . 'puzzleID = :puzzleID AND playerID = :playerID';
    $statement = $db->prepare($query);
    $statement->bindValue(':puzzleID', $puzzleID);
    $statement->bindValue(':playerID', $playerID);
    $statement->execute();
    $answer = $statement->fetch();
    $statement->closeCursor();
    return $answer;
}

function getUnlocked($playerID){
    global $db;
    $query = 'SELECT unlocked, puzzleID, description FROM unlocked_pages '
            .'WHERE playerID = :playerID';
    $statement = $db->prepare($query);
    $statement->bindValue(':playerID', $playerID);
    $statement->execute();
    $answer = $statement->fetchAll();
    $statement->closeCursor();
    return $answer;
}
?>