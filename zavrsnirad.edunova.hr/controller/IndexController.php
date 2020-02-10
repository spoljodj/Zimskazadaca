<?php

class IndexController extends Controller
{

    public function prijava()
    {
        $this->view->render('prijava',[
            'poruka'=>'Unesite pristupne podatke',
            'email'=>''
        ]);
    }

    public function autorizacija()
    {
        if(!isset($_POST['email']) || 
        !isset($_POST['lozinka'])){
            $this->view->render('prijava',[
                'poruka'=>'Nisu postavljeni pristupni podaci',
                'email' =>''
            ]);
            return;
        }

        if(trim($_POST['email'])==='' || 
        trim($_POST['lozinka'])===''){
            $this->view->render('prijava',[
                'poruka'=>'Pristupni podaci obavezno',
                'email'=>$_POST['email']
            ]);
            return;
        }
    $veza = DB::getInstanca();
    $izraz = $veza->prepare('select * from user 
                      where usermail=:email;');
     $izraz->execute(['usermail'=>$_POST['email']]);
     $rezultat=$izraz->fetch();
        if($rezultat==null){
            $this->view->render('prijava',[
                'poruka'=>'Ne postojeći korisnik',
                'email'=>$_POST['email']
            ]);
            return;
        }
        if(!password_verify($_POST['lozinka'],$rezultat->lozinka)){
            $this->view->render('prijava',[
                'poruka'=>'Neispravna kombinacija email i lozinka',
                'email'=>$_POST['email']
            ]);
            return;
        }
        unset($rezultat->lozinka);
        $_SESSION['user']=$rezultat;
    }                
    public function odjava()
    {
        unset($_SESSION['user']);
        session_destroy();
        $this->index();
    }


    public function index()
    {
     $poruka='hello iz kontrolera';
     $kod=22;

    
     $this->view->render('pocetna',[
         'p'=>$poruka,
         'k'=>$kod]
     );


    }
    public function test()
    {
     //echo password_hash('caa',PASSWORD_BCRYPT);
      
    } 
}