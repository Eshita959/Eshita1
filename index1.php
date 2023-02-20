<?php
//1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

function sortByLength($arr) {
  usort($arr, function($a, $b) {
    return strlen($a) - strlen($b);
  });
  return $arr;
}
$arr = array("banana", "apple", "pear", "orange", "kiwi");
$sortedArr = sortByLength($arr);
print_r($sortedArr); 
echo "\n";

  //2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

  

  function concatFromEnd($str1, $str2) {
  $len1 = strlen($str1);
  $len2 = strlen($str2);
  $end = substr($str1, $len1 - $len2);
  return $str2 . $end;
}

$str1 = "hello world";
$str2 = "foobar";
$result = concatFromEnd($str1, $str2);
echo $result; 

echo "\n";
  //  3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
  
  
  function removeFirstAndLast($arr) {
    $newArr = array_slice($arr, 1, -1);
    return $newArr;
  }
  $arr = array(1, 2, 3, 4, 5);
  $newArr = removeFirstAndLast($arr);
  print_r($newArr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )
  
  echo "\n";
  //4.Write a PHP function to check if a string contains only letters and whitespace.

  

  function containsOnlyLettersAndWhitespace($str) {
    return preg_match('/^[A-Za-z\s]+$/', $str);
  }
  $str1 = "hello world";
  $str2 = "1234";
  $str3 = "Hello World 1234";
  
  echo containsOnlyLettersAndWhitespace($str1); 
  echo containsOnlyLettersAndWhitespace($str2);
  echo containsOnlyLettersAndWhitespace($str3); 
  echo "\n";
  //5. Write a PHP function to find the second largest number in an array of numbers.
  
  function findSecondLargest($arr) {
    rsort($arr); 
    return $arr[1]; 
  }
  $arr = array(1, 3, 2, 4, 5);
  $secondLargest = findSecondLargest($arr);
  echo $secondLargest; 
  