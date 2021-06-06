<?php

abstract class Controller {
    protected function render($view, $model = array()) {
        foreach ($model as $key => $value) {
            $$key = $value;
        }
        $viewFile = "views/" . $view . ".php";
        if (file_exists($viewFile))
        {
            ob_start();
            include_once $viewFile;
            return ob_get_clean();
        }
        else
        {
            http_response_code(500);
            return "Missing views file " . $viewFile;
        }
    }
}