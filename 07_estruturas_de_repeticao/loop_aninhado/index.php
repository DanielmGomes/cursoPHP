<?php

    $a = 1;

    while ($a <= 10) {
        echo 'loop externo ' . $a . '</br>';
        $a++;
        
        $b = 1;

        while ($b <= 5) {
            echo 'loop interno ' . $b . '</br>';
            $b++;
        }
    
    }

?>