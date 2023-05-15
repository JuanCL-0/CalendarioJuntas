<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitado calendario</title>

        <!-- JS + CSS -->
    <script src="4a-cal-in.js"></script>
    <link rel="stylesheet" href="4c-calendar.css">
</head>
<body>
<?php
    // (A) DAYS MONTHS YEAR
    $months = [
      1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril",
      5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto",
      9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
    ];
    $monthNow = date("m");
    $yearNow = date("Y"); 
?>

    <!-- (B) PERIOD SELECTOR -->
    <div id="calHead">
        <div id="calPeriod">
            <input id="calBack" type="button" class="mi" value="&lt;">
            <select id="calMonth"><?php foreach ($months as $m=>$mth) {
                printf("<option value='%u'%s>%s</option>",
                $m, $m==$monthNow?" selected":"", $mth
                );
            } ?></select>
            <input id="calYear" type="number" value="<?=$yearNow?>">
            <input id="calNext" type="button" class="mi" value="&gt;">
        </div>
    </div>
        <!-- (C) CALENDAR WRAPPER -->
    <div id="calWrap">
      <div id="calDays"></div>
      <div id="calBody"></div>
    </div>
</body>
</html>