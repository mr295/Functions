<?php
	echo "Example 1: array_values<br>";
	$array = array("size" => "XL", "color" => "gold");
	print_r(array_values($array));
	
	echo "<br><br>";
	echo "Example 2: array_keys<br>";
	$data = array("hero" => "Holmes", "villain" => "Moriarty");
	print_r(array_keys($data));
	
	echo "<br><br>";
	echo "Example 3: sort<br>";
	$data = array("g", "t", "a", "s");
	sort($data);
	print_r($data);
	
	echo "<br><br>";
	echo "Example 4: array_flip<br>";
	$data = array("a" => "apple", "b" => "ball");
	print_r(array_flip($data));
		
	echo "<br><br>";
	echo "Example 5: array_reverse<br>";
	$data = array(10, 20, 25, 60);
	print_r(array_reverse($data));
	
	echo "<br><br>";
	echo "Example 6: array_unique<br>";
	$data = array(1,1,4,6,7,4);
	print_r(array_unique($data));
		
	echo "<br><br>";
	echo "Example 7: array_merge<br>";
	$data1 = array("cat", "goat");
	$data2 = array("dog", "cow");
	print_r(array_merge($data1, $data2));
	
	echo "<br><br>";
	echo "Example 8: array_unshift<br>";
	$queue = array("orange", "banana");
	array_unshift($queue, "apple", "raspberry");
	print_r($queue);	
	
	echo "<br><br>";
	echo "Example 9: array_shift<br>";
	$stack = array("orange", "banana", "apple", "raspberry");
	$fruit = array_shift($stack);
	print_r($stack);
	
	echo "<br><br>";
	echo "Example 10: array_push<br>";
	$stack = array("orange", "banana");
	array_push($stack, "apple", "raspberry");
	print_r($stack);
	
	echo "<br><br>";
	echo "Example 11: sizeof<br>";
	$data = array("red", "green", "blue");
	echo "Array has " . sizeof($data) . " elements";
	
	echo "<br><br>";
	echo "Example 12: pop<br>";
	$data = array("Donald", "Jim", "Tom");
	array_pop($data);
	print_r($data);

	echo "<br><br>";
	echo "Example 13: array_rand<br>";
	$data = array("white", "black", "red");
	echo "Today's color is " . $data[array_rand($data)];
	
	echo "<br><br>";
	echo "Example 14: array_search<br>";
	$color = array("blue" => "#0000cc", "black" => "#000000", "green" => "#00ff00");
	echo "Found " . array_search("#000000", $color);
	
	echo "<br><br>";
	echo "Example 15: array_sum<br>";
	$a = array(2, 4, 6, 8);
	echo "sum(a) = " . array_sum($a) . "<br>";
	$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
	echo "sum(b) = " . array_sum($b) . "<br>";

?>