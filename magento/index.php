<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

if (version_compare(phpversion(), '5.3.0', '<')===true) {
    echo  '<div style="font:12px/1.35em arial, helvetica, sans-serif;">
<div style="margin:0 0 25px 0; border-bottom:1px solid #ccc;">
<h3 style="margin:0; font-size:1.7em; font-weight:normal; text-transform:none; text-align:left; color:#2f2f2f;">
Whoops, it looks like you have an invalid PHP version.</h3></div><p>Magento supports PHP 5.3.0 or newer.
<a href="http://www.magentocommerce.com/install" target="">Find out</a> how to install</a>
 Magento using PHP-CGI as a work-around.</p></div>';
    exit;
}

/**
 * Error reporting
 */
error_reporting(E_ALL | E_STRICT);

/**
 * Compilation includes configuration file
 */
define('MAGENTO_ROOT', getcwd());

$compilerConfig = MAGENTO_ROOT . '/includes/config.php';
if (file_exists($compilerConfig)) {
    include $compilerConfig;
}

$mageFilename = MAGENTO_ROOT . '/app/Mage.php';
$maintenanceFile = 'maintenance.flag';

if (!file_exists($mageFilename)) {
    if (is_dir('downloader')) {
        header("Location: downloader");
    } else {
        echo $mageFilename." was not found";
    }
    exit;
}

if (file_exists($maintenanceFile)) {
    include_once dirname(__FILE__) . '/errors/503.php';
    exit;
}

require_once $mageFilename;

#Varien_Profiler::enable();

if (isset($_SERVER['MAGE_IS_DEVELOPER_MODE'])) {
    Mage::setIsDeveloperMode(true);
}

#ini_set('display_errors', 1);

umask(0);

/* Store or website code */
$mageRunCode = isset($_SERVER['MAGE_RUN_CODE']) ? $_SERVER['MAGE_RUN_CODE'] : '';

/* Run store or run website */
$mageRunType = isset($_SERVER['MAGE_RUN_TYPE']) ? $_SERVER['MAGE_RUN_TYPE'] : 'store';

Mage::run($mageRunCode, $mageRunType);



#$text =  fread($file, filesize("./sku3.csv"));

$text = fopen("./productos_nrk.csv", "r");

if ($text)
{
    $i = 1;
    //пока читаются строки
    while (($line = fgets($text)) !== false)
{
        //если в строке только знач-я 
        if (strlen($line) == 2)
            continue;

        $array[$i] = explode(",", $line);
        $i++;        

        //пока только 10 строк
        if($i == 10) break;
}

    fclose($text);

}
else{echo "Невозмоно открыть файл";
} 


$search = "AGRUPACIONES_WEB";
$replace = "\"4\"";

//для поиска позиции категории 
foreach ($array[1] as $key => $val)
{
    if ($val == $search)
    {
        $position = $key;
        break;
    }
}

#echo $array[4][$position];

//for parent category
function add_parent($name)
    {
        $category = Mage::getModel('catalog/category');
         //родит-я т.к 1
        $parentId = 1;
        $storeId  = 0;

        $category->setStoreId($storeId);
        $category->setName($name);
        $category->setUrlKey($name);
        $category->setIsActive(1);
        $category->setDisplayMode('PRODUCTS');
        $parentCategory = Mage::getModel('catalog/category')->load($parentId);
        $category->setPath($parentCategory->getPath());
        //сохранить категории 
        $category->save();
         
        //вернёт id категории кот-ю добавил(возвращ-ся из бд)
        return $category->getId();
    }
  

 //for child category
function add_child($name, $parentId)
    {
      
        
        $storeId  = 0;
        $category = Mage::getModel('catalog/category');

        $category->setStoreId($storeId);
        $category->setName($name);
        $category->setUrlKey($name);
        $category->setIsActive(1);
        $category->setDisplayMode('PRODUCTS');
        $parentCategory = Mage::getModel('catalog/category')->load($parentId);
        $category->setPath($parentCategory->getPath());
        $category->save();
    }    


//the parser & adder itself
$categories = new Array();

for ($i=5; $i<7; $i++)

{
    $j=0;
    $z=0;
    $found = false;
    do 
     { 
        
        //TODO add repeating cat validation
        $cat = explode('/', $array[$i][$position+$j]);
       # echo $array[$i][$position+$j];
        #var_dump($cat);
        #echo (strpos("\"", $cat[1]));
        #echo "<br />";


        echo $j;
        //поиск чего-либо в строке
        if (strpos("\"", $cat[1]) === false)
        {

            echo $cat[1];
            $j++;
            if(isset($categories[$cat[0]]))
            {
                if(isset($categories[$cat[1]]))
                {
                  continue;
                }
                else
                {
                  add_child($cat[1], add_parent($cat[0]));   
                }

            }         
            else
              {
                $categories[$cat][0] =  
              }            
            
        }        
        else 
        {
            add_child($cat[1], add_parent($cat[0]));
            $found = true;
        }

        $z++;
     }
    // while($z < 3);
    while ($found === false);
    

}