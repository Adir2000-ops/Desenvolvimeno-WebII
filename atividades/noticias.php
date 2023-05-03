<?php
    require ('autoload.php');
    $meta = new Meta (['charset' => 'UTF-8', 'viewport' => 'width=device-width, initial-scale=1']);
    $html = new Html ('pt-br');
    $title = new Title ('Noticias WEB II');
    $head = new Head ();
    $head->addProp($meta, $title, new LinkCss("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css","stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl","anonymous"));
    echo $head;


?>