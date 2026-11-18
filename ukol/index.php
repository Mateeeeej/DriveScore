<?php

$slova = "brozek, matej, jeptiska, laravel, zruda";
$slovo = explode(", ", $slova);
$random_slovo = array_rand($slovo);
$random = $slovo[$random_slovo];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo $random . "<br>";
?>
    
<?php for ($i = 1; $i <= 20; $i++): ?>
    <div id="block<?= $i ?>">block</div>
<?php endfor; ?>

</body>
</html>
