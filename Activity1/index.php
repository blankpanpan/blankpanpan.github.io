<!-- JEREMIAH F. DE BIEN || BSIT 2-3 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <form>
                <label for="table-class">Choose a table design:</label>
                <select id="table-class" name="table-class" onchange="changeTableClass()">
                    <option value="default">Default</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="orange">Orange</option>
                    <option value="red">Red</option>
                    <option value="purple">Purple</option>
                </select>
            </form>
            <table id="MulTable" class="default">
                <?php
                $row = 20;
                $column = 20;
                for ($i = 1; $i <= $row; $i++){
                    echo "<tr>";
                    for ($j = 1; $j <= $column; $j++){
                        echo "<td title = '$i x $j'>" . $i * $j. "</td>";
                    }
                }
                ?>
            </table>
        </div>
    </div>

</body>
    <script src="script.js"></script>
</html>



