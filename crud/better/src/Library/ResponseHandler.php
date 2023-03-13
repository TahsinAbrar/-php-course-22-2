<?php

namespace Autobots\Blog\Library;

class ResponseHandler
{
    public static function renderView(string $view, array $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        include_once view_path() . "$view.view.php";
    }
}
