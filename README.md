This is to demonstrate how to import the IEEE CSV data using the artisan command and look up the OUIs by single or multiple MAC addresses to get the vendor's name using the REST APIs.

The CSV is taken from http://standards-oui.ieee.org/oui/oui.csv

Artisan command to import a CSV: `php artisan import:oui-csv`

This command will import all the CSV data into the database.

An API to lookup the vendor's OUI by MAC address

1. GET request for single MAC lookup:
   ![2023-10-01_18h45_41](https://github.com/ssnatu/glide/assets/31346079/ad2cbf51-344c-4016-8797-f6ae99411aa6)

Response:

![2023-10-01_18h47_22](https://github.com/ssnatu/glide/assets/31346079/01af016a-8cdd-4350-b8ba-35441c3e8b12)

2. POST request for multiple MAC lookup:
   
   ![2023-10-01_18h49_44](https://github.com/ssnatu/glide/assets/31346079/bbe3731a-4742-4781-9122-917657870224)

Response:

![2023-10-01_18h51_16](https://github.com/ssnatu/glide/assets/31346079/ce9c597a-36e8-4dce-af68-6d6de3ab0868)
