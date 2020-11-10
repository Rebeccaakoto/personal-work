<?php
// md5
$hash_md5 = md5('Rebecca');
echo 'md5 hash: ' . $hash_md5;
//password verification and comparing.
$verify_md5= md5('Rebecca') == $hash_md5;
echo '<br> <br> md5 verified: ' . $verify_md5;

// password_hash
$hash_pass_algo= password_hash('pass', PASSWORD_DEFAULT);
echo '<br><br> password hash algo: ' . $hash_pass_algo;
//password verification.
$verify_pass_hash= password_verify('pass', $hash_pass_algo);
echo '<br> <br> password_hash verified: ' . $verify_pass_hash;

session_start();/// creates a unique key and links it to the global variable

$_SESSION['global_var']= 'Hello Global';

?>