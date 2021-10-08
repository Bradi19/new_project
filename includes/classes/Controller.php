<?php
namespace Includes\Classes;

class Controller implements ControllerContent {
    public function render($path, array $args)
    {
        $ert = ".php";
        extract($args, EXTR_PREFIX_SAME, "gols");
        ob_start();
        require_once("./client/template/" . $path . $ert);
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }
}