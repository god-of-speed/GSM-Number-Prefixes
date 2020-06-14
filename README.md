Phone Number Network Operator Identifier 
=======================

Library for identifying mobile numbers network operators

A simple library that helps identify the current network operator of a phone number based on its prefixes.

Just install the package, add the config and it is ready to use!

Requirements
============

* PHP >= 7.1

Installation
============

composer require ebukaubah/gsm-number-prefixes:dev-master

Usage
=====

Get network operator of a phone number

use ebukaubah\GsmNumberPrefixes\GsmNumberPrefix;

$gsmNetworkIdentifier = new GsmNumberPrefix();

$gsmNetworkIdentifier->getNetworkProvider($phone_number);

Credits
=======

* Ubah Ebuka for the awesome https://github.com/god-of-speed/GSM-Number-Prefixes library