<?php

// framework/hello.ph

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$name = $request->get('name', 'Default');

$template = $twig->render('index.html.twig', ['name' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8')]);

$response->setContent($template);

$response->send();