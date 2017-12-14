# CryptoCompare-PHP
A PHP API wrapper for CryptoCompare's API

## Instalation
Dowload/Copy cryptocompare.php into your application where you store your include files or API wrappers. Be sure to add `include('cryptocompare.php');` into any file that will make use of the warapper.

Optional:Dowload/Copy cryptocompare-examples.php into the same directory. This file when viewed will display all the API responses to help you write your code.

## Function Call
Below is an example of the code to call a function
```
$obj = new CryptoCompare();
$results = $obj->coinlist();
```

## Forking
Please feel free to fork and modify this wrapper for your own use. If your fork includes beneficial upgrades to all please do a pull request so your upgrade can be included for all.

## To-Do
* Add additional optional paramaters to API calls
* Improve documentaion on each function and how to use it

## Donations
Donations for my work are always welcome and greatly appreciated, feel free to send your thanks to any of the addresses below.

Bitcoin:     3Hz1tsvPgfbkFowC91zmwi1ajnJaWzRu61

Litecoin:    MBVV27GzkayjoavX629go1pxMa2cVeUbpr

Ether:       0x47B40D2eDbEb33B19182709fE20DdcCCB0c18622

## GNU General Public License
CryptoCompare-PHP is an API wrapper to access data from CryptoCompare.com within a PHP application.
Copyright (C) 2017  Ian Corbitt Manseau

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.
