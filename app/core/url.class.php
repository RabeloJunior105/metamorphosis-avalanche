<?php
// Made by Guilherme Girão (https://github.com/guilhermegirao)

class URL extends Title
{

    private $link = '';
    private $dir  = 'app/view/';

    public function __construct()
    {
        $get = 'page';

        if (empty($_GET[$get])) $_GET[$get] = 'home';

        $this->link = $_GET[$get];

        if (!file_exists($this->dir . $this->link . '.view.php')) $this->link = 'error';
    }

    public function page()
    {
        global $db, $url, $components;

        if (empty($_SESSION['id'])) {
            $this->link = 'login';
        }

        include($this->dir . $this->link . '.view.php');
    }

    public function redirect($page)
    {
        echo '<script>window.location = "./' . $page . '"</script>';
    }

    public function title()
    {
        return $this->pageTitle($this->link);
    }

    public function active($page)
    {
        if ($this->link == $page) {
            return 'active';
        } else {
            return '';
        }
    }
}
