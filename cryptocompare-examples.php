<html><body>
<?php
/**
 * CryptoCompare-PHP
 * A PHP API wrapper for CryptoCompare's API
 * 
 * Created by Ian Manseau
 * Donations Greatly Appreciated
 * Bitcoin:     3Hz1tsvPgfbkFowC91zmwi1ajnJaWzRu61
 * Litecoin:    MBVV27GzkayjoavX629go1pxMa2cVeUbpr
 * Ether:       0x47B40D2eDbEb33B19182709fE20DdcCCB0c18622
 * 
 * Licensed Under Creative Commons
 * Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)
 * 
 * You are free to:
 *  Share — copy and redistribute the material in any medium or format
 *  Adapt — remix, transform, and build upon the material for any purpose, even 
 *  commercially.
 * 
 * Under the following terms:
 *  Attribution — You must give appropriate credit, provide a link to the 
 *  license, and indicate if changes were made. You may do so in any reasonable 
 *  manner, but not in any way that suggests the licensor endorses you or your 
 *  use.
 *  ShareAlike — If you remix, transform, or build upon the material, you must 
 *  distribute your contributions under the same license as the original.
 *  No additional restrictions — You may not apply legal terms or technological 
 *  measures that legally restrict others from doing anything the license 
 *  permits.
 * 
 * Notices:
 *  You do not have to comply with the license for elements of the material in 
 *  the public domain or where your use is permitted by an applicable exception 
 *  or limitation.
 *  No warranties are given. The license may not give you all of the permissions 
 *  necessary for your intended use. For example, other rights such as publicity, 
 *  privacy, or moral rights may limit how you use the material.
 */
include('cryptocompare.php');

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-coinlist-">coinlist</a></h3>';
$obj = new CryptoCompare();
$results = $obj->coinlist();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-price-">price</a></h3>';
$obj = new CryptoCompare();
$results = $obj->price('BTC','USD');
echo '<textarea cols="150" rows="5" style="overflow:auto;">';
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-price-">pricemulti</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="16" style="overflow:auto;">';
$results = $obj->pricemulti('ETH,LTC','BTC,USD');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-price-">pricemultifull</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->pricemultifull('ETH,LTC','BTC,USD');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-price-">generateAvg</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->generateAvg('ETH','USD');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-price-">dayAvg</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="11" style="overflow:auto;">';
$results = $obj->dayAvg('LTC','USD');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-pricehistorical-">pricehistorical</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="9" style="overflow:auto;">';
$ts = strtotime('2016-01-05 11:34:22');
$results = $obj->pricehistorical('BTC','USD',$ts);
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-coinsnapshot-">coinsnapshot</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->coinsnapshot('BTC','USD');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-coinsnapshotfullbyid-">coinsnapshotfullbyid</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->coinsnapshotfullbyid('1182');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-socialstats-">socialstats</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->socialstats('1182');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-histominute-">histominute</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->histominute('BTC','USD','20');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-histohour-">histohour</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->histohour('BTC','USD','20');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-histoday-">histoday</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->histoday('BTC','USD','20');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-miningequipment-">miningequipment</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->miningequipment();
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-toppairs-">toppairs</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->toppairs('BTC','10');
print_r($results);
echo '</textarea>';
?>
</body>
</html>