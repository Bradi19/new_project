<?php
use Server\Classes\Router as router;


router::route('/', array('Client\Classes\Home', 'home'));
router::route('/index.php/joker', array('Client\Classes\Home', 'products'));