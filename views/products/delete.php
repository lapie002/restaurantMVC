<!DOCTYPE html>
<html lang="en">
 
<?php //include './views/pages/head.php';?> 
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    
<body>
    
<?php include './views/pages/leftsidenav.php';?>
<?php include './views/pages/header.php';?>  
    
  
      
    
<div id="wrapper">
    

        <div id="page-wrapper">

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                               <h2 class="page-header">
                                    <div class="alert alert-success">
                                        <strong>Message:</strong> Le produit a bien ete efface de la base de donne.
                                    </div>
                                </h2>
                            </div>
                        </div>
                       

                        <div class="row">
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-6">
                                 <h4 class="">
                                    retour vers la page des produits
                                </h4>
                                <a href="http://localhost/ProjetMVC/index.php?controller=products&action=index"><button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-12">
                            </div>
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->

 </div>
    <!-- /#wrapper --> 
</body>  

<?php //include './views/footer.php';?>
<!-- jQuery -->
<script src="./js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./js/bootstrap.min.js"></script>

</html>