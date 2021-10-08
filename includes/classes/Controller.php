<?php
namespace Includes\Classes;

class Controller implements ControllerContent {
    public function render($path, array $args)
    {
        extract($args, EXTR_PREFIX_SAME, "gols");
        ob_start();
        include("./client/template/" . $path);
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }
}