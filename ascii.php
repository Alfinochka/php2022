<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
    <?
    for($i=0; $i<128;$i++){
        echo"<td>code($i) = ".chr($i)."</td>";
        if($i % 16 == 0) echo"<tr></tr>";
    } 
    ?></tr></table>
</body>
</html>