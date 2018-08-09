<?php

$mdp = "kangourou";

if (isset($_POST['password']) AND $_POST['password'] == $mdp) {
    echo "Le code secret est 0451";
} else {
    echo "ALERTE !!!";
}

?>

<br>

<pre><?php

var_dump( $_COOKIE );

?></pre>