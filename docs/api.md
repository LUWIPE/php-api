# API Documentation

Base URL (local): `http://127.0.0.1:8000/api`

## Authentication

`GET /user` requires Sanctum authentication (`auth:sanctum`).

## Endpoints

### GET /products

Returns a list of products ordered by ascending `id`.

#### Response fields

- `id` (integer)
- `name` (string)
- `desc` (string)
- `img_url` (string)
- `price` (number)
- `stock` (integer)
- `release` (date)
- `type` (object)
  - `id` (integer)
  - `name` (string)
- `grade` (object)
  - `id` (integer)
  - `name` (string)
- `digital` (object)
  - `id` (integer)
  - `name` (string)

#### Example response

```json
{
  "data": [
    {
      "id": 1,
      "name": "Sample Product",
      "desc": "Short product description",
      "img_url": "https://example.com/image.jpg",
      "price": "199",
      "stock": 20,
      "release": "2026-04-21",
      "type": {
        "id": 1,
        "name": "Figure"
      },
      "grade": {
        "id": 1,
        "name": "A"
      },
      "digital": {
        "id": 2,
        "name": "No"
      }
    }
  ]
}
```

### GET /user

Returns the currently authenticated user.

- Middleware: `auth:sanctum`
- Response: standard Laravel user model JSON
