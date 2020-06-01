<?php
$A = filter_input(INPUT_POST, 'A');
$B = filter_input(INPUT_POST, 'B');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?= $A . ' + ' . $B ?> = <?= $A+$B ?> <br>
<?= $A . ' - ' . $B ?> = <?= $A-$B ?> <br>
<?= $A . ' x ' . $B ?> = <?= $A*$B ?> <br>
<?= $A . ' : ' . $B ?> = <?= $A/$B ?> <br>

</body>
</html>