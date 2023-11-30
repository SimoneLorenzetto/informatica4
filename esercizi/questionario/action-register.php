<!DOCTYPE html>
<html>
<head>
    <title>Dati Utente Registrato</title>
    <style>
        body {
            <?php
            if (isset($_GET['coloreSfondo'])) {
                $coloreSfondo = $_GET['coloreSfondo'];
                echo "background-color: $coloreSfondo;";
            }
            ?>
        }
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Dati Utente Registrato</h2>
    <table>
        <tr>
            <th>Campo</th>
            <th>Valore</th>
        </tr>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            foreach ($_GET as $k => $v) {
        ?>
            <tr>
                <td>
                    <?= $k ?>
                </td>
                <td>
                    <?= $v ?>
                </td>
            </tr>

        <?php
            }
        }
        ?>
    </table>
</body>
</html>
