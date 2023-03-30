<?php
require_once 'User.php';
require_once 'Product.php';

$user = new UserName('Ivan', 23);
$ring = new Product('Ring', 500);

$cross = new Product('Cross', 350);

$component1 = new Product('Chain', 400, [$cross, $ring]);
$user->getCart()->addProduct($component1, 1);

print_r($user->getCart()->getComponents());