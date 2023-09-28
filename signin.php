<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'root@123';
         $dbname = 'user';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
   
         $sql = "CREATE TABLE users( ".
            "Name INT NOT NULL AUTO_INCREMENT, ".
            "Email VARCHAR(100) NOT NULL, ".
            "phone VARCHAR(40) NOT NULL, ".
            "date_of_birth DATE, ".
            "PRIMARY KEY ( phone )); ";
         if ($mysqli->query($sql)) {
            printf("Table user created successfully.<br />");
         }
         if ($mysqli->errno) {
            printf("Could not create table: %s<br />", $mysqli->error);
         }

         $mysqli->close();
      ?>