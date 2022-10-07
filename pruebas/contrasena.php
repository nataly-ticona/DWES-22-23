<?php
$clave='$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72';
//hay que hacer 26 elevado a 4, es decir 4 arrays
$letra;
for ($a=97; $a <=122 ; $a++) { 
    $l1=chr($a);
    for ($b=97; $b <=122 ; $b++) { 
        $l2=chr($b);
        for ($c=97; $c <=122 ; $c++) {
            $l3=chr($c); 
            for ($d=97; $d <=122   ; $d++) {
                $l4=chr($d); 
                $letra=[[$l1],[$l2],[$l3],[$l4]]= password_hash("",PASSWORD_DEFAULT);
                set_time_limit(0);
                if($con==$clave){
                    $letra=[[$l1],[$l2],[$l3],[$l4]];
                }

            }
        }
    }
}
echo $letra;
?>