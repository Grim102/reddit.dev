<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roll Dice Game</title>
</head>
<body>
	<h1>Random number: <?= $random ?></h1>
	<h1>Your guess: <?= $guess ?></h1>
	<?php if ($guess == $random): ?>
		<h1>Congrats!<h1>
	<?php else: ?>
		<h1>Guess again</h1>
	<?php endif; ?>
</body>
</html>
