<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <?php
        echo "Hello bitches!";
        $about_me = [
            "first_name" => "John",
            "last_name" => "Doe",
            "age" => 36
        ];

        echo "Just tell me who you are!" . "</br>";
        echo "I'm " . $about_me["first_name"] . " " . $about_me["last_name"] . " " . "and I'm " . $about_me["age"] . " years old!";
    ?>

</body>
</html>