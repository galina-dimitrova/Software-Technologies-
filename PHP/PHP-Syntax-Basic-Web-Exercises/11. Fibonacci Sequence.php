<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
	<!--Write your PHP Script here-->
 <?php
    if (isset($_GET['num'])) {
        $num = intval($_GET['num']);
        $first = 1;
        $sec = 1;
        for ($i = 1; $i <= $num; $i++) {
            echo "$first ";
            $oldFirst = $first;
            $first = $sec;
            $sec = $oldFirst+$sec;
        }
    }
    ?>
</body>
</html>