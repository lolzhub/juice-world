<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    $con = mysqli_connect("localhost", "root", "", "juiceworld");
    if (!$con) {
    ?>
        <script type="text/javascript">
            alert("Smtn went wrong...");
        </script>

    <?php
        include("index.html");
    }
    $name = $_REQUEST['name'];
    $visitor = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    $count = mysqli_query($con, "insert into contactus values ('$name' , '$visitor' , '$subject' , '$message');");
    if ($count >= 1) {
    ?>
        <script type="text/javascript">
            alert("Message sent successfully");
        </script>

    <?php
        include("index.html");
    }


    ?>
</body>

</html>