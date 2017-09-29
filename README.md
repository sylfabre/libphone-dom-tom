libphone-dom-tom
=========================

PHP extension of [https://github.com/googlei18n/libphonenumber]() to support French DOM-TOM numbers in international format.

Tries to fix https://github.com/googlei18n/libphonenumber/issues/274

How to use it
--------

````
<?php

// phone number in Guadeloupe
echo AssoConnect\LibphoneDOMTOM::parse('+33590925585');
// => +590590925585

// phone number in Metropolitan France 
echo AssoConnect\LibphoneDOMTOM::parse('+33123456789');
// => +33123456789
````
