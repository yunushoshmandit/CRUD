<?php

$db_connection = new mysqli('localhost', 'root', '', 'itcenter');

// var_dump($db_connection);
/*
C:\wamp64\www\mysql\home.php:5:
object(mysqli)[1]
  public 'affected_rows' => int 0
  public 'client_info' => string 'mysqlnd 7.4.26' (length=14)
  public 'client_version' => int 70426
  public 'connect_errno' => int 0
  public 'connect_error' => null
  public 'errno' => int 0
  public 'error' => string '' (length=0)
  public 'error_list' => 
    array (size=0)
      empty
  public 'field_count' => int 0
  public 'host_info' => string 'localhost via TCP/IP' (length=20)
  public 'info' => null
  public 'insert_id' => int 0
  public 'server_info' => string '5.7.36' (length=6)
  public 'server_version' => int 50736
  public 'sqlstate' => string '00000' (length=5)
  public 'protocol_version' => int 10
  public 'thread_id' => int 1832
  public 'warning_count' => int 0
  */

// $sql_query = ' INSERT INTO trainers VALUES ("", "Bill Gates", "Bill.Gates@gmail.com", null, "Programming") ';
// $sql_query = ' UPDATE trainers SET T_Phone="+1 2222 333444" WHERE T_ID =16 ';
// $sql_query = 'DELETE FROM trainers WHERE T_ID =15 ';
// $sql_query = ' SELECT * FROM trainers WHERE T_Dept = "Database Administration"';
$sql_query = ' SELECT * FROM trainers ';

$result = $db_connection->query($sql_query);

// echo '<pre>';
// var_dump($result);

// $data = $result->fetch_assoc();
 $data = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($data);
?>

<table border="1">
    <tr>
        <th>T_ID</th>
        <th>T_NAME</th>
        <th>T_EMAIL</th>
        <th>T_Phone</th>
        <th>T_Dept</th>
    </tr>

    <tbody>

        <?php

            foreach($data as $record){

                echo '<tr>
                            <td>'. $record['T_ID'] .'</td>
                            <td>'. $record['T_Name'] .'</td>
                            <td>'. $record['T_Email'] .'</td>
                            <td>'. $record['T_Phone'] .'</td>
                            <td>'. $record['T_Dept'] .'</td>
                    
                     </tr>';
            }

        ?>

    </tbody>
</table>
