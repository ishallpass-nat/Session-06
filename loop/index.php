<?php

    $transaction = [1000000, 
    5000000, 30000000,
    10000000];
    $total = 0;

    foreach ($transaction as $data)
    {
        $total = $total  + $data;

    }

echo $total ;
echo '<hr/>' ;

$products = ["mouse" , "ram" ,
 "laptop 13 inch" , "harddisk"] ;
    foreach ($products as $product)
        echo $product;
?>