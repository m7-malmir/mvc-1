<?php

class Login 
{
    use Controller;
    public function index()
    {
        $data=[];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User;
            $arr['email']=$_POST['email'];
            $row=$user->first($arr);
                //redirect('signup');
            if($row){
                if($row->password === $_POST['password']) {
                    $_SESSION['USER'] = $row;
                    redirect('home');
                }
            }
            $user->errors='wrong email or pass';
            $data['errors'] = $user->errors;
        }
        $this->view('login',$data);
    }
    // public function edit($a = '', $b = '', $c = '')
    // {
    //     show('from the edit function');
    //     $this->view('home');
    // }
}