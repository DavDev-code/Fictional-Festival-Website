<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets - Graffiti Festival 2025</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik+Glitch&display=swap">
</head>
<body>
    <nav>
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Schedule.html">Schedule</a></li>
            <li><a class="active" href="Tickets.html">Tickets</a></li>
        </ul>
    </nav>
    <div class="tickets">
        <?php
            include 'db_connect.php';
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $firstname = $conn->real_escape_string($_POST['firstname']);
                $lastname = $conn->real_escape_string($_POST['lastname']);
                $mail = $conn->real_escape_string($_POST['mail']);
                $pass = $conn->real_escape_string($_POST['pass']);
                $seat = $conn->real_escape_string($_POST['seat']);
                $sql = "INSERT INTO info (Firstname, Lastname, email, Ticket, Seat) VALUES ('$firstname', '$lastname', '$mail', '$pass', '$seat')";
                if ($conn->query($sql) === TRUE) {
                    echo "Your ticket purchase was succefull. Check your e-mail address for more info.";
                } else {
                    echo "Error : " . $conn->error;
                }
            }
            $conn->close();
        ?>
    </div>
</body>
</html>