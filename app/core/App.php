<?php
class App
{
    private function splitURL()
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", $URL);
        return $URL;
    }
    public function loadController()
    {
        $URL = $this->splitURL();

        $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";
        if (file_exists($filename)) {
            require_once $filename;
        } else {
            $filename = "../app/controllers/_404.php";

            require_once $filename;
        }
    }
}

