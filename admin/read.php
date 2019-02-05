<?php
    require 'db/database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: adminarea.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM cikkek where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
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
                                <h3>Poszt megtekintése</h3>
                            </div>
                             
                            <div class="form-horizontal" >
                              <div class="control-group">
                                <label class="control-label">Cím</label>
                                <div class="controls">
                                    <label id="read" class="checkbox">
                                        <?php echo $data['title'];?>
                                    </label>
                                </div>
                              </div>
                          
                              <div class="control-group">
                                <label class="control-label">Tartalom</label>
                                <div class="controls">
                                    <label id="read" class="checkbox">
                                        <?php echo $data['content'];?>
                                    </label>
                                </div>
                              </div>
                                <div class="form-actions">
                                  <a class="btn" id="btn" href="adminarea.php">Vissza</a>
                               </div>
                             
                              
                            </div>
                        </div>
                         
            </div> <!-- /container -->
    </div>
   
  </body>
</html>