<?php

setcookie('isLoged','',time() - 3600,"/");
header('location: index.php');
exit;
