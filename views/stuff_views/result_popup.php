<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="finTable">
        <?php
        if (isset($_SESSION['studentsResults'])) {
            $student = userinfobyId($_SESSION['studentsResults'][0]['id']);
            $studentResults = $_SESSION['studentsResults'];
        }
        echo "<table>
                <tr>
                    <th>Subject Name</th>
                    <th>Result</th>
                </tr>
            ";
        foreach ($studentResults as $info) {
            echo "
                <tr>
                    <td>{$info['course_name']}</td>
                    <td>{$info['marks']}</td>
                </tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>

</html>