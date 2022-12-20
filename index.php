<?php
	if(isset($_POST['nums']))
	{
		$x = $_POST['num'];
		$y = $_POST['num1'];

		for($i = 0; $i < $y; $i++)
		{
			$sum += pow(-1,$x)*pow($y-1,$x+1);
		}
		echo ($sum);
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

</head>

<body>
    <form method="post" action="">
        <input name="num" type="text">
        <input name="num1" type="text">
        <input type="submit" value="Отправить" name="nums" value="nums">
    </form>
</body>
</html>