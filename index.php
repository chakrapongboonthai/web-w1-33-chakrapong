<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>สูตรคูณ For Loop</title>
</head>
<body>

<h1 style="color:skyblue">งานที่ 1 จักรพงศ์ บุญไทย BIT24 เลขที่ 33</h1>

<form method="get">
    <label>เลขแม่สูตรคูณ</label><br>
    <input type="number" name="num" required>
    <input type="submit" value="คำนวณ">
</form>

<?php
if(isset($_GET["num"])){

    $num = $_GET["num"];

    echo "<h3>สูตรคูณแม่ $num (For Loop)</h3>";

    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>สูตร</th><th>ผลลัพธ์</th></tr>";

    for($i = 1; $i <= 12; $i++){
        $result = $num * $i;
        echo "<tr>";
        echo "<td>$num x $i</td>";
        echo "<td>$result</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

<br><br>
<a href="while.php">ไปหน้า While Loop</a>

</body>
</html>