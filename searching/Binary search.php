<?php
function binarySearch(Array $arr, $item) {
    $low = 0;
    $high = count($arr);
	$found = false;
	while ($low <= $high ) {
		$mid = ($low + $high) / 2; //Midpoint of the Search Space
		$mid= (round($mid));
		if ($arr[$mid] === $item) { //Found the element
			$found = true;
			break;
		} else {
			if ($item < $arr[$mid]) { //Need to search in the left half of the search space
				$high = $mid - 1;
			} elseif($item > $arr[$mid] ) { //Need to search in the right half of the search 
			 if ($mid >= count($arr)-1){  //added safety cond if item is grater than last element of array
			     $found = false;
			     break;
			 }else{
				$low = $mid + 1;
			 }
			}
		}
	}

	return $found;
}
$testList = array(0, 1, 2, 8, 13, 17, 19, 32, 42);
echo binarySearch($testList, 88) ? 'True' : 'False';
echo PHP_EOL;
echo binarySearch($testList, 13) ? 'True' : 'False';

?>
