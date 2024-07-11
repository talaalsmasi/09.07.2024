

<!-- Q1 -->
<?php
$colors = ['red', 'green', 'white'];

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . 
$colors[0] . " carpet, the " . $colors[1] . " lawn, the " . $colors[2] . " house, the leaden sky. " . 
"The new president and his first lady. Richard M. Nixon";

echo $paragraph;
?>


<!-- Q2 -->
<?php
$colors = ['white', 'green', 'red'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color List</title>
</head>
<body>
    <ul>
        <li><?php echo $colors[1]; ?></li>
        <li><?php echo $colors[2]; ?></li>
        <li><?php echo $colors[0]; ?></li>
    </ul>
</body>
</html>


<!-- Q3-->
<?php
 $cities= array(
      "Italy"=>"Rome", 
      "Luxembourg"=>"Luxembourg",
      "Belgium"=> "Brussels",
      "Denmark"=>"Copenhagen",
      "Finland"=>"Helsinki", 
      "France" => "Paris",
      "Slovakia"=>"Bratislava",
      "Slovenia"=>"Ljubljana",
      "Germany" => "Berlin", 
      "Greece" =>"Athens", 
      "Ireland"=>"Dublin", 
      "Netherlands"=>"Amsterdam",
      "Portugal"=>"Lisbon",
      "Spain"=>"Madrid" ); 
      foreach ($cities as $x => $y) {
        echo "The capital of $x is $y. <br>";
      }
?>

<!-- Q4 -->
<?php
$color = array (
    4 => 'white',
    6 => 'green',
    11=> 'red');

    echo reset($color);
    echo "<br>"
 ?>


<!-- Q5 -->
<?php
$numbers = [1, 2, 3, 4, 5];
$newItem = "$";
array_splice($numbers, 3, 0, $newItem);
echo  implode(" ", $numbers) . "<br>";
?>


<!-- Q6 -->
<?php
$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);
asort($fruits);
foreach ($fruits as $letter => $fruit) {
    echo "$letter = $fruit" . "<br>";
}
?>


<!-- Q7 -->
<?php
$temperature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73];

$sum = array_sum($temperature);
$count = count($temperature);
$average = $sum / $count;

sort($temperature);
$LowestTemp = array_slice($temperature, 0, 7);
$HighestTemp = array_slice($temperature, -7);

echo "Average temperature: " . $average . "<br>";
echo "Lowest temperatures: " . implode(', ', $LowestTemp) . "<br>";
echo "Highest temperatures: " . implode(', ', $HighestTemp) . "<br>";
?>


<!-- Q8 -->
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$arrayMerge = array_merge($array1 , $array2);
print_r($arrayMerge) . "<br>";
echo "<br>";
?>


<!-- Q9 -->
<?php
$colors = array("red", "blue", "white", "yellow");
$toUpperCase = array_map('strtoupper', $colors);
echo implode(' ', $toUpperCase);
echo "<br>";
?>

<!-- Q10 -->
<?php
$colors = array("RED","BLUE", "WHITE","YELLOW");
$toLowerCase = array_map ('strtolower' , $colors);
echo implode (' ' , $toLowerCase);
?>

<!-- Q11 -->
<?php
for($i = 200 ; $i<250 ; $i++){
    if ($i%4 == 0){
        echo $i . " ";
    }
}
echo "<br>"
?>

<!-- Q12 -->
<?php
$words =  array("abcd", "abc", "de", "hjjj", "g", "wer");
$StrLengthArray = array_map('strlen', $words);
echo "The shortest array length is : " . min($StrLengthArray) . "<br>";
echo "The longest array length is : " . max($StrLengthArray);
echo '<br>';
?> 


<!-- Q13 -->
<?php
$numbers = range(11, 20);
shuffle($numbers);
$RandomNumbers = array_slice($numbers , 0 , 10);
echo implode(" ", $RandomNumbers) ; 
echo "<br>"
?>


<!-- Q14 -->
<?php
$array1 = array(2, 0, 10, 12, 6);
sort($array1);
$array_without_0 = array_diff($array1, [0]);
$lowest = reset($array_without_0);
echo $lowest;
?>

<!-- Q15 -->
<?php
$input_array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
rsort($input_array);
print_r($input_array);
echo "<br>"
?>

<!-- Q16 -->
 <?php
 function numbers( number, precision,separator)

?>



<!-- Q17 -->
<?php
$list1 = "4,5,6,7";
$list2 = "4,5,7,8";
$arr1 = explode(',', $list1);
$arr2 = explode(',', $list2);
$merge = array_merge($arr1, $arr2);
$unique = array_unique($merge);
$mergedList = implode(',', $unique);
echo $mergedList;
echo "<br>" 
?>

<!-- Q18 -->
<?php
$numbers = [4, 5, 6, 7, 4, 7, 8];
$unique = array_unique($numbers);
echo implode(" ", $unique);
echo "<br>"
?>

<!-- Q19 -->
<?php
$array1 = ['a','1','2','3','4'];
$array2 = ['a','3'];

$result = array_diff($array2 , $array1);
if ($result == []){
    echo " array2 is a subset array from array1";
}
else{
    echo " array2 is not a subset array from array1";
}
?>












