<?php 
  if(!file_exists("datos.txt")){
    file_put_contents("datos.txt", "0\r\n0\r\n0\r\n0");
  }

  if(isset($_GET['sensor1'])){
    $ARCHIVO=file_get_contents("datos.txt");
    $pos=strpos($ARCHIVO,"\r\n");
    $VAR20=substr($ARCHIVO, $pos+2);
    $pos1=strpos($VAR20,"\r\n");
    $VAR30=substr($VAR20, 0,$pos1);
    $VAR40=substr($VAR20, $pos1+2);
    $pos2=strpos($VAR40,"\r\n");
    $VAR50=substr($VAR40, 0,$pos2);
    $VAR60=substr($VAR40, $pos2);
    $VARa=$_GET['sensor1'];
    $VARb=$VAR30;
    $VARc=$VAR50;
    $VARd=$VAR60;
    $TEXTO=$VARa."\r\n".$VARb."\r\n".$VARc."\r\n".$VARd;
    file_put_contents("datos.txt", $TEXTO);
  }

  if(isset($_GET['sensor2'])){
    $ARCHIVO=file_get_contents("datos.txt");
    $pos=strpos($ARCHIVO,"\r\n");
    $VAR10=substr($ARCHIVO, 0,$pos);
    $VAR20=substr($ARCHIVO, $pos+2);
    $pos1=strpos($VAR20,"\r\n");
    $VAR30=substr($VAR20, 0,$pos1);
    $VAR40=substr($VAR20, $pos1+2);
    $pos2=strpos($VAR40,"\r\n");
    $VAR50=substr($VAR40, 0,$pos2);
    $VAR60=substr($VAR40, $pos2);
    $VARa=$VAR10;
    $VARb=$_GET['sensor2'];
    $VARc=$VAR50;
    $VARd=$VAR60;
    $TEXTO=$VARa."\r\n".$VARb."\r\n".$VARc."\r\n".$VARd;
    file_put_contents("datos.txt", $TEXTO);
  }

  if(isset($_GET['sensor3'])){
    $ARCHIVO=file_get_contents("datos.txt");
    $pos=strpos($ARCHIVO,"\r\n");
    $VAR10=substr($ARCHIVO, 0,$pos);
    $VAR20=substr($ARCHIVO, $pos+2);
    $pos1=strpos($VAR20,"\r\n");
    $VAR30=substr($VAR20, 0,$pos1);
    $VAR40=substr($VAR20, $pos1+2);
    $pos2=strpos($VAR40,"\r\n");
    $VAR50=substr($VAR40, 0,$pos2);
    $VAR60=substr($VAR40, $pos2);
    $VARa=$VAR10;
    $VARb=$VAR30;
    $VARc=$_GET['sensor3'];
    $VARd=$VAR60;
    $TEXTO=$VARa."\r\n".$VARb."\r\n".$VARc."\r\n".$VARd;
    file_put_contents("datos.txt", $TEXTO);
  }

  if(isset($_GET['sensor4'])){
    $ARCHIVO=file_get_contents("datos.txt");
    $pos=strpos($ARCHIVO,"\r\n");
    $VAR10=substr($ARCHIVO, 0,$pos);
    $VAR20=substr($ARCHIVO, $pos+2);
    $pos1=strpos($VAR20,"\r\n");
    $VAR30=substr($VAR20, 0,$pos1);
    $VAR40=substr($VAR20, $pos1+2);
    $pos2=strpos($VAR40,"\r\n");
    $VAR50=substr($VAR40, 0,$pos2);
    $VAR60=substr($VAR40, $pos2);
    $VARa=$VAR10;
    $VARb=$VAR30;
    $VARc=$VAR50;
    $VARd=$_GET['sensor4'];
    $TEXTO=$VARa."\r\n".$VARb."\r\n".$VARc."\r\n".$VARd;
    file_put_contents("datos.txt", $TEXTO);
  }

  $ARCHIVO=file_get_contents("datos.txt");
  $pos=strpos($ARCHIVO,"\r\n");
  $VAR1=substr($ARCHIVO, 0,$pos);
  $VAR2=substr($ARCHIVO, $pos+2);
  $pos1=strpos($VAR2,"\r\n");
  $VAR3=substr($VAR2, 0,$pos1);
  $VAR4=substr($VAR2, $pos1+2);
  $pos2=strpos($VAR4,"\r\n");
  $VAR5=substr($VAR4, 0,$pos2);
  $VAR6=substr($VAR4, $pos2);
?>

<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Sensores con Node MCU</title>
</head>
<body>
    <div class="intro">
        <div class="intro-title">
            <h1>Sensores con Node MCU</h1>
        </div>
        <div class="intro-text">
            <p>A manera de práctica con dispositivos 
                físicos, aquí se encuentran los request 
                realizados mediante un dispositivo node 
                mcu y sus modificaciones son guardadas 
                en el servidor usando programación de 
                php, además de lenguajes de marcado 
                como html, css y bootstrap.</p>
        </div>
    </div>
    <table class="sensores-table">
        <tr>
            <td><b>Sensor 1 = </b></td>
            <td><?php echo $VAR1 ?></td>
        </tr>
        <tr>
            <td><b>Sensor 2 = </b></td>
            <td><?php echo $VAR3 ?></td>
        </tr>
        <tr>
            <td><b>Sensor 3 = </b></td>
            <td><?php echo $VAR5 ?></td>
        </tr>
        <tr>
            <td><b>Sensor 4 = </b></td>
            <td><?php echo $VAR6 ?></td>
        </tr>
    </table>
</body>
</html>