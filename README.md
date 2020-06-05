<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


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