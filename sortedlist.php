<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    $d = opendir('.');
    $arr = [];
    // while($f = readdir($d)){
    //     $arr[$f] = filesize($f);
    // }
    $n = 0;
    while($f = readdir($d)){
        $arr[] = [
            'name'=>$f,
            'size'=>filesize($f),
            // 'n'=>$n++,
            'n'=>++$n,

        ];
    }

    // uksort($arr, function($a,$b) {
    //     if(is_dir($a) && !is_dir($b)) return -1;
    //     if(!is_dir($a) && is_dir($b)) return 1;
    //     return $a <=> $b;
    // });
    usort($arr, function($a,$b){
        $an = $a['name'];
        $bn = $b['name'];
        if(is_dir($an) && !is_dir($bn)) return -1;
        if(!is_dir($an) && is_dir($bn)) return 1;
        return $a <=> $b;
    });
    // $arr = array_reverse($arr, true);
    // $arr = array_reverse($arr, false);

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

$names = [
    "Joel" => "Silver",
    "Grant" => "Silver",
    "Andrew" => "Mason"
]

    ?>
    <table border="1">
        <? foreach($arr as $k=>$f){?>
            <? extract($f) ?>
            <tr>
                <td><?=$n?>(<?=$k?>)</td>
                <td><?=$name?></td>
                <td><?=$size?></td>
            </tr>
        <?}?>
    </table>
</body>
</html>