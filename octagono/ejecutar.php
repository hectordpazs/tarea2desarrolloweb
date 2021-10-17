<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Resultado</title>
</head>
<body>
<?php
if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
 $a = $_POST['a'];
 $perimetro = $a*8;
 $apotema = $a/0.83;
 $area=($perimetro*$apotema)/2;
    if(isset($_POST['a']) && !empty($_POST['a'])) {
        if(is_numeric($a)){
            echo "<h2 align='center'>El valor de los lados del octagono es: " . $a ."</h2>";
            echo "<h2 align='center'>El valor del perimetro es: " . $perimetro ."</h2>";
            echo "<h2 align='center'>El valor del apotema es: " . $apotema ."</h2>";
            echo "<h2 align='center'>El valor del area es: " . $area ."</h2>";
 
 unset($_POST['btn']);
 unset($_POST['a']);
 
 echo "<a href='index.php'>Volver al atrás</a>";
 }}}
 else{
 header('location: index.php');
}
?>
</body>
</html>