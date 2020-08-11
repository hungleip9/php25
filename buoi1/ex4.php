<?php 
		//cach toi uu
        $n = 10;
        $s = 0;
        for ($i = 1; $i <= $n; $i=$i+2) {
            $s += ($i*$i);
        }
        
        
        echo "Tổng = 1^2 + 3^2 + ... +" . $n . "^2 = " . $s;

        //cach khong toi uu
        // $n = 10;
        // $s = 0;
        // for ($i = 0; $i <= $n; $i++) {
        //     if($i%2!=0){
        //         $s += ($i*$i);
        //     }
        // }
        
        // echo "Tổng $s= 1^2 + 3^2 + ... +" . $n . "^2 = " . $s;

        
?>