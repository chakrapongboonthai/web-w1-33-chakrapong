<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <?php
        echo "<h1 style='color:skyblue'>งานที่ 1 จักรพงค์ บุญไทย BIT24 เลขที่ 33</h1>" ;
    ?>

    <form action="">
        <label style='color:pink'for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="" id="">
        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "สูตรคูณแม่" , $num;
        }
    
    ?>
</body>
</html>