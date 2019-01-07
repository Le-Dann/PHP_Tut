<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo "Counting"; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="phploop.php" method="POST">
        <p> Print from 1 to:
            <input type="text" name="countto" size="30" value=""/>
        </p>

        <p> Calculate Fibonacci to:
                <input type="text" name="fibonacci" size="30" value=""/>
        </p>

        <p>
            <input type="submit" name= "submit" value="Send"/>
    </form>
</body>
</html>