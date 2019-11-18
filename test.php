<?php

    $array = [0 => "a", 1 => "b", 2 => "c"];
    \array_splice($array, 1, 1);
                        //↑ Offset which you want to delete
    print_r($array);
?>
