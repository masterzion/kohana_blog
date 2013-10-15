<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Plinga Blog</title>
    <!-- this is how, you you can add a css file -->
    <?php echo HTML::style("public/template.css"); ?>
   
    
    
    
    <?php echo HTML::script("public/kcfinder/js/jquery.js"); ?>
    <?php echo HTML::script("public/kcfinder/js/jquery.drag.js"); ?>
    <?php echo HTML::script("public/kcfinder/js/jquery.rightClick.js"); ?>
    <?php echo HTML::script("public/kcfinder/js/browser/joiner.php"); ?>
    
    <?php echo HTML::script("public/ckeditor/ckeditor.js"); ?>
    
  
    
    
</head>
 
<body>
<div id="wrapper">
    <!-- Header for the site -->
    <div style="float: left; padding: 30px;"><?php echo HTML::image("public/logo.png") ?> </div>
    
    <div id="header" style="padding-left: -150px;"><h1><center>Jairo M - Plinga Blog</center></h1></div>
     
    <!-- Menu for the site -->
    <div id="navlist">
        <ul>
            <li><?php echo HTML::anchor("", "Home"); ?></li>
            <li><?php echo HTML::anchor("article/edit", "Insert"); ?></li>
        </ul>
    </div>
     
     
     
    <!-- here we load all content -->
    <div id="content">
        <?php echo $content; ?>
    </div>
     
    <!-- no footer added -->
</div>
</body>
</html>