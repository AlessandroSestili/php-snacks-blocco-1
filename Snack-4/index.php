<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$min = 1;
$max = 100;
$randomNumbers = 15;
$array = [];

while (sizeof($array) < $randomNumbers) {
   $number = rand($min, $max);

   if(!in_array($number, $array)) $array[] = $number;
}

sort($array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack 4</title>
</head>
<body>

   <ol>
      <?php
      for($i = 0; $i < sizeof($array); $i++) {
      ?>

         <li>
            <?php echo $array[$i] ?>
         </li>

      <?php } ?>
   </ol>

</body>
</html>