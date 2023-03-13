<?php 
function findSmallest($array) {
    $smallest = $array[0];
    $smallest_index = 0;
    for($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $smallest) {
            $smallest = $array[$i];
            $smallest_index = $i;
        }
    }
    return $smallest_index;
}

function selectionSort($array){
    $arr = array();
    $indices = range(0, count($array) - 1);
    foreach ($indices as $i) {
        $smallest_index = findSmallest($array);
        $arr[] = $array[$smallest_index];
        array_splice($array, $smallest_index, 1);
    }
    return $arr;
}

$test_arr = array(5, 3, 6, 2, 10);
print_r(selectionSort($test_arr));

//O(n*n)
?>
