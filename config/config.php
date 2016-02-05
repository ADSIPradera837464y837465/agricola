<?php

use FStudio\myConfig as config;

$config = new config();

$config->setPath('/var/www/agricola/');
$config->setUrl('http://localhost/agricola/web/');

$config->setDriver('pgsql');
$config->setHost('localhost');
$config->setPort(5432);
$config->setDbName('agro');
$config->setUser('postgres');
$config->setPassword('123');
$config->setDsn($config->getDriver() . ':host=' . $config->getHost() . ';port=' . $config->getPort() . ';dbname=' . $config->getDbName());

$config->setSessionName('FStudio');

$config->setDefaultModule('ejemplo');
$config->setDefaultAction('index');
//