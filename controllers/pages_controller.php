<?php

class PagesController {
    
    public function home() 
    {
      $first_name = 'Bruno';
      $last_name  = 'Lapierre';
      require_once('./views/pages/home.php');
    }
    
    public function form() 
    {
      $first_name = 'Bruno';
      $last_name  = 'Lapierre';
      require_once('./views/pages/form.php');
    }
    
    public function formJS() 
    {
      $first_name = 'Bruno';
      $last_name  = 'Lapierre';
      require_once('./views/pages/formJS.php');
    }

    public function error() 
    {
      $first_name = 'Bruno';
      $last_name  = 'Lapierre';
      require_once('./views/pages/error.php');
    }
    
    
    
}
