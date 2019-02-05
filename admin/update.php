<?php
    require 'db/database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: adminarea.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $titleError = null;
      
        $contentError = null;
         
        // keep track post values
        $title = $_POST['title'];

        $content = $_POST['content'];
         
        // validate input
        $valid = true;
        if (empty($title)) {
            $titleError = 'írj be címet';
            $valid = false;
        }
         
       
         
        if (empty($content)) {
            $contentError = 'Írj be szöveget!';
            $valid = false;
        }
         
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE cikkek  set title = ?, content =? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($title,$content,$id));
            Database::disconnect();
            header("Location: adminarea.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM cikkek where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $title = $data['title'];

        $content = $data['content'];
        Database::disconnect();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="adminarea.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="../js/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<script src="../js/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
});
</script>
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
        echo"<a href='/login/logout.php'>Logout</a>";
            
        }
        ?>
        </div>  
    </div>
    
    
    
    
    
    <div id="content-1">
 <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Poszt szerkesztése</h3>
                    </div>
             
                    <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
                     
                      <div class="control-group <?php echo !empty($titleError)?'error':'';?>">
                        <label class="control-label">Cím</label>
                        
                        <div class="controls">
                            <input name="title" type="text"  placeholder="title" value="<?php echo !empty($title)?$title:'';?>">
                            <?php if (!empty($titleError)): ?>
                                <span class="help-inline"><?php echo $titleError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                     
                      <div class="control-group <?php echo !empty($contentError)?'error':'';?>">
                        <label class="control-label">Tartalom</label>
                        <div class="controls">
                            <textarea id="input" name="content" type="text"  placeholder="content">
                            <?php if (!empty($contentError)): ?>
                                <span class="help-inline"><?php echo $contentError;?></span>
                            <?php endif;?>
                            <?php echo !empty($content)?$content:'';?>
                            </textarea>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button id="btn" type="submit" class="btn btn-success">Mentés</button>
                          <a class="btn" id="btn" href="adminarea.php">Vissza</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
    </div>
   
  </body>
</html>