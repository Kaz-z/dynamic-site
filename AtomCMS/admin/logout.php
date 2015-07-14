<?php

# Start the session:

session_start();

unset($_SESSION['username']); // delete the username key

//session_destroy() // this would delete all of the session keys

header('location: login.php'); // redirect to login.php

?>