<?php 
 $submit = filter_input(INPUT_POST, 'submit');
 $amount = filter_input(INPUT_POST, 'amount');
 $switch = filter_input(INPUT_POST, 'currency');
 define('EUR_CZK', 27);
 define('USD_CZK', 23);
 define('GBP_CZK', 30);
 
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Převod</h1>
    
<?php 
switch ($switch) {
    case 'eur_czk':
        $final = $amount / EUR_CZK; 
        break;
    
    case 'czk_eur':
        $final = $amount * EUR_CZK; 
        break;

    case 'dol_czk':
        $final = $amount * USD_CZK; 
        break;
        
    case 'czk_dol':
        $final = $amount / USD_CZK; 
        break;

    case 'lib_czk':
        $final = $amount * GBP_CZK; 
        break;
        
    case 'czk_lib':
        $final = $amount / GBP_CZK; 
        break;
    
}?>






    <?php 
    if (isset($submit)) {?>
     <br><?=$final?>
<?php
} else {?> 
    <form action="wp2-3B.php" method="post">
    <input type="text" name="amount" id="amount" > 
    <br>CZK -> €<input type="radio" name="currency" id="" value="eur_czk" >
    <br>€ -> CZK<input type="radio" name="currency" id="" value="czk_eur" > 

    <br>$ -> CZK<input type="radio" name="currency" id="" value="dol_czk" > 
    <br>CZK -> $<input type="radio" name="currency" id="" value="czk_dol" > 

    <br>£ -> CZK<input type="radio" name="currency" id="" value="lib_czk" > 
    <br>CZK -> £<input type="radio" name="currency" id="" value="czk_lib" > 

    <br><input type="submit" name="submit" value="Odeslat">
    </form>
<?php 
} ?>      









</body>
</html>