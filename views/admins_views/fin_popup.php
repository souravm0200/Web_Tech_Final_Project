<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="finTable">
        <?php
        if (isset($_SESSION['studentFin'])) {
            $student = userinfobyId($_SESSION['studentFin'][0]['id']);
            $studentFinInfo = $_SESSION['studentFin'];
        }
        echo "<table>
                <tr>
                    <th>Date</th>
                    <th>Amount Paid</th>
                </tr>
            ";
        foreach ($studentFinInfo as $info) {
            echo "
                <tr>
                    <td>{$info['date']}</td>
                    <td>{$info['amount']}</td>
                </tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>

</html>