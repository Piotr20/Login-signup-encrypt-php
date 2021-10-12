<?php
include('mysql.php');
$sql2 = "SELECT * FROM loginData";
$result = $mySQL-> query($sql2);



// $password = "KittyLower12";

// $abc = ["1", "2"];
// $replace = ["A", "B"];
// $encrypt = str_replace($abc, $replace, $password);


// $pasEncrypt = password_hash($password, PASSWORD_DEFAULT);
// echo $pasEncrypt;


// while(true){
//      $pasEncrypt = password_hash($password, PASSWORD_DEFAULT);

//      echo $pasEncrypt;
//      echo "<br/>";
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="styles.css" />
     <title>Document</title>
</head>

<body>
     <form action="backend.php" method="POST">
          <?php ?>
          <label for="customer-name">Your name:</label>
          <input id="customer-name" type="text" name="customerName" />
          <label for="customer-age">Your password:</label>
          <input id="customer-age" type="password" name="customerPas" />
          <div>
               <input type="submit" value="Let's gooo" />
          </div>
     </form>

     <table>
          <th>Customer username</th>
          <th>Customer password</th>
          <th>Created</th>
          <?php 
          $i = 0;
               while($row = $result->fetch_object() ){
                    echo "<tr>";
                    echo "<td>" .  $row->userName . "</td>";
                    echo "<td>" .  $row->userPas . "</td>";
                    echo "</tr>";
                    $i++;
                    if($i>=10){
                         break;
                    }

               }

               if(isset($_GET['error'])) {
                    if($_GET['error'] == 'customerName') {
                        echo "Please, fill it out";
                    }
                 }
          ?>
     </table>
</body>

</html>