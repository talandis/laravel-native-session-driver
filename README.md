# Native session driver for Laravel 5


### Installation

Require this package with composer:

```
composer require talandis/laravel-native-session-driver
```

### Configuration


After updating composer, remove the original Session service provider and add custom to the providers array in config/app.php

```
Talandis\LaravelNativeSession\NativeSessionServiceProvider::class,
```

### Usage

Change config/session.php or .env file to use "native" session driver instead of file
