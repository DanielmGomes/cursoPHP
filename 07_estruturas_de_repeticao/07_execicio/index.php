<?php

    $a = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $b = 0;

    while ($b < count($a)) {
        
        if ($a[$b] == 30 || $a[$b] == 40) {
            echo 'pular posição: ' . $a[$b] . '<br>';
            $b++;
            continue;
        }

        echo 'posição: ' . $a[$b] . '<br>';
        $b++;

    }



?>