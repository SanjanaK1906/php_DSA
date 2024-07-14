# searching algo
# binary search  algo -
function binarySearch ($array , $item){
        $low = 0;
        $high = count($array);
        $found = false;  // flag
        while($low<=$high){
                $mid = round(($low+$high)/2);
                 if ($array[$mid] ==$item){
                          $found = true;
                          break;
                }else{
                    if($item < $array[$mid]){
                             $high = $mid-1;
                    }elseif($item > $array[$mid]{
                            $low = $mid+1;
                    }
                }
        }
        return $found;
}
$testList = array(0, 1, 2, 8, 13, 17, 19, 32, 42);
echo binarySearch($testList, 3) ? 'True' : 'False';
