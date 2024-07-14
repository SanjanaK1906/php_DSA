# searching algo
# binary search  algo -
-Binary search is the search technique that works efficiently on sorted lists. if list is not sorted then need to sort it first
-Binary search follows the divide and conquer approach in which the list is divided into two halves, and the item is compared with the middle element of the list. If the match is found then, the location of the middle element is returned. Otherwise, we search into either of the halves depending upon the result produced through the match.
-time complexity - best O(1), avg/worst - O(log n)
-space complexity - O(1)
function binarySearch ($array , $item){
        $low = 0;
        $high = count($array);
        $found = false;  // flag
        while($low<=$high){
                $mid = round(($low+$high)/2); //findout mid
                 if ($array[$mid] ==$item){   //compare item with mid element
                          $found = true;      //if item found then break 
                          break;
                }else{
                    if($item < $array[$mid]){   //if item is less than mid element then 
                             $high = $mid-1;    //make high as mid-1
                    }elseif($item > $array[$mid]{ //if item is greater than mid element then 
                            $low = $mid+1;          //make high as mid+1
                    }
                }
        }
        return $found;
}
$testList = array(0, 1, 2, 8, 13, 17, 19, 32, 42);
echo binarySearch($testList, 3) ? 'True' : 'False';
