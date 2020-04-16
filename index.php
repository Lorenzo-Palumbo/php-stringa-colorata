<?php

    $password = $_GET['password'];
    if ($password == 'Boolean') {
        echo '<span style="color:green;">Password OK</span>';
    }else {
        echo '<span style="color:red;">Password ERRATA</span>';
    }

 ?>
