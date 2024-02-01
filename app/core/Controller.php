class Controller {
    public function view($name){
        $filename="../app/controllers/".$URL[0].".view.php";
        if(file_exists( $filename)){
            require_once $filename;
        }else{
            $filename="../app/views/404.view.php";
           
                require_once $filename;
        }
    }
}