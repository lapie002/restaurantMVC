<?php

  function call($controller, $action){
    
    require_once('./controllers/' . $controller . '_controller.php');
    
    switch($controller)
    {
        
      case 'pages':
        $controller = new PagesController();
      break;
      //on porra rajouter des case eventuellement 
  
      case 'products':
          
          require_once('./models/Product.php'); 
          $controller = new ProductsController();
         // $controllerChild = $controller ProductsController::show($_GET['id']);
          /* on require le model */
          
      break;
    }
    
    //var_dump($controller);
    
    // call the action
    $controller->{$action}();
    
  }
  

  $controllers = array('pages' => ['home', 'error','form','formJS'],
                       'products' => ['index', 'add', 'show','delete','update']);

  //'products' => ['index', 'show','delete', 'update', 'add']
  // check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the pages controller
//  echo "<br>controller : *".$controller.'*';  
//  echo "<pre>";
//  print_r($controllers);
//  echo "</pre>";
//  echo "<br><hr><br>";
  if(array_key_exists($controller, $controllers))
  {
    // Probleme soit l un soit l autre in_array($action, $controllers[$controller]) or array_search($action, $controllers[$controller])   
    if(in_array($action, $controllers[$controller])) 
    {
      //die("on RENTRE BIEN CONTROLLER : *".$controller.'*et*'.$action);  
        
//      if($action=='delete')
//      {
//          $action = 'index';
//          call($controller, $action);
//     }
//      else
//      {
          call($controller, $action);
//      }
    }
    else 
    {
       //die("on RENTRE PAAAASSSSS BIEN CONTROLLER : *".$controller.'*et ACTION*'.$action);
//        die("id : ".$_GET['id']);
      call('pages', 'error');
    }
  } 
  else 
  {
    call('pages', 'error');
  }
  
?>