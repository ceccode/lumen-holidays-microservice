# Lumen Holidays microservice

Microservice developed in Lumen for get public holidays of many countries.
###### NOTE: This app is still under development. PLEASE REPORT ANY BUGS OR ERRORS.

## Api

This microservice expose a very simple API for retrieving the public holidays of any country. You access the API by making a GET request:

```
http://lumen-holidays-microservice.app/{country}/{year}?access token={access-token}
```

#### Oauth

Get an access token:

```
http://lumen-holidays-microservice.app/oauth/access-token
```

Parameters:

```
{
    "username":"user@palmabit.com",
    "password": "1234",
    "grant_type": "password",
    "client_id" : "1",
    "client_secret" : "ABCxyz"
}
```

## TODO

Add tests

## Contributing

To contribute to this app feel free to fork it.

## Security Vulnerabilities

If you discover a security vulnerability within Lumen Holidays microservice, please send an e-mail to falanga.fra@gmail.com.

### License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
