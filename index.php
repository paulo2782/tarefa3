<?php
$noRepeat = array();
$numbers  = array();

for($i = 0 ; $i <= 9 ; $i++){
    $random = rand(1,10);
    array_push($numbers,$random);
}

echo "Array Sorteado: ".json_encode($numbers)."<br>";

$data = array_count_values($numbers);

foreach($data as $key=>$val){
    
    if($val == 1){
        array_push($noRepeat,$key);
    }
}

echo "Os números que não se repetem são: ".json_encode($noRepeat);


?>