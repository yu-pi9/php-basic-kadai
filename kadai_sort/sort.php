<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            //ソート対象の配列を用意する
            $nums = [15, 4, 18, 23, 10 ];
            function sort_2way($array,$order){
                if ($order === true) {
                    echo '昇順にソートします。<br>';
                    //sort→昇順
                    sort($array);
                    foreach ($array as $nums) {
                        echo "{$nums} <br>";
                    }
                }else {
                    echo '降順にソートします。<br>';
                    //rsort→降順
                    rsort($array);
                    foreach ($array as $nums){
                        echo "{$nums} <br>";
                    }
                }
            }

            sort_2way($nums,true);
            sort_2way($nums,false);
        ?>
    </p>
</body>

</html>