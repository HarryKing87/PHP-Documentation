<?php 
class COMPANY extends SQLite3 {
    function __construct() {
        $this->open('employees.db');
    }
}

$database = new COMPANY();
if (!$database) {
    echo $database->lastErrorMsg();
} else {
    echo "Database accessed!\n";
}

$insert =<<<EOF
    INSERT INTO COMPANY (ID, NAME, AGE, ADDRESS, SALARY)
    VALUES (1, 'APPLE', 25, 'CALIFORNIA', 150000);

    INSERT INTO COMPANY (ID, NAME, AGE, ADDRESS, SALARY)
    VALUES (2, 'NIKE', 20, 'BROOKLYN', 12000);
EOF;

$result = $database->exec($insert);
if(!$result) {
    echo $database->lastErrorMsg();
} else {
    echo "Records added successfully!\n";
}
$database->close();
?>