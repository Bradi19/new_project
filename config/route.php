<?php
use Server\Classes\Router as router;


router::route('/', array('Client\Classes\Home', 'hi'));