<?php
/**
 * Application entry point
 **/

include('importFunc.php');


use \Magento\Framework\App\Bootstrap;

include('app/bootstrap.php');


$url = 'beon_power.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$datas = json_decode($data); // decode the JSON feed

echo count ($datas);
//die;
$i = 0;
foreach ($datas as $data) {
    echo $i++;

// add bootstrap
    $bootstraps = Bootstrap::create(BP, $_SERVER);
    $object_Manager = $bootstraps->getObjectManager();

    $app_state = $object_Manager->get('\Magento\Framework\App\State');
    $app_state->setAreaCode('frontend');

// get date
    $today_date = date("m/d/Y");
    $added_date = date('m/d/Y', strtotime("+17 day"));

    $set_product = $object_Manager->create('\Magento\Catalog\Model\Product');

    $set_product->setWebsiteIds(array(1));
    $set_product->setAttributeSetId(10);
    $set_product->setTypeId('simple');
    $set_product->setCreatedAt(strtotime('now'));
    // time of product creation
   // $set_product->setName($data->name);
    $set_product->setName($data->name.' '.$data->material.' '.$data->color);
    // add Name of Product
    $set_product->setSku($data->barcode);
    $set_product->setSize();
    $set_product->setBrand(BrandControl($data->brand));//>-----
    $set_product->setBarcode($data->barcode);

    $set_product->setPorts(PortControl($data->ports));//>-----
    $set_product->setCapacity(CapacityControl($data->capacity));//>-----
    $set_product->setMaterial(MaterialControl($data->material));//>----
    $set_product->setIncludes(IncludesControl($data->includes));//>---- 39
//    $set_product->setCustomBlock2($data->custom_block_2);//>-----

    // add sku hear
//  $set_product->setWeight();
    // add weight of product
    $set_product->setStatus(1);
    $category_id = CategoryControl($data->categories);
    // add your catagory id
    $set_product->setCategoryIds($category_id);
    // Product Category
    $set_product->setTaxClassId(0);
    // type of tax class
    // (0 - none, 1 - default, 2 - taxable, 4 - shipping)
    $set_product->setVisibility(4);
    // catalog and search visibility
    $set_product->setColor(ColorControl($data->color));//>-----
//    $set_product->setManufacturer(ManufacturerControl($data->name1_manufactu));
//    $set_product->setType(TypeControl($data->type));//>-----


    $set_product->setNewsFromDate($today_date);
    // product set as new from
    $set_product->setNewsToDate($added_date);


    //--IMAGES ---//
/*
    // add image path hear
    $set_product->setImage('/images/' . $data->sku . '.png');
//    // add small image path hear
    $set_product->setSmallImage('/images/' . $data->sku . '.png');
//    // add Thumbnail image path hear
    $set_product->setThumbnail('/images/' . $data->sku . '.png');
*/


    // product set as new to
    $set_product->setCountryOfManufacture();
    // country of manufacture (2-letter country code)
    $set_product->setPrice(10);
    // price in form 100.99
    $set_product->setCost();

    $set_product->setbuy();
    // price in form 88.33


    // $set_product->setSpecialPrice(99.85);
    // special price in form 99.85
    //   $set_product->setSpecialFromDate('06/1/2016');
    // special price from (MM-DD-YYYY)
    //   $set_product->setSpecialToDate('06/30/2018');
    // special price to (MM-DD-YYYY)


    $set_product->setMsrpEnabled(1);
    // enable MAP
    $set_product->setMsrpDisplayActualPriceType(1);
    // display actual price
    // (1 - on gesture, 2 - in cart, 3 - before order confirmation, 4 - use config)
    $set_product->setMsrp(99.99);
    // Manufacturer's Suggested Retail Price
    $set_product->setMetaTitle($data->name);
    $set_product->setMetaKeyword($data->description);
    $set_product->setMetaDescription($data->description);
    $set_product->setDescription($data->description);
    $set_product->setShortDescription($data->description);
    $set_product->setStockData(
        array(
            'use_config_manage_stock' => 0,
            // checkbox for 'Use config settings'
            'manage_stock' => 1, // manage stock
            'min_sale_qty' => 1, // Shopping Cart Minimum Qty Allowed
            'max_sale_qty' => 2, // Shopping Cart Maximum Qty Allowed
            'is_in_stock' => 1, // Stock Availability of product
            'qty' => 999 // qty of product
        )
    );

    $set_product->save();
    // get id of product
    $get_product_id = $set_product->getId();
    echo "Upload simple product id :: " . $get_product_id . "\n";
//    echo '<img src="/images/' . $data->sku . '.png">';
}