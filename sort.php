<?php

function custom_sort($a){
    $n=count($a);
    for($i=0;$i<$n-1;$i++){
        for($j=0;$j<$n-$i-1;$j++){
            if($a[$j]>$a[$j+1]){
                $temp=$a[$j];
                $a[$j]=$a[$j+1];
                $a[$j+1]=$temp;
         }
        }
    }
    return $a;
}

print_r(custom_sort([1,3,4,3,2,1]));
?>