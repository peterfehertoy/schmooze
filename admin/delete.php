<?php
    require 'db/database.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM cikkek  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: adminarea.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="adminarea.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>


<div class="lg-container">  
        <div id="title_bar">
    
            
            
        </div>




        <div class="user">
        <?php
        session_start();
        if(!$_SESSION["login_user"])
        {
            header("location:admin.php?notlogedin=Lépj be!");   
        }
        else{
            echo "<h3>Üdv:".$_SESSION["login_user"]."</h3>"; 
        ?>
        </div>
        
        
        <div class="logout">
        <?php
        echo"<a href='login/logout.php'>Logout</a>";
            
        }
        ?>
        </div>  
    </div>
    
    
    
    
    
    <div id="content-1">
        <div class="container">
             
                        <div class="span10 offset1">
                            <div class="row">
                                <h3>Cikk törlése</h3>
                            </div>
                             
                            <form class="form-horizontal" action="delete.php" method="post">
                              <input id="btn" type="hidden" name="id" value="<?php echo $id;?>"/>
                              <p id="torles" class="alert alert-error">Biztos törlöd a cikket ?</p>
                              
                              <div class="form-actions">
                                  <button id="btn" type="submit"  class="btn btn-danger">Igen</button>
                                  <a id="btn" class="btn"  href="adminarea.php">Nem</a>
                                </div>
                            </form>
                        </div>
                         
            </div> <!-- /container -->
    </div>
    
  </body>
</html>