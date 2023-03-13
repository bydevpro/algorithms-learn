<?php 
//Алгоритм бинарного поиска значения в ОТСОРИТРОВАННОМ массиве
function binarySearch($array, $index){
    $low = 0; //минимальное значение в массиве
    $count = 0; //отслеживаем кол-во попыток
    $high = count($array) - 1; //максимальное значение в массиве
    //цикл бинарного поиска 
    while($low <= $high){
        //поиск начинаем с середины массива
        $mid = floor(($low + $high) / 2);
        //получаем значение из середины массива
        $guess = $array[$mid];
        //проверяем на совпадение
        if($guess == $index){
            $count++;
            echo "Кол-во попыток " . $count . "<br/>";
            //возвращаем позицию искомого значения в массиве
            return $mid;
        } elseif($guess > $index){ 
            $count++;
            /*если найденное значение больше
             искомого сдвигаем срез массива в меньшую соторону*/ 
            $high = $mid - 1;
        } else {
            $count++;
            /* если найденное значение меньше искомого 
            сдвигаем срез в сторону увеличения*/
            $low = $mid + 1;
        }
    }
    echo "Кол-во попыток " . $count . "<br/>";
    //если значение не найдено возвращаем null
    return null;
}

$myArray = [1, 2, 3, 4, 5, 6];
$index = binarySearch($myArray, 3);
if($index !== null){
    echo "Index is " . $index . "<br/>";
    echo "Value is " . $myArray[$index] . "<br/>";
} else {
    echo 'Element not found!<br/>';
}


$myArray = [1, 2, 3, 4, 5, 6];
$index = binarySearch($myArray, 9);
if($index !== null){
    echo "Index is " . $index . "<br/>";
    echo "Value is " . $myArray[$index] . "<br/>";
} else {
    echo 'Element not found!<br/>';
}


$myArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 23, 27, 33, 41, 155, 171 ];
$index = binarySearch($myArray, 155);
if($index !== null){
    echo "Index is " . $index . "<br/>";
    echo "Value is " . $myArray[$index] . "<br/>";
} else {
    echo 'Element not found!<br/>';
}

//Задание 1.1 log2 128 = 2^7 = 7 (шагов)
//Задание 1.2 log2 256 = 2^8 = 8 (шагов)
//speed O(logn)

?>