<?php

require './vendor/autoload.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$pinterest = new \NhanChauKP\Pinterest\PinterestCookieApi('"_pinterest_sess" value ', null);

// Get account info
$account = $pinterest->getAccountData();
var_dump($account);

//Get list boards
$boards = $pinterest->getBoards($account['username']);
var_dump($boards);