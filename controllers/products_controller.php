<?php

class ProductsController{
    
    public function index()
    {
        $first_name = 'Bruno';
        $last_name  = 'Lapierre';
        
        $products = Product::all();
        
        require_once('./views/products/index.php');
    }
    
    public function show()
    {    
        $first_name = 'Bruno';
        $last_name  = 'Lapierre';
        
        if(!isset($_GET['id']))
        { 
            return call('pages','error');
        }
        $product = Product::find($_GET['id']);        
        
        require_once('./views/products/show.php');
    }
    
    public function delete()
    {
        $first_name = 'Bruno';
        $last_name  = 'Lapierre';
        
        if(!isset($_GET['id']))
        {
            return call('pages','error');
        }
        
        $req = Product::delete($_GET['id']);
        
        /* je souhaite retourner sur la page index.php */
        if($req !== false)
        {
            // afficher vue si success
            require_once('./views/products/delete.php');
            
        }
        else
        { // afficher vue du cas d'erreur
            require_once('./views/products/deleteError.php');
        }
    }
    
    public function update()
    {
        $first_name = 'Bruno';
        $last_name  = 'Lapierre';
        
        if(!isset($_GET['id']))
        {
            return call('pages','error');
        }
        
        //update($id,$title,$text,$price,$productDate)
        $arr = Product::update($_GET['id'],$_GET['title'],$_GET['text'],$_GET['price'],$_GET['productDate']);
        //require_once('./views/products/show.php');
        
        if($arr !== false)
        {
            // afficher vue si success
            require_once('./views/products/update.php');
        }
        else
        { // afficher vue du cas d'erreur
            require_once('./views/products/updateError.php');
        }
        
    }
    
    public function add()
    {
        $first_name = 'Bruno';
        $last_name  = 'Lapierre';
        
        $arr = Product::add($_GET['title'],$_GET['text'],$_GET['price'],$_GET['productDate']);
        //require_once('./views/products/add.php');
        
        if($arr !== false)
        {
            // afficher vue si success
            require_once('./views/products/addSuccess.php');
        }
        else
        { // afficher vue du cas d'erreur
            require_once('./views/products/addError.php');
        }
        
    }
    
}
