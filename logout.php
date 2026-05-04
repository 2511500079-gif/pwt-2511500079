<<<<<<< HEAD
<?php
session_start();


header("location:login.php");
=======
<?php
    session_start();
    session_destroy();
    header("location:login.php");
>>>>>>> 056736da04c71349e7de6849ba855c527813807b
?>