<?php

include_once 'abstract/paymentType.abs.php';
include_once 'classes/BuyProduct.class.php';

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();
