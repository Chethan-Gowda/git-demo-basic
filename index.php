<?php
    function primeOrnot($n){
        
        for($i=2; $i<$n; $i++){
            echo "{$n} / {$i} :". $n % $i; 
            echo "<br >";
            if($n % $i==0){
              
                return "Not prime";
            }
        }
        return "prime";
    }

    $n = 31;
    echo primeOrnot($n);

?>
