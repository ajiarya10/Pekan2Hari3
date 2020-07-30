<?php

function papan_catur($angka) {
    for ($i=1; $i <= $angka; $i++){
        if($i %2 == 0)
        {
            echo " ";
            for($j=1;$j<=$angka-1;$j++)
            {
                echo " " . " ";
                echo "&nbsp;#";
            }
        }
        else{ 
            for($j=0;$j<=$angka-1;$j++){
                
                echo "&nbsp;#";
            }
        }
        echo "<br/>";
    }
}

// TEST CASES
echo "<br>" . papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo "<br>" . papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

*/
echo "<br>" . papan_catur(5);
/* 
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/