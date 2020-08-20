<?php
    $n=1;
    $arr =[10,8,5,9,11,21,18,16,22];
    $newarr =array_chunk($arr,3);
    $new = [$newarr[0][0],$newarr[1][0],$newarr[2][0],$newarr[0][1],$newarr[1][1],$newarr[2][1],$newarr[0][2],$newarr[1][2],$newarr[2][2]];
    foreach($new as $val){
        echo "," .$val ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    
</body>
</html>