<?php
    function suite($n): void{
        $tmp = 0;
        $tmp1 = 0;
       for ($i=0; $i < $n; $i++) { 
            if ($i == 0) {
                $tmp = 3*0 + 0;
            } elseif($i === 1){
                $tmp1 = 3*$tmp + 1;
            } else {
                $tmp = 3*$tmp + $tmp1;
            }
            echo $tmp, "<br>";
       }

    }
    suite(6);

?>