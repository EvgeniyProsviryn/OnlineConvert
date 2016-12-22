<?php

$str = file_get_contents('http://finance.tut.by/crosskurs/');

preg_match_all('/<big>(.*)+<\/big>/', $str, $matches);

$usd_eur = $matches[0][0];
$usd_rus = $matches[0][2];
$usd_grivn = $matches[0][4];
$usd_zl = $matches[0][6];
$eur_usd = $matches[0][8];
$eur_rub = $matches[0][10];
$rub_usd = $matches[0][12];
$rub_eur = $matches[0][14];
$grivn_usd = $matches[0][16];
$zl_usd = $matches[0][18];


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Онлайн конвертер валют</title>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
    <script src="js/jqBootstrapValidation.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
</head>
<body>
   <ul class="hidden-form hidden">
       <li id="n1"><?php echo $usd_eur; ?></li>
       <li id="n2"><?php echo $usd_rus; ?></li>
       <li id="n3"><?php echo $usd_grivn; ?></li>
       <li id="n4"><?php echo $usd_zl; ?></li>
       <li id="n5"><?php echo $eur_usd; ?></li>
       <li id="n6"><?php echo $eur_rub; ?></li>
       <li id="n7"><?php echo $rub_usd; ?></li>
       <li id="n8"><?php echo $rub_eur; ?></li>
       <li id="n9"><?php echo $grivn_usd; ?></li>
       <li id="n10"><?php echo $zl_usd; ?></li>
   </ul>
    <div class="wrapper">
        <div class="container-fluid">
           <div class="row">
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  filter">
                   <span class="text">Конвертер валют</span>
                   <div class="container">
                       <div class="row">
                           <div class="form-group">
                       <input type="number" class="form-control" name="Sum" placeholder="Введите сумму" data-validation-number-message="Ошибка" required>
                       <select class="form-control moneyselect">
                              <option value="1">Доллары в Евро (USD)/(EUR)</option>
                              <option value="2">Доллары в Рубли (USD)/(RUB)</option>
                              
                              
                              
                              <option value="6">Евро в Рубли (EUR)/(RUB)</option>
                              <option value="7">Рубли в Доллары (RUB)/(USD)</option>
                              <option value="8">Рубли в Евро (RUB)/(EUR)</option>
                              
                              <option value="10">Злотые в Доллары (ZL)/(USD)</option>
                        </select>
                           <input type="submit" class="form-control button" value="Конвертировать" name="submit" required/>
                            <div class="col-md-12 col-xs-12 result  animated zoomIn">
                                <i class="fa fa-times"></i>
                                <span class="res">152123 руб.</span>
                            </div>
                           </form> 
                           
                          </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
     <script src="js/common.js"></script>
</body>
</html>