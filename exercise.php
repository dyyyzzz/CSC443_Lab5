<html>
<body>
    <?php
        $month[0] = 'January'; 
        $month[1] = 'February';
        $month[2] = 'March';
        $month[3] = 'April';
        $month[4] = 'May';
        $month[5] = 'June';
        $month[6] = 'July';
        $month[7] = 'August';
        $month[8] = 'September';
        $month[9] = 'October';
        $month[10] = 'November';
        $month[11] = 'December';
    
    $monthDays = array ('January'   => 31, 'February'  => 28,
                         'March'    => 31,  'April'    => 30,
                         'May'      => 31,  'June'     => 30,
                         'July'     => 31,  'August'   => 31,
                         'September'=> 30,  ' October' => 31,
                         'November' => 30,  'December' => 31);
    
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
