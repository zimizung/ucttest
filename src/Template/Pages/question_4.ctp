echo "<hr>";
echo "Q4";


    function printDivisors($n)
    {
        for ($i = 1; $i <= $n; $i++)
            if ($n % $i == 0)
                echo $i," ";
    }
 
    // Driver Code
    echo  "<br> The divisors of 100 are:\n";
    printDivisors(30);
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <form action="foo.php" method="post">
    Name:  <input type="text" name="username" /><br />
    Email: <input type="text" name="email" /><br />
    <input type="submit" name="submit" value="Submit me!" />
</form>
</body>
</html>