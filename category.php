<?php
$parentId = '2';

$category = new Mage_Catalog_Model_Category();
$category->setName('check');
$category->setUrlKey('new-category');
$category->setIsActive(1);
$category->setDisplayMode('PRODUCTS');
$category->setIsAnchor(0);

$parentCategory = Mage::getModel('catalog/category')->load($parentId);
$category->setPath($parentCategory->getPath());              

$category->save();
unset($category);


?>