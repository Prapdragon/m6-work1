<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>ให้นักเรียนค้นหาผลลัพท์ของตัวแปร:</h1>";
        echo "ค้นหา:(ชื่อตัวแปร:$.sp) ผลลัพท์ลำดับที่(ชื่อตัวแปร:$.b)-(ชื่อตัวแปร:$.sn)จากทั้งหมด(ชื่อตัวแปร:$.t)"; 
        echo "***ชื่อตัวแปรนักเรียนสามารถตั้งเป็นอย่างอื่นได้โดยไม่ผิดหลักค่าสงวนการตั้งตัวแปร**";
        $sp = "php mariadb";
        $b = "1";
        $sn = "10";
        $t = "1000";
        echo "<h1>ผลลัพท์ที่ได้</h1>";
        echo "ค้นหา"."$sp"." ผลลัพท์ลำดับที่"."$b"." - "." $sn"." จากทั้งหมด"."$t";

    ?>
</body>
</html>