<?php 
namespace Client\Classes;

use Includes\Classes\Controller;

class Home extends Controller {
    public function __construct(){

    }
    public function home(){
        $argument = [
            'title' => 'Home',
            'arger' => [1,2,3]
    ];
        echo self::render('home', $argument );
    }
    public function products()
    {
        $argument = [
            'title' => 'HomeP',
            'arger' => [1,2,3]
    ];
        echo self::render('home', $argument );
    }
}