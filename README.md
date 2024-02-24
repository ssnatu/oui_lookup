This is to demonstrate how to import the IEEE CSV data using the artisan command and look up the OUIs by single or multiple MAC addresses to get the vendor's name using the REST APIs.

The CSV is taken from http://standards-oui.ieee.org/oui/oui.csv

Artisan command to import a CSV: `php artisan import:oui-csv`

This command will import all the CSV data into the database.

An API to lookup the vendor's OUI by MAC address

1. GET request for single MAC lookup:

   ![271844687-ad2cbf51-344c-4016-8797-f6ae99411aa6](https://github.com/ssnatu/oui_lookup/assets/31346079/d0c80db7-3ee9-4a41-a306-d0ef29092092)

Response:

![271844735-01af016a-8cdd-4350-b8ba-35441c3e8b12](https://github.com/ssnatu/oui_lookup/assets/31346079/dce28a4c-1a8c-4d1d-95db-d07e9b372a0e)

2. POST request for multiple MAC lookup:

   ![271844822-bbe3731a-4742-4781-9122-917657870224](https://github.com/ssnatu/oui_lookup/assets/31346079/dc0c0ba7-4bad-4dc8-9469-5b7869c9ee95)


Response:

![271844889-ce9c597a-36e8-4dce-af68-6d6de3ab0868](https://github.com/ssnatu/oui_lookup/assets/31346079/0ef4d1d7-e6b4-4384-9636-879bfcd9b5e4)
