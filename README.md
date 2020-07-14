RESTish
======

Implementation a REST API secured with OAuth2

The API only returns JSON responses.

All API routes require authentication handled via OAuth2 with password grant type.

Bundles used:
* [FOSRestBundle](https://github.com/FriendsOfSymfony/FOSRestBundle)
* [JMSSerializerBundle](https://github.com/schmittjoh/JMSSerializerBundle)
* [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle)
* [FOSOAuthServerBundle](https://github.com/FriendsOfSymfony/FOSOAuthServerBundle)


Installation
------------
* Clone:
  ~~~bash
  https://github.com/jovic1987/restish.git
  ~~~
  
* Composer:
  ~~~bash
  composer install
  ~~~
    
* Configure database parameters: 
  ~~~bash
  app/config/parameters.yml
  ~~~

* Create db and tables:
  ~~~bash
  php app/console doctrine:migrations:migrate
  ~~~

* Create a fos user:
  ~~~bash
  php app/console fos:user:create
  ~~~

* Create a client:
  ~~~bash
  php app/console oauth-server:client:create --grant-type="password"
  ~~~
  
* Run application:
    ~~~bash
    php app/console server:run
    ~~~


Usage
-----------
First we have to request an access token:

~~~bash
curl --location --request POST 'http://127.0.0.1:8000/oauth/v2/token' \
--header 'Cookie: PHPSESSID=f0b77vsrkaapr5ieq4g6abkv0s' \
--form 'grant_type=password' \
--form 'client_id={client_id}' \
--form 'client_secret={secret}' \
--form 'username={username}' \
--form 'password={password}'
}
~~~

Now we can make calls to any API endpoint by sending the access token as a Bearer:

**GET Accounts**
~~~bash
curl --location --request GET 'http://127.0.0.1:8000/v1/accounts' \
--header 'Authorization: Bearer {access_token}' \
--header 'Cookie: PHPSESSID=f0b77vsrkaapr5ieq4g6abkv0s'

HTTP/1.1 200 OK
{
    "code": 200,
    "status": "OK",
    "items": [
        {
            "id": "bob",
            "owner": "bob",
            "balance": 89.98,
            "currency": "EUR"
        },
        {
            "id": "alice",
            "owner": "alice",
            "balance": 10.02,
            "currency": "EUR"
        }
    ]
}
~~~

**GET Payments**
~~~bash
curl --location --request GET 'http://127.0.0.1:8000/v1/payments' \
--header 'Authorization: Bearer {access_token}' \
--header 'Cookie: PHPSESSID=f0b77vsrkaapr5ieq4g6abkv0s'

HTTP/1.1 200 OK
{
    "code": 200,
    "status": "OK",
    "items": [
        {
            "account": "alice",
            "amount": 10,
            "to_account": "bob",
            "direction": "incoming"
        },
        {
            "account": "bob",
            "amount": 10,
            "to_account": "alice",
            "direction": "outgoing"
        }
    ]
}
~~~

**POST Payments**
~~~bash
curl --location --request POST 'http://127.0.0.1:8000/v1/payments?account=bob&to_account=alice&amount=0.02' \
--header 'Authorization: Bearer {access_token}' \
--header 'Cookie: PHPSESSID=f0b77vsrkaapr5ieq4g6abkv0s'

HTTP/1.1 201 Created
{
    "code": 201,
    "status": "Created"
}
~~~

Requirements
------------
* php:   ">=7.1"
* mysql: ">=8.0"
