<?php
if (isset($_GET['edad'])) {
    if($_GET['edad']>=18) {
        $es_mayor = true;
    } else {
        $es_mayor = false;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación de mayoría de edad</title>
</head>
<body>
    <h1>Identificación de mayoría de edad</h1>
    <!-- form>label{¿Cuál es tu edad?}+input:number+button{Verificar la edad} -->
     <!-- http://tudominio.com/mayor_edad_web.php?edad=15 -->
    <form method="get">
        <label for="edad">
            ¿Cuál es tu edad?
        </label>
        <input type="number"
               name="edad"
               id="edad"
               max="100"
               min="1"
               required>
        <button type="submit">
            Verificar la edad
        </button>
    </form>
    <?php if (isset($es_mayor) and $es_mayor) { ?>
    <h3>Eres mayor de edad</h3>
    <?php } elseif (isset($es_mayor) and !$es_mayor) { ?>
    <h3>Eres menor de edad</h3>
    <?php } ?>
</body>
</html>