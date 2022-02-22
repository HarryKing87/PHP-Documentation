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
    echo "Database accessed successfully!\n";
}

$select = <<<EOF
    SELECT * FROM COMPANY;
EOF;

$result = $database->query($select);

while($display = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "ID = ". $display['ID'] . "\n";
    echo "NAME = ". $display['NAME'] ."\n";
    echo "ADDRESS = ". $display['ADDRESS'] ."\n";
    echo "SALARY = ".$display['SALARY'] ."\n\n";
}
echo "Database records have been shown\n";
$database->close();
?>