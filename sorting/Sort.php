<?php 
//asc order sorting
function sorting($arr){
    for ($i=0; $i<count($arr); $i++){
        for($j=0; $j<count($arr)-1; $j++){
            if($arr[$j]>$arr[$j+1]){ //for decending order check for less than< i.e. reverse condition
                //Swapping code
                $temp= $arr[$j];
                $arr[$j] =$arr[$j+1];
                $arr[$j+1]= $temp;
            }
        }
    }
    print_r($arr);
    
}

$array= [11,2,5,3,8,7,10,45,33,21];
$sort_array= sorting($array);
?>
