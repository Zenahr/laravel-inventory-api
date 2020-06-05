![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)

# Powered By

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


## API Endpoints

| Method | endpoint | effect |
| :---:        |      :---:     |         :---: |
| GET   | api/items     | get all items    |
| GET   | api/items/{item}     | get item    |
| POST   | api/items     | post new item    |
| PUT   | api/items/{item}     | update existing item    |
| DELETE   | api/items/{item}     | drop item    |

## Endpoint Interaction Details

```
{
  "info": {
    "_postman_id": "455b374c-bbcd-419a-9b88-f81a330fc421",
    "name": "laravel-inventory-api",
    "description": "https://github.com/Zenahr/laravel-inventory-api",
    "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
  },
  "item": [
    {
      "name": "List Items",
      "request": {
        "method": "GET",
        "header": [
          
        ],
        "url": {
          "raw": "http://localhost:8000/api/items"
        }
      },
      "response": [
        
      ]
    },
    {
      "name": "Get Item",
      "request": {
        "method": "GET",
        "header": [
          
        ],
        "url": {
          "raw": "http://localhost:8000/api/items/1"
        }
      },
      "response": [
        
      ]
    },
    {
      "name": "Create Item",
      "request": {
        "method": "GET",
        "header": [
          
        ],
        "url": {
          "raw": "http://localhost:8000/api/items"
        }
      },
      "response": [
        
      ]
    },
    {
      "name": "Update Item",
      "request": {
        "method": "PUT",
        "header": [
          
        ],
        "url": {
          "raw": "http://localhost:8000/api/items/51?itemName=Item&itemDescription=ItemDescription&itemQuantity=20&itemIsAvailable=true",
          "protocol": "http",
          "host": [
            "localhost"
          ],
          "port": "8000",
          "path": [
            "api",
            "items",
            "51"
          ],
          "query": [
            {
              "key": "itemName",
              "value": "Item"
            },
            {
              "key": "itemDescription",
              "value": "ItemDescription"
            },
            {
              "key": "itemQuantity",
              "value": "20"
            },
            {
              "key": "itemIsAvailable",
              "value": "true"
            }
          ]
        }
      },
      "response": [
        
      ]
    },
    {
      "name": "Drop Item",
      "request": {
        "method": "GET",
        "header": [
          
        ],
        "url": {
          "raw": "http://localhost:8000/api/items"
        }
      },
      "response": [
        
      ]
    }
  ],
  "protocolProfileBehavior": {
    
  }
}
```

## Contributing

Thank you for considering contributing. This project is yet not open for contribution as it's in its early stages of development.


## License
![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)

The MIT License (MIT)

Copyright © 2020 Zenahr Barzani

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.