<?php
   // Create a class that directly connects with the database
   class MyDB extends SQLite3 {
      // The constructor opens or creates a specific file.
      function __construct() {
         $this->open('employees.db');
      }
   }
   // Instantiate the class Company
   $db = new MyDB();
   // if the database created doesn't exist it throws an error
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
?>