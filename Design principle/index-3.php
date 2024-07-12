<?php

// bu yerda shunday logikaki, bizda productlar bor, ularninig attribulari har xil boladi
// 1da bo'lgan narsa 2nchisida bolmasligi mumkun, shuning uchun biz hamma productda boladigan narsalarni
// {Product} classga qoydim, song {ProductData} class ochib unga tegishli qilib har xil classlar ichida attributelar yaratildi
//  Product Classi ProductDataga tegishli biron bir productni oladi va selling productga berib yuboradi.
//being ready for changes

abstract class ProductData
{
}

class Cycle extends ProductData
{
    public int $balloon;
    public int $seat;
}

class Ship extends ProductData
{
    public int $rooms;
    public string $size;
}

class Glass extends ProductData
{
    public string $size;
    public string $type;
}

//data will come to this class
class Product
{
    public int $price;
    public string $color;
    public ProductData $productData;
}

// bu zanjir
class SellingProduct
{
    public function selling(Product $product): Product
    {
        return $product;
    }
}

// collected product attributes
$newProduct = new Product();
$newProduct->price = 20000;
$newProduct->color = 'yellow';
$newProduct->productData = new Cycle();
$newProduct->productData->balloon = 2;
$newProduct->productData->seat = 2;

$selling = new SellingProduct();
$sold = $selling->selling($newProduct);
var_dump($sold);
