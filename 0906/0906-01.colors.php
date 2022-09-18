<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <input type="text" id="info">
    <table>
        <?php for ($i = 0; $i < 16; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < 16; $j++) : ?>
                    <td style="background-color: <?= sprintf("#%X%X00%X%X", $i, $i, $j, $j) ?>"></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <script>
        const info = document.querySelector("#info"); 
        const table = document.querySelector("table");
        table.addEventListener("mouseover", event=>
            info.value = event.target.getAttribute("style")
        );

        
    </script>
</body>

</html>