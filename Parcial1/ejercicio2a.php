<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="ejercicio2b.php" method="get">
    <?php
    echo "Hoy es: ".date("j-F-Y")."<br><br>";
    echo "Dia: <select name='dia'>";
    for ($i=1;$i < 32; $i++) {
        if ($i==date(j)) {
            echo "<option selected='true' value=".$i.">".$i."</option>";
        }else
            echo "<option value=".$i.">".$i."</option>";
    }
    ?>
    </select>
    <br>
    <br>
    <?php
    echo "Mes: "."<select name='mes'>";
    for ($i=1;$i < 2; $i++)  {
        switch ($b) {
            case 1:
                $mes = "Enero";
                if (1==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 2:
                $mes = "Febrero";
                if (2==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 3:
                $mes = "Marzo";
                if (3==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 4:
                $mes = "Abril";
                if (4==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 5:
                $mes = "Mayo";
                if (5==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 6:
                $mes = "Junio";
                if (5==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 7:
                $mes = "Julio";
                if (5==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 8:
                $mes = "Agosto";
                if (5==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 9:
                $mes = "Septiembre";
                if (5==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 10:
                $mes = "Octubre";
                if (5==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 11:
                $mes = "Noviembre";
                if (5==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
            case 12:
                $mes = "Diciembre";
                if (5==date(n)) {
                    echo "<option selected='true' value=".$mes.">".$mes."</option>";
                }else
                    echo "<option value=".$mes.">".$mes."</option>";
        }
    }
    ?>
    </select>
    <br>
    <br>
    <?php
    echo "Año: "."<select name='ano'>";
    for ($c=1900;$c < 2101; $c++){
        if ($c==date(Y)) {
            echo "<option selected='true' value=" . $c . ">" . $c . "</option>";
        }else
            echo "<option value=".$c.">".$c."</option>";
    }

    echo "
    <label for='checkbox'>Mostrar formato corto:</label>
    ";


    ?>
    </select>
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>