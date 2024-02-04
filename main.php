<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $message = $_POST["message"];
            $fontColor = $_POST["fontColor"];
            echo "<p style='color: $fontColor;'>$message</p>";
        }
    ?>
</body>
</html>