<?php 

class COMPANY extends SQLite3 {
    function __construct() {
        $this->open("employees.db");
    }
}

$database = new COMPANY();
if (!$database) {
    echo $database->lastErrorMsg();
} else {
    echo "Database opened successfully!\n";
}

$createTable =<<<EOF
CREATE TABLE COMPANY
(ID INT PRIMARY KEY     NOT NULL,
NAME           TEXT    NOT NULL,
AGE            INT     NOT NULL,
ADDRESS        CHAR(50),
SALARY         REAL);
EOF;

$result = $database->exec($createTable);

if (!$result) {
    echo $database->lastErrorMsg();
} else {
    echo "Database entry (Table) created successfully!\n";
}
$database->close();
?>