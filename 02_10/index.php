<?php
    require_once './lib/autoload.php';


    /**
     * Criação do HTML
     */

    $html = new Html('pt-br');
    $head = new Head();
    $body = new Body();


    /**
     * Parte relacionada ao Head
     */

    $charset = new Meta([
        'charset' => 'utf-8'
    ]);
    
    $viewport = new Meta([
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1'
    ]);
    
    $linkCss = new LinkHead([
        'href'        => 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css',
        'rel'         => 'stylesheet',
        'integrity'   => 'sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl',
        'crossorigin' => 'anonymous'
    ]);

    $title = new Title('Hello, world!');

    $head->addElementToHead($charset);
    $head->addElementToHead($viewport);
    $head->addElementToHead($linkCss);
    $head->addElementToHead($title);


    /**
     * Parte relacionada ao Body
     */

    $titulo1 = new H1('Hello, world!');

    $script1 = new Script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [
        'integrity'   => 'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0',
        'crossorigin' => 'anonymous',
    ]);

    $body->addElementToBody($titulo1);
    $body->addElementToBody($script1);


    $html->addElementToHtml($head);
    $html->addElementToHtml($body);

    echo $html;


