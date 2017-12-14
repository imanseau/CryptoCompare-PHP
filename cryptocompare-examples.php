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
 * CryptoCompare-PHP is an API wrapper to access data from CryptoCompare.com
 * within a PHP application.
 * Copyright (C) 2017  Ian Corbitt Manseau
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
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

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-price-">generateavg</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="20" style="overflow:auto;">';
$results = $obj->generateavg('ETH','USD');
print_r($results);
echo '</textarea>';

echo '<H3><a href="https://www.cryptocompare.com/api/#-api-data-price-">dayavg</a></h3>';
$obj = new CryptoCompare();
echo '<textarea cols="150" rows="11" style="overflow:auto;">';
$results = $obj->dayavg('LTC','USD');
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
