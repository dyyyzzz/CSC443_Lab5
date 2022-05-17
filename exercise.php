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
                            'Splat'   => 2, 'Splatt'  =>  3,
                            'Spleen'  => 44, 'Splune'  => 30,
                            'Spling'  => 61, 'Slendo'  => 61,
                            'Sploctember' => 31, 'Splictember' => 31,
                            'Splanet' => 30, 'TheRest' => 22);
    
     print_r("Minimum Days: " .min($monthDays)); //number (i)
     echo "<br>";
     print_r("Minimum Days month: " .array_search(min($monthDays),$monthDays)); //number (ii)
     echo "<br>";
     print_r("Number of Days in Year: " .array_sum($monthDays)); //number (iii)
     echo "<br>";


    

    ?>
    </body>
    </html>
