<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<head>
    <meta charset="utf-8">
    <link   href="css/style.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>Schmooze Cikk kezelő</h3>
            </div>
            <div class="row">
                <p>
                    <a href="create.php" id="btnujposzt"class="btn btn-success">Új cikk írása</a>
                </p>
                <table  border='1' cellpadding='10' class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Cím</th>

                     
                          <th>Kezelő</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       include 'db/database.php';
                       $pdo = Database::connect();
                       $sql = 'SELECT * FROM cikkek ORDER BY id DESC';
                       foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<td id="cim">'. $row['title'] . '</td>';

                           
                                          echo '<td id="kezelo">';
                                          echo '<a class="btn" id="btnmegnyit" href="read.php?id='.$row['id'].'">Megnyitás</a>';
                                          echo ' ';
                                          echo '<a class="btn" id="btnszerkeszt" href="update.php?id='.$row['id'].'">Update</a>';
                                          echo ' ';
                                          echo '<a class="btn" id="btntorol" href="delete.php?id='.$row['id'].'">Törlés</a>';
                                          echo '</td>';
                              
                                echo '</tr>';
                       }
                       Database::disconnect();
                      ?>
                      </tbody>
                </table>



        </div>
    </div> <!-- /container -->
  </body>
</html>