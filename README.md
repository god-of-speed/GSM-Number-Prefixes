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

Available Response
=======

1. mtn
2. airtel
3. glo
4. 9mobile
5. starcomms
6. visafone
7. multilinks
8. zoom
9. ntel
10. smile
11. unknown

Credits
=======

* Ubah Ebuka for the awesome https://github.com/god-of-speed/GSM-Number-Prefixes library