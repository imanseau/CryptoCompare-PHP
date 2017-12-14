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
 
class CryptoCompare {
    public $uri_1 = 'https://www.cryptocompare.com/api/data/';
    public $uri_2 = 'https://min-api.cryptocompare.com/data/';
    
    function coinlist() {
        /**
         * Get general info for all the coins available on the website.
         */
        $this->path = 'coinlist/';
        $this->url = $this->uri_1 . $this->path;
        return $this->get();
    }
    
    function price($fsym, $tsyms, $e = 'BitTrex') {
        /**
         * Get the latest price for a list of one or more currencies. Really 
         * fast, 20-60 ms. Cached each 10 seconds.
         * fsym         From Symbol
         * tsyms        To Symbols, include multiple symbols
         * e            Name of exchange. Default: BitTrex
         */
        $this->fsym = $fsym;
        $this->tsyms = $tsyms;
        $this->e = $e;
        $this->path = 'price?';
        $this->url = $this->uri_2 . $this->path . 'fsym=' . $this->fsym . '&tsyms=' . $this->tsyms . '&e=' . $this->e;
        return $this->get();
    }
    
    function pricemulti($fsyms, $tsyms, $e = 'BitTrex') {
        /**
         * Get a matrix of currency prices.
         * fsyms        From Symbols, include multiple symbols
         * tsyms        To Symbols, include multiple symbols
         * e            Name of exchange. Default: BitTrex
         */
        $this->fsyms = $fsyms;
        $this->tsyms = $tsyms;
        $this->e = $e;
        $this->path = 'pricemulti?';
        $this->url = $this->uri_2 . $this->path . 'fsyms=' . $this->fsyms . '&tsyms=' . $this->tsyms . '&e=' . $this->e;
        return $this->get();
    }
    
    function pricemultifull($fsyms, $tsyms, $e = 'BitTrex') {
        /**
         * Get all the current trading info (price, vol, open, high, low etc) of 
         * any list of cryptocurrencies in any other currency that you need.If 
         * the crypto does not trade directly into the toSymbol requested, BTC 
         * will be used for conversion.
         * fsyms        From Symbols, include multiple symbols
         * tsyms        To Symbols, include multiple symbols
         * e            Name of exchange. Default: BitTrex
         */
        $this->fsyms = $fsyms;
        $this->tsyms = $tsyms;
        $this->e = $e;
        $this->path = 'pricemultifull?';
        $this->url = $this->uri_2 . $this->path . 'fsyms=' . $this->fsyms . '&tsyms=' . $this->tsyms . '&e=' . $this->e;
        return $this->get();
    }
    
    function generateavg($fsym, $tsym, $e = 'BitTrex') {
        /**
         * Compute the current trading info (price, vol, open, high, low etc) of
         * the requested pair as a volume weighted average based on the markets 
         * requested.
         * fsym         From Symbol
         * tsym         To Symbol
         * e            Name of exchange. Default: BitTrex
         */
        $this->fsym = $fsym;
        $this->tsym = $tsym;
        $this->e = $e;
        $this->path = 'generateavg?';
        $this->url = $this->uri_2 . $this->path . 'fsym=' . $this->fsym . '&tsym=' . $this->tsym . '&e=' . $this->e;
        return $this->get();
    }
    
    function dayavg($fsym, $tsym, $UTCHourDiff = '-5', $e = 'BitTrex') {
        /**
         * Get day average price. The values are based on hourly vwap data and 
         * the average can be calculated in different waysIt uses BTC conversion 
         * if data is not available because the coin is not trading in the 
         * specified currency.
         * fsym         From Symbol
         * tsym         To Symbols
         * e            Name of exchange. Default: BitTrex
         * UTCHourDiff  UTC Offset default -5 (EST)
         */
        $this->fsym = $fsym;
        $this->tsym = $tsym;
        $this->e = $e;
        $this->UTCHourDiff = $UTCHourDiff;
        $this->path = 'dayavg?';
        $this->url = $this->uri_2 . $this->path . 'fsym=' . $this->fsym . '&tsym=' . $this->tsym . '&e=' . $this->e . '&UTCHourDiff' . $this->UTCHourDiff;
        return $this->get();
    }
    
    function pricehistorical($fsym, $tsyms, $ts, $e = 'BitTrex') {
        /**
         * Get the price of any cryptocurrency in any other currency that you 
         * need at a given timestamp.
         * $fsym        From Symbol
         * $tsyms       To Symbols, include multiple
         * $ts          timestamp
         * $markets     Name of exchanges, include multiple
         */
        $this->fsym = $fsym;
        $this->tsyms = $tsyms;
        $this->ts = $ts;
        $this->e = $e;
        $this->path = 'pricehistorical?';
        $this->url = $this->uri_2 . $this->path . 'fsym=' . $this->fsym . '&tsyms=' . $this->tsyms . '&e=' . $this->e . '&ts' . $this->ts;
        return $this->get();
    }
    
    function coinsnapshot($fsym, $tsym) {
        /**
         * Get data for a currency pair. It returns general block explorer 
         * information, aggregated data and individual data for each exchange 
         * available.
         * Note: This api is getting abused and will be moved to a min-api path 
         * in the near future. Please try not to use it.
         * 
         * fsym         From Symbol
         * tsym         To Symbols
         */
        $this->fsym = $fsym;
        $this->tsym = $tsym;
        $this->path = 'coinsnapshot?';
        $this->url = $this->uri_1 . $this->path . 'fsym=' . $this->fsym . '&tsym=' . $this->tsym;
        return $this->get();
    }
    
    function coinsnapshotfullbyid($id) {
        /**
         * Get the general, subs (used to connect to the streamer and to figure 
         * out what exchanges we have data for and what are the exact coin pairs 
         * of the coin) and the aggregated prices for all pairs available.
         * id       The id of the coin you want data for
         */
        $this->id = $id;
        $this->path = 'coinsnapshotfullbyid?';
        $this->url = $this->uri_1 . $this->path . 'id=' . $this->id;
        return $this->get();
    }
    
    function socialstats($id) {
        /**
         * Get CryptoCompare website, Facebook, code repository, Twitter and 
         * Reddit data for coins. If called with the id of a cryptopian you just 
         * get data from our website that is available to the public.
         * id       The id of the coin you want data for
         */
        $this->id = $id;
        $this->path = 'socialstats?';
        $this->url = $this->uri_1 . $this->path . 'id=' . $this->id;
        return $this->get();
    }
    
    function histominute($fsym, $tsym, $limit, $e = 'BitTrex') {
        /**
         * Get open, high, low, close, volumefrom and volumeto from the each 
         * minute historical data. This data is only stored for 7 days, if you 
         * need more,use the hourly or daily path.
         * fsym         From Symbol
         * tsym         To Symbols
         * limit        Max 2000
         * e            Name of exchange. Default: BitTrex
         */
        $this->fsym = $fsym;
        $this->tsym = $tsym;
        $this->limit = $limit;
        $this->e = $e;
        $this->path = 'histominute?';
        $this->url = $this->uri_2 . $this->path . 'fsym=' . $this->fsym . '&tsym=' . $this->tsym . '&e=' . $this->e . '&limit=' . $this->limit;
        return $this->get();
    }
    
    function histohour($fsym, $tsym, $limit, $e = 'BitTrex') {
        /**
         * Get open, high, low, close, volumefrom and volumeto from the each 
         * hour historical data. It uses BTC conversion if data is not available 
         * because the coin is not trading in the specified currency.
         * fsym         From Symbol
         * tsym         To Symbols
         * limit        Max 2000
         * e            Name of exchange. Default: BitTrex
         */
        $this->fsym = $fsym;
        $this->tsym = $tsym;
        $this->limit = $limit;
        $this->e = $e;
        $this->path = 'histohour?';
        $this->url = $this->uri_2 . $this->path . 'fsym=' . $this->fsym . '&tsym=' . $this->tsym . '&e=' . $this->e . '&limit=' . $this->limit;
        return $this->get();
    }
    
    function histoday($fsym, $tsym, $limit, $e = 'BitTrex') {
        /**
         * Get open, high, low, close, volumefrom and volumeto daily historical 
         * data. The values are based on 00:00 GMT time
         * fsym         From Symbol
         * tsym         To Symbols
         * limit        Max 2000
         * e            Name of exchange. Default: BitTrex
         */
        $this->fsym = $fsym;
        $this->tsym = $tsym;
        $this->limit = $limit;
        $this->e = $e;
        $this->path = 'histoday?';
        $this->url = $this->uri_2 . $this->path . 'fsym=' . $this->fsym . '&tsym=' . $this->tsym . '&e=' . $this->e . '&limit=' . $this->limit;
        return $this->get();
    }
    
    function miningequipment() {
        /**
         * Used to get all the mining equipment available on the website. It 
         * returns an array of mining equipment objects
         */
        $this->path = 'miningequipment';
        $this->url = $this->uri_1 . $this->path;
        return $this->get();
    }
    
    function toppairs($fsym, $limit) {
        /**
         * Get top pairs by volume for a currency (always uses our aggregated 
         * data). The number of pairs you get is the minimum of the limit you 
         * set (default 5) and the total number of pairs available
         * fsym         From Symbol
         * limit        Max 2000
         */
        $this->fsym = $fsym;
        $this->limit = $limit;
        $this->path = 'top/pairs?';
        $this->url = $this->uri_2 . $this->path . 'fsym=' . $this->fsym . '&limit=' . $this->limit;
        return $this->get();
    }
    
    function get() {
        /**
         * Function to make the curl call to the API returns JSON data into an 
         * array
         */
        $cSession = curl_init();
        curl_setopt($cSession,CURLOPT_URL,$this->url);
        curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($cSession,CURLOPT_HEADER, false); 
        $result=curl_exec($cSession);
        curl_close($cSession);
        $results = json_decode($result, true);
       
        return $results;
    }
    
    /**
     * Supported Markets
     * 
     * Cryptsy          BTCChina            Bitstamp
     * BTER             OKCoin              Coinbase
     * Poloniex         Cexio               BTCE
     * BitTrex          Kraken              Bitfinex
     * Yacuna           LocalBitcoins       Yunbi
     * itBit            HitBTC              btcXchange
     * BTC38            Coinfloor           Huobi
     * CCCAGG           LakeBTC             ANXBTC
     * Bit2C            Coinsetter          CCEX
     * Coinse           MonetaGo            Gatecoin
     * Gemini           CCEDK               Cryptopia
     * Exmo             Yobit               Korbit
     * BitBay           BTCMarkets          Coincheck
     * QuadrigaCX       BitSquare           Vaultoro
     * MercadoBitcoin   Bitso               Unocoin
     * BTCXIndia        Paymium             TheRockTrading
     * bitFlyer         Quoine              Luno
     * EtherDelta       bitFlyerFX          TuxExchange
     * CryptoX          Liqui               MtGox
     * BitMarket        LiveCoin            Coinone
     * Tidex            Bleutrade           EthexIndia
     * Bithumb          CHBTC               ViaBTC
     * Jubi             Zaif                Novaexchange
     * WavesDEX         Binance             Lykke
     * Remitano         Coinroom            Abucoins
     * BXinth           Gateio              HuobiPro
     * OKEX
     * 
     * Current as of 12/12/17
     */
}
?>
