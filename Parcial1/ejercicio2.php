
<html>
<body>
Dia:
<select>
    <?php
        for($i = 1; $i < 32; $i++) {
            if($i ==date("d")) {
                echo "<option selected>$i</option>";
            }
            else {
                echo "<option>$i</option>";
            }
        }
    ?>
</select>
Mes:
<select>
    <?php
    
    for($i = 0; $i < 13; $i++) {
        if($i == date("n")) {
            echo "<option selected>".date("F")."</option>";
        }
        else {
            echo "<option>$i</option>";
        }
    }
    ?>
</select>
Año:
<select>
    <?php
    for($i = 1900; $i < 2101; $i++) {
        if($i == date("Y")) {
            echo "<option selected>".date("Y")."</option>";
        }
        else {
            echo "<option>$i</option>";
        }
    }
    ?>
</select>

</body>

</html>