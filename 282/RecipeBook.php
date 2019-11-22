<DOCTYPE html>
<html>
		<!--
		Assignment 3 RecipeBook
		Author: Kainoa Lloyd 
		Student number: 10114858 
		NetID:13krl1@queensu.ca
		CISC 282
		-->
	<head>
			<title> RecipeBook </title>
			<link rel="stylesheet" type="text/css" href="http://54.68.135.11/13krl1/TableStyle.css">
			<link rel="icon" type="image/x-icon" href="/favicon.ico">
	</head>
	<h1 id ="title1"> Table of Contents </h1>
	<?php

		$recipe = file("classrecipes.txt", FILE_IGNORE_NEW_LINES);    //reads file and puts in an array
		$categories = array();
		$length = count($recipe);
		//creates a 2d array each row contains each line and columns are (timestamp, recipename, category, url)
		for ($index = 0; $index < $length; $index++){
			$columns[$index] = explode("|", $recipe[$index]);
		}
		//makes an array for category
		for ($row = 0; $row < $length; $row++){
			$categories[] = $columns[$row][2];
		}
		$categories =array_unique($categories);
		sort($categories);
		
		//primary purpose of nested for loop is to print each recipe as a link to its site under its proper category
		for($index = 0; $index < count($categories); $index++){
			print "<h1> {$categories[$index]} </h1>";
			/*this if statement is for putting pictures in each categories with a base set of categories if there 
				aren't these categories or there exists a category that isn't here then there will be no picture for it*/
			if ($categories[$index] == "Appetizer"){
				print '<img src="appetizers.jpg" alt="appetizers" style="width:100px;height:90px">';
			}elseif ($categories[$index] == 'Breads/Muffins'){
				print '<img src="breads.jpg" alt="breads" style="width:150px;height:145px">';
			}elseif ($categories[$index] == "Dessert"){
				print '<img src="desserts.jpg" alt="desserts" style="width:400px;height:400px">';
			}elseif ($categories[$index] == 'Meat/Fish/Poultry'){
				print '<img src="meat.jpg" alt="meat" style="width:400px;height:400px">';
			}elseif ($categories[$index] == "Other"){
				print '<img src="waffles.jpg" alt="waffles" style="width:350px;height:350px">';
			}elseif ($categories[$index] == "Pasta"){
				print '<img src="pasta.jpg" alt="pasta" style="width:200px;height:200px">';
			}elseif ($categories[$index] == "Soup"){
				print '<img src="soup.jpg" alt="soup" style="width:130px;height:130px">';
			}elseif ($categories[$index] == "Salad"){
				print '<img src="salad.jpg" alt="salad" style="width:100px;height:70px">';
			}elseif ($categories[$index] == "Vegetable Side Dish"){
				print '<img src="vegetablesidedish.jpg" alt="veggies" style="width:100px;height:100px">';
			}elseif ($categories[$index] == "Beverages"){
				print '<img src="beverages.jpg" alt="beverages" style="width:130px;height:40px">';
			}
			for($row = 0; $row < count($columns); $row++){
				if ($categories[$index] == $columns[$row][2]){
					print "<a href={$columns[$row][3]}> {$columns[$row][1]} </a><br>";
				}
				
			}
		}
	?>
	<body>
		<br><br><br><br><br>
		Copyright &#169 2014 CISC 282<br>
		All Rights Reserved
	</body>	
</html>