<!DOCTYPE html>
<html lang="en">

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
    <![endif] -->
    
    <!-- mon script de validation du formulaire -->
    <!-- <script src="./js/validation.js"></script> -->
<script type="text/javascript">
    
    /* soit on met dans des variable soit on recup avec un id: document.getElementById, soit avec le name: document.myForm.title.focus();  
    var title = document.getElementById('title').value;
    var description = document.getElementById('description').value;
    var price = document.getElementById('description').value;
    var productDate = document.getElementById('description').value;
     */
        
    function validate()
    {
         if( document.getElementById('title').value == "" )
         {
            alert( "Please provide a title for the product!" );
            document.myForm.title.focus();
            return false;
         }

         if( document.getElementById('description').value == "" )
         {
            alert( "Please provide a product description!" );
            document.myForm.description.focus();
            return false;
         }

         if( (!/^[0-9]+$/.test(document.getElementById('price').value)) )
         {
             alert("Please only enter numeric characters only for a product price! (Allowed input:0-9)");
             document.myForm.price.focus();
             return false;
         }

         return(true);

    }
    
</script>
    
</head>
    
<body>
    

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="http://localhost/ProjetMVC/index.php?controller=products&action=index" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Products<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="#">Liste des Produits</a>
                </li>
                <li>
                    <a href="#">Ajouter Produit</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
   
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/ProjetMVC/index.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $first_name2 . ' ' . $last_name; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $first_name . ' ' . $last_name; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $first_name . ' ' . $last_name;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
<!-- /.navbar-collapse -->

</nav>
    
    <div id="wrapper">
        
                <div id="page-wrapper">

                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        Formulaire d'ajout d'un Produit avec validation en JS
                                    </h1>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-lg-6">
                                   
                                    <form action="" name="myForm" onsubmit="return validate();">
                                        
                                        <input type="hidden" name="controller" value="products">
                                        <input type="hidden" name="action" value="add">
                                        
                                        <div class="form-group">
                                        <label>le titre</label>
                                        <input class="form-control" type="text" name="title" id="title" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                                        </div>

                                        <div class="form-group">
                                        <label>le prix</label>
                                        <input class="form-control" type="text" name="price" id="price" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label>la date</label>
                                            <input class="form-control" type="date" name="productDate" id="productDate" value="">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>    

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

<!-- jQuery -->
<script src="./js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./js/bootstrap.min.js"></script>

</html>   