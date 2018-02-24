<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <title>Task PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="/template/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="/template/css/charisma-app.css" rel="stylesheet">
    <link href='/template/css/jquery.noty.css' rel='stylesheet'>
    <link href='/template/css/noty_theme_default.css' rel='stylesheet'>
    <link href='/template/css/elfinder.min.css' rel='stylesheet'>
    <link href='/template/css/elfinder.theme.css' rel='stylesheet'>
    <link href='/template/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='/template/css/uploadify.css' rel='stylesheet'>
    <link href='/template/css/animate.min.css' rel='stylesheet'>

            <!-- The fav icon -->
    <link rel="shortcut icon" href="/template/img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-inner">
           <a class="navbar-brand" href="main.php" style="width: auto;"><span>Products</span></a>
           <form class="navbar-form navbar-right" method="post" action="">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="search"></div>
                <input type="submit" class="btn btn-default" name="submit_search" value="Search product">       
            </form>          
        </div>        
    </div>
    <ul class="nav nav-pills nav-stacked main-menu">
        <li><a class="ajax-link" href="?page=addProduct"><i class="glyphicon glyphicon-eye-open" style="margin-right: 10px;"></i><span>Add product</span></a></li>
        <li><a class="ajax-link" href="?page=editProduct"><i class="glyphicon glyphicon-edit" style="margin-right: 10px;"></i><span>Edit product</span></a></li>
    </ul>
<hr>   
<div class="ch-container">
    <div class="row">       
        <div id="content" class="col-lg-12 col-sm-12">            
            <div>
               <?php
                    if(isset($_GET['page'])){
                        include "controllers/".$_GET['page'].".php";
                    }else{
                        include "controllers/allProducts.php";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
   


   <!--  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

       
    </div> -->

    <footer class="row">
        
    </footer>

</div><!--/.fluid-container-->




</body>
</html>
