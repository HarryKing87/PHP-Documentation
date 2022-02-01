<?php 
$result;
$month_error;
$day_error;
$year_error;

$month_option = ["options" => ["min_range" => 1, "max_range" => 12]];
$day_option = ["options" => ["min_range" => 1, "max_range" => 31]];
$year_option = ["options" => ["min_range" => 1910, "max_range" => 2022]];

function checkValidity($type, $error, $options_arr) {
    if (!filter_var($_POST[$type], FILTER_VALIDATE_INT, $options_arr)) {
        return false;
        $error = "* Invalid ${type}";
    }
    else {
        return true;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $month = checkValidity("month", $month_error, $month_option);
    $day = checkValidity("day", $day_error, $day_option);
    $year = checkValidity("year", $year_error, $year_option);

    if ($month && $day && $year) {
        $result = "The specified date is " . $_POST["day"] . "/" . $_POST["month"] . "/" . $_POST["year"];
    }
}


?>

<form method="POST" action="">
    <h5>Enter a date</h5>
    <input type="number" name = "day" placeholder = "Enter day...">
    <p><i><?= $day_error ?></i></p>
    <br>
    <input type="number" name = "month" placeholder = "Enter month...">
    <p><i><?= $month_error ?></i></p>
    <br>
    <input type="number" name = "year" placeholder = "Enter year...">
    <p><i><?= $year_error ?></i></p>
    <br>
    <input type="submit">
    <p><i><?= $error ?></i></p>
    <p><?= $result ?></p>
</form>