<?php

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

require_once __DIR__ . '/../src/products.html.twig';
$name = 'Wilder';
echo $twig->render('home.html.twig', ['products' => $products]);


