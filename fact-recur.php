<?php
function fact ($number) {  
    if($number <= 1) {  
        return 1;  
    } else {  
        return $number * fact($number - 1);  
    }  
}

echo fact(4);