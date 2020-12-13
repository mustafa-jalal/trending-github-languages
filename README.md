# trending-github-languages
Fetch programming languages used in most trending repos in last 30 days

## **Installation**
after cloning project run these commends to update dependencies.

```CMD
- composer update
- composer dump-autoload
```
    
## **Usage**

### **HTTP webservice**

To get all trending programming languages with number and list of repos use this language

```http request
   GET v1/trending-languages
```
response example
```json
{
  "status": "Success",
  "code": 200,
  "data": {
  
    "Python": {
      "number_of_repos": 24,
      "repos": [/*list of repos*/]
      },

    "php": {
      "number_of_repos": 8,
      "repos": [/*list of repos*/]
      }
}
```
