<html>
<body>
    <?php    
        $monthDays = array ('Splorch' => 23, 'Sploo' => 28,
                            'Splat'   => 2, 'Splatt'  =>  3,
                            'Spleen'  => 44, 'Splune'  => 30,
                            'Spling'  => 61, 'Slendo'  => 61,
                            'Sploctember' => 31, 'Splictember' => 31,
                            'Splanet' => 30, 'TheRest' => 22);
    
   print_r("Minimum Days: " .min($monthDays));
   echo "<br>";
   print_r("Maximum Days: " .max($monthDays));
   echo "<br>";
   print_r("Number of Days in Year: " .array_sum($monthDays), $monthDays);
   echo "<br>";
   print_r("Maximum Days month: " .array_search(max($monthDays),$monthDays));
   echo "<br>";
    ?>
    </body>
    </html>
