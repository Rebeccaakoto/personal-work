

<?php
session_start();

if(isset($_SESSION['tech'])) {
    echo '<h1>Welcome ' . $_SESSION['tech'] . '</h1>';
    echo '<a href="logout.php">logout</a>';
} else{
    echo '<h1>Welcome Guest!</h1>';
    echo '<a href="login_frontend.php">login</a>';
    echo '<br><a href="register_frontend.php">register</a>';
}

?>
