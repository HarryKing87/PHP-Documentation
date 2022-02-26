<?php 

class MyDB extends SQLite3 {
    function __construct() {
        $this->open("employees.db");
    }
}

$db = new MyDB();

if (!$db) {
    echo $db->lastErrorMsg(); 
} else {
    echo "Database running...";
}

$insertNew = <<<EOF
INSERT INTO COMPANY (ID, NAME, AGE, ADDRESS, SALARY)
VALUES ('3', 'APPLE', 30, 'CALIFORNIA', 120000000);
EOF;

$result = $db->exec($insertNew);

if(!$result) {
    echo $db->lastErrorMsg();
} else {
    echo "Results added...";
}

$db->close();
?>
