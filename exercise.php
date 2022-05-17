<html>
<body>
    <?php
        $month[0] = 'Splorch'; 
        $month[1] = 'Sploo';
        $month[2] = 'Splat';
        $month[3] = 'Splatt';
        $month[4] = 'Spleen';
        $month[5] = 'Splune';
        $month[6] = 'Spling';
        $month[7] = 'Slendo';
        $month[8] = 'Sploctember';
        $month[9] = 'Splictember';
        $month[10] = 'Splanet';
        $month[11] = 'TheRest';
    
        $monthDays = array ('Splorch' => 23, 'Sploo' => 28,
                            'Splat'   => v2, 'Splatt'  =>  3,
                            'Spleen'  => 44, 'Splune'  => 30,
                            'Spling'  => 61, 'Slendo'  => 61,
                            'Sploctember' => 31, 'Splictember' => 31,
                            'Splanet' => 30, 'TheRest' => 22);
    
    $i = 0;

    foreach($monthDays as $num => $days)
    {
        echo "$month[$i] - $days<br>";
        $i++;
    }

    echo "<br>";

    ?>
    </body>
    </html>
