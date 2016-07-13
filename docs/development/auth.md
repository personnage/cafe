# Auth Overview

## Sign Up

Manual:
- name
- email
- password
- captcha?

Auto:
- remember_token
- authentication_token [random_bytes:32](http://php.net/manual/ru/function.random-bytes.php)
- city [detect by ip](http://nginx.org/en/docs/http/ngx_http_geoip_module.html)

Письмо будет отправлено на email для подтверждения регистрации.

## Sign In

- email
- password

При успешной авторизации, счетчик входа будет увеличен на +1.
При наличии установленной опции получения уведомлений, будет высланно письмо.

Если авторизация завершилась провалом, счетчик неудач будет увеличен на +1.


