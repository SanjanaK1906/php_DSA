<?php
function linearSearch(Array $arr, $item) {
    $found = false;
    foreach($arr as $value){
        if($value == $item){
            $found = true;
        }
    }
    return $found;
    
}
$testList = array(0, 1, 2, 8, 13, 17, 19, 32, 42);
echo linearSearch($testList, 88) ? 'True' : 'False';
echo PHP_EOL;
echo linearSearch($testList, 19) ? 'True' : 'False';

?>
