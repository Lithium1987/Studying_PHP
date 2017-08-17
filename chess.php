<h1>Пример вывода шахматных фигур на доске</h1>

<?php

$figures = ['пешка черных','пешка черных','пешка черных','пешка черных', 'Слон черных', 'Конь черных', 'Ладья черных', 'Ферзь черных', 'Король черных',
    'пешка белых','пешка белых','пешка белых','пешка белых', 'Слон белых', 'Конь белых', 'Ладья белых', 'Ферзь белых', 'Король белых'];
$rows = [1,2,3,4,5,6,7,8];
$columns = ['a','b','c','d','e','f','g','h'];
$n=0;
$color ='#FFFFFF'

?>
<table border = "1" cellpadding="20" cellspacing="0" width="500">
    <tr bgcolor=#45879><th></th><th>a</th><th>b</th><th>c</th><th>d</th><th>e</th><th>f</th><th>g</th><th>h</th><th></th></tr>
    <?php
    foreach ($rows as $value) {
        ?>
        <tr><th bgcolor=#45879><?php
                echo ($rows[$n]);
                ?></th>
            <?php
            foreach ($columns as $value) {
                ?>
                <th bgcolor=<?php
                echo($color);
                if ($color='#FFFFFF') {
                    $color = '#EB9E28';
                }   else {
                    $color='#FFFFFF';
                }

                ?>
                >
                   <?php
                    $keyFig = array_rand($figures, 1);
                    $elemFig = $figures[$keyFig];
                    $addArray = ['',$elemFig];
                    $keyAddArray = array_rand($addArray,1);
                    echo $addArray[$keyAddArray]; ?>
                </th>
                <?php
            }
            ?>
            <th bgcolor=#45879><?php
                echo ($rows[$n]);
                $n += 1;
                ?></th>
        </tr>
        <?php
    }
    ?>
    <tr bgcolor=#45879><th></th><th>a</th><th>b</th><th>c</th><th>d</th><th>e</th><th>f</th><th>g</th><th>h</th><th></th></tr>


</table>