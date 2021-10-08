<?php 
namespace Client\Classes;

use Includes\Classes\Controller;

class Home extends Controller {
    public function __construct(){

    }
    public function hi(){
        $argument = [
            'title' => 'Home',
            'arger' => [1,2,3]
    ];
        echo self::render('home.php', $argument );
    }
}