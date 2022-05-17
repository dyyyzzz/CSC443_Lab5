
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
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

    $key = count($month);

    for($i = 0; $i < $key; $i++){
        sort($month);
        echo $month[$i];
        echo "<br>";
    }
    ?>
    </body>
    </html>
   
    
