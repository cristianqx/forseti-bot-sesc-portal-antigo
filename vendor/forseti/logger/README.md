# forseti-logger
padrão de log da forseti

# Usando sentry

Coloque a dependência no seu projeto

```
composer require sentry/sentry
```

Configure o DNS

```php
<?php
putenv('FORSETI_SENTRY_DNS=<DNS_SENTRY>');
putenv('FORSETI_SENTRY_LOGGER_LEVEL='.\Monolog\Logger::ERROR); //nível do erro a ser reportado
putenv('FORSETI_SENTRY_TIMEOUT=10'); //tempo timeout do sentry

//utilizando o curl do linux para enviar o log de erro (envio em background)
//quando essa opção é usada a opção FORSETI_SENTRY_TIMEOUT não tem efeito (limitação do sentry client sdk)
putenv('FORSETI_SENTRY_CURL_METHOD=exec');

//default: utilizando o curl do PHP para enviar o log de erro
putenv('FORSETI_SENTRY_CURL_METHOD=sync');
```

# Sentry com Symfony Console

Por padrão o symfony console vira o gerenciador de exception, por isso é necessário desabilitar. Abaixo exemplo:

```php
$app = new \Symfony\Component\Console\Application('Portal', '1.0.0');
$app->setCatchExceptions(false);
```

# Usando Loggly

Coloque no seu projeto

putenv('FORSETI_LOGGLY_TOKEN=');
putenv('FORSETI_LOGGLY_LEVEL=' . \Monolog\Logger::INFO);

# Logando no arquivo

É necessário obrigatório definir a variável de ambiente **FORSETI_LOGGER_FILE**
Exemplo:
```php
putenv('FORSETI_LOGGER_FILE='. __DIR__ . '/resources/log_de_test.log');
```

Opcionalmente é possível:

- Alterar o nivel de log enviado para o arquivo. O padrão é DEBUG.
```php
putenv('FORSETI_LOGGER_FILE_LEVEL=' . \Monolog\Logger::INFO);
```

- Alterar o formato do log.
```php
putenv('FORSETI_LOGGER_FORMAT=' . "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n");
```
 
- Alterar o formato do timestamp.
```php
putenv('FORSETI_LOGGER_DATEFORMAT=' . 'Y-m-d H:i:s');
```