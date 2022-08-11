<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to create MySQL table?</title>
</head>
<body>
    <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'ITCENTER';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($mysqli->connect_errno) {
        printf("Connect failed: %s<br />", $mysqli->connect_error);
        exit();
    }
    printf('Connected successfully.<br />');

    $sql = "Create Table students_tbl( ". 
            "ID INT NOT NULL AUTO_INCREMENT, ".
            "St_Name VARCHAR(64) NOT NULL, ".
            "Father_Name VARCHAR(64) NOT NULL, ".
            "Certification_Program VARCHAR(64) NULL, ".
            "Reg_Date DATE, ".
            "PRIMARY KEY (ID)); ";
            if ($mysqli->query($sql)) {
                printf("Table students_tbl created successfully.<br />");
            }
            if ($mysqli->errno) {
                printf("Could not create table: %s<br /> ", $mysqli->error);
            }
            $mysqli->close();
            ?>
</body>
</html>
