<?php 

class MyDB extends SQLite3 {
    function __construct() {
        $this->open("employees.db");
    }
}

$db = new MyDB();
if (!$db) {
    echo $db->error();
}

$sql = <<<EOF
UPDATE COMPANY SET NAME = "GOOGLE" WHERE NAME = "APPLE";
EOF;

$result = $db->exec($sql);

if (!$result) {
    echo $db->error();
} else {
    echo "Database successfully updated the record!\n";
}


$selectAll = <<<EOF
SELECT * FROM COMPANY;
EOF;

$resultSelect = $db->query($selectAll);

while ($row = $resultSelect->fetchArray(SQLITE3_ASSOC)) {
    echo "ID = ". $row['ID'] . "\n";
    echo "NAME = ". $row['NAME'] ."\n";
    echo "ADDRESS = ". $row['ADDRESS'] ."\n";
    echo "SALARY = ".$row['SALARY'] ."\n\n";
}

if (!$resultSelect) {
    echo $db->error();
} else {
    echo "Records are being showed!";
}
$db->close();

?>