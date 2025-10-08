<?php
// 1. array_change_key_case() - Change keys to lower or upper case
$fruits = [
    "One" => "Apple",
    "Two" => "Banana",
    "Three" => "Cherry"
];
echo "Original array:\n";
print_r($fruits);

// Change keys to lower case
$lower_keys = array_change_key_case($fruits, CASE_LOWER);
echo "Keys changed to LOWER case:\n";
print_r($lower_keys);

// Change keys to upper case
$upper_keys = array_change_key_case($fruits, CASE_UPPER);
echo "Keys changed to UPPER case:\n";
print_r($upper_keys);

echo "\n";

// 2. array_chunk() - Split an array into chunks
$months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
echo "Original months array:\n";
print_r($months);

$chunked = array_chunk($months, 4);
echo "Months array chunked into groups of 4:\n";
print_r($chunked);

echo "\n";

// 3. array_count_values() - Count frequency of values in array
$values = ["apple", "banana", "apple", "orange", "banana", "apple"];
echo "Original values array:\n";
print_r($values);

$counted = array_count_values($values);
echo "Count of each value:\n";
print_r($counted);

echo "\n";

// 4. array_combine() - Combine two arrays to make key => value pairs
$keys = ["a", "b", "c"];
$values = [1, 2, 3];

$combined = array_combine($keys, $values);
echo "Combined array (keys and values):\n";
print_r($combined);

echo "\n";

// 5. array_pop() - Remove last element from array
$stack = ["first", "second", "third", "fourth"];
echo "Original stack:\n";
print_r($stack);

$last_element = array_pop($stack);
echo "After array_pop(), removed element: $last_element\n";
print_r($stack);

echo "\n";

// 6. array_push() - Add one or more elements to the end of array
array_push($stack, "fifth", "sixth");
echo "After array_push(), stack:\n";
print_r($stack);

echo "\n";

// 7. array_unshift() - Add one or more elements to the beginning of array
array_unshift($stack, "zero");
echo "After array_unshift(), stack:\n";
print_r($stack);

echo "\n";

// 8. array_shift() - Remove first element from array
$first_element = array_shift($stack);
echo "After array_shift(), removed element: $first_element\n";
print_r($stack);
?>
