<?php
$paragrafo = $_POST['testo'];
$censura = $_POST['censura'];

$testoCensurato = str_replace($censura, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Paragrafo</h2>
   <p><?php echo $paragrafo?></p> 
   <p>lunghezza: <?php echo strlen($paragrafo)?></p>
   <h2>Paragrafo censurato</h2>
   <p><?php echo $testoCensurato?></p>
   <p>lunghezza: <?php echo strlen($testoCensurato)?></p>
</body>
</html>