<?php


function fibonacci($n){
$a = 0;
$b = 1;

for($i = 0; $i < $n; $i++):

$memo = $a;
$a = $b;
$b = $memo + $b;



endfor;

return $a;

}

for($u = 0; $u < 15; $u++):

$result = '<p>'.fibonacci($u).'</p>';

echo $result.PHP_EOL; 

endfor;

