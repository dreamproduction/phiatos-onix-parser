# Phiatos-Onix-Parser

PHP Library to convert XML Onix into PHP Objects.

# Requirements

- XML Onix 2.0 >
- PHP 7.1 >

# Install

composer require bogdan-racz/phiatos-onix-parser

# Usage

$parser = new OnixParser($xmlOnix);

// If you prefer to load the XML from file.

$parser = new OnixParser('/var/www/xml_onix.xml', true);

// Loop for all products.

foreach($parser->getOnix()->getProducts() as $product);

# Docs

Coming soon...
