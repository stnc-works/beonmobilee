<?php
/**
 * Application entry point
https://magento.stackexchange.com/questions/101932/fail-to-import-product-with-product-images-at-magento-2
 **/

include('app/bootstrap.php');
use \Magento\Framework\App\Bootstrap;
    $bootstraps = Bootstrap::create(BP, $_SERVER);
    $object_Manager = $bootstraps->getObjectManager();

    $app_state = $object_Manager->get('\Magento\Framework\App\State');
    $app_state->setAreaCode('frontend');

// Instance of object manager
$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); 
/*Remove Images From Product*/
$productId = 470; // Id of product
$product = $objectManager->create('Magento\Catalog\Model\Product')->load($productId);
$productRepository = $objectManager->create('Magento\Catalog\Api\ProductRepositoryInterface');
$existingMediaGalleryEntries = $product->getMediaGalleryEntries();
foreach ($existingMediaGalleryEntries as $key => $entry) {
    unset($existingMediaGalleryEntries[$key]);
}
$product->setMediaGalleryEntries($existingMediaGalleryEntries);
$productRepository->save($product);
/*Add Images To The Product*/
$imagePath = "sample.png"; // path of the image
$product->addImageToMediaGallery($imagePath, array('image', 'small_image', 'thumbnail'), false, false);
$product->save();
