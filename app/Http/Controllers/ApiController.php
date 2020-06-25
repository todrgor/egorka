<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction()
    {
      return view('index', ['index' => (new ArticleController()) -> show()]);  
    }
    
    public function testAction()
    {
      return 'test';  
    }
    
    public function korzinaAction()
    {
      return view('korzina');  
    }
    
    public function nastroykiAction()
    {
      return view('nastroyki');  
    }
    
    public function poiskAction()
    {
      return view('poisk');  
    }
    
    public function poleznoeAction()
    {
      return view('poleznoe');  
    }
    public function productuAction()
    {
      return view('productu');  
    }
    
    public function pro_nasAction()
    {
      return view('pro nas');  
    }
    
    public function pro_nas_konstituciaAction()
    {
      return view('pro nas-konstitucia');  
    }
    
    public function pro_nas_sostavAction()
    {
      return view('pro nas-sostav');  
    }
    
    public function pro_nas_svyazAction()
    {
      return view('pro nas-svyaz');  
    }
    
    public function rabotuAction()
    {
      return view('rabotu', ['rabotu' => (new ArticleController()) -> show()]);  
    }
    
    public function registraciyaAction()
    {
      return view('registraciya');  
    }
    
    public function vhodAction()
    {
      return view('vhod');  
    }
    
    public function zabul_parolAction()
    {
      return view('zabul-parol');  
    }
    
    public function zakazatAction()
    {
      return view('zakazat');  
    }
    
    public function obuchenieAction()
    {
      return view('obuchenie');  
    }
    
    
}
