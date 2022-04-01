[![pipeline status](https://git.rinsvent.ru/rinsvent/transformer/badges/master/pipeline.svg)](https://git.rinsvent.ru/rinsvent/transformer/-/commits/master)
[![coverage report](https://git.rinsvent.ru/rinsvent/transformer/badges/master/coverage.svg)](https://git.rinsvent.ru/rinsvent/transformer/-/commits/master)

Transformer
===

## Установка
```php
composer require rinsvent/transformer
```

## Пример
### Использование
```php
$t = new Transformer();
$dt = new \DateTime('2022-04-01');
$dt->setTime(5, 23, 21);
$actual = $t->transform($dt, new Transformer\DateTimeFormat());
$this->assertEquals('2022-04-01T05:23:21+00:00', $actual);
```

