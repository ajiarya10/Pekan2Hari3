<?php

function papan_catur($angka) {
    for ($i=$angka; $i>=1; $i--){
        for ($j=$i; $j>=1; $j--){
            echo "#";
        }echo "<br>";
    }
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

// echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/