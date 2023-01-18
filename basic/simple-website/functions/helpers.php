<?php

function dd($content)
{
    echo "<pre>";
    var_dump($content);
    echo "</pre>";
    exit;
}

function excerpt($content, $limit = 250)
{
    if (strlen($content) < $limit) {
        return $content; // early return
    }

    $new = wordwrap($content, $limit - 1);
    $new = explode("\n", $new);

    $new = $new[0] . '...';

    return $new;
}
