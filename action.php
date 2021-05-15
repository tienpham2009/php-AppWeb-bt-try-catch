<?php
$index = $_REQUEST["index"];
$array = [];

for ($i = 0 ; $i < 100 ; $i++){
    array_push($array,rand(1,100));
}
echo implode(" ", $array)."<br>";
try {
    if ($index < 0 || $index >= 100){
        throw new Exception("Chỉ số vượt quá giới hạn của mảng");
    }else {
        for ($i = 0 ; $i < count($array) ; $i++){
            if ($i = $index){
                echo "Giá trị của phần tử có chỉ số ". $i." là ". $array[$i];
                break;
            }
        }
    }
} catch (Exception $exception){
    echo $exception->getMessage();
}
