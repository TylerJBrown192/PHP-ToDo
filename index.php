<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>PHP ToDo App</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" 			rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link href="styles/styles.css" 		type="text/css"						rel="stylesheet">

</head>
<body>
	
	<div class="list">
		<h1 class="header">To do:</h1>

		<ul class="items">
			<li>
				<span class="item"></span>Pick up shopping
				<a class="done-button" href="#">Mark as done</a>
			</li>
			<li><span class="item"></span>Learn PHP</li>
			<li><span class="item"></span>Have fun</li>
		</ul>

		<form class="item-add" action="add.php" method="post">
			<input class="input" type="text" name="name" placeholder="Type a new item here!" autocomplete="off" required>
			<input class="submit" type="submit" value="Add">
		</form>
	</div>

</body>
</html>