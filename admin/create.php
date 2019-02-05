<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
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

<?php
    require 'db/database.php';
    if ( !empty($_POST)) {

        // keep track validation errors

            $titleError = null;
            $contenteError = null;

        // keep track post values

            $title = $_POST['title'];
            $content = $_POST['content'];

        // validate input

            $valid = true;

                if (empty($title)) {

                    $nameError = 'Írd be a címet!';
                    $valid = false;
                }


                if (empty($content)) {
                    $contentError = 'Írd be a szöveget!';
                    $valid = false;
                }

        // insert data

        if ($valid) {

            $pdo = Database::connect();

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = mysql_real_escape_string("INSERT INTO cikkek (title,content,date) values(?, ?, NOW())");

            $q = $pdo->prepare($sql);

            $q->execute(array($title,$content));

            Database::disconnect();

            header("Location: adminarea.php");
        }
    }
?>


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
                        <h3>Új Cikk</h3>
                    </div>

                    <form class="form-horizontal" action="create.php" method="post">

                      <div class="control-group <?php echo !empty($titleError)?'error':'';?>">
                        <label class="control-label">Cím</label>
                        <div class="controls">
                            <input  name="title" type="text"  placeholder="Írj be címet!" value="<?php echo !empty($title)?$title:'';?>">
                            <?php if (!empty($titleError)): ?>
                                <span class="help-inline"><?php echo $titleError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>

                  

                    <div class="control-group <?php echo !empty($contentError)?'error':'';?>">

                        <label class="control-label">Tartalom</label>

                        <div class="controls">

                        <textarea name="content" type="text"  placeholder="Mobile Number" value="<?php echo !empty($content)?$content:'';?>">
                            <?php if (!empty($contentError)): ?>
                            <span class="help-inline"><?php echo $contentError;?></span>
                        <?php endif;?>
                        </textarea>
                        </div>

                    </div>
                        <div class="form-actions">
                              <button type="submit" id="btn" class="btn btn-success">Publikálás</button>
                              <a id="btn" class="btn" href="adminarea.php">Vissza</a>
                        </div>

                    </form>
                </div>
        </div> 
    </div>
</body>

</html>