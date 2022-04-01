[![pipeline status](https://git.rinsvent.ru/rinsvent/transformer/badges/master/pipeline.svg)](https://git.rinsvent.ru/rinsvent/transformer/-/commits/master)
[![coverage report](https://git.rinsvent.ru/rinsvent/transformer/badges/master/coverage.svg)](https://git.rinsvent.ru/rinsvent/transformer/-/commits/master)

Transformer
===

## Установка
```php
composer require rinsvent/transformer
```

## Пример

### Описания ДТО
```php
class BuyRequest
{
    public string $phrase;
    public int $length;
    public bool $isFirst;
}

interface BarInterface
{

}

class Bar implements BarInterface
{
    public float $barField;
}

#[HelloSchema]
class HelloRequest
{
    #[Trim]
    public string $surname;
    #[DataPath('fake_age')]
    public int $age;
    public array $emails;
    public array $authors;
    public array $authors2;
    public array $authors3;
    public BuyRequest $buy;
    public BarInterface $bar;
}
```
### Использование
```php
use Rinsvent\Transformer\Transformer;

$helloRequest = new HelloRequest;
$helloRequest->surname = '   asdf';
$helloRequest->age = 3;
$helloRequest->emails =[
    'sfdgsa',
    'af234f',
    'asdf33333'
];
$author1 = new Author();
$author1->name = 'Tolkien';
$author2 = new Author();
$author2->name = 'Sapkovsky';
$helloRequest->authors = [
    $author1,
    $author2
];
$helloRequest->authors2 = [
    [
        "name" => "Tolkien"
    ],
    [
        "name" => "Sapkovsky"
    ]
];
$helloRequest->authors3 = [
    [
        "name" => "Tolkien"
    ],
    [
        "name" => "Sapkovsky"
    ]
];
$buy = new BuyRequest();
$buy->phrase = 'Buy buy!!!';
$buy->length = 10;
$buy->isFirst = true;
$helloRequest->buy = $buy;
$bar = new Bar();
$bar->barField = 32;
$helloRequest->bar = $bar;

$transformer = new Transformer();
$dto = $transformer->convert($helloRequest);
```
### Результат
```php
$dto = [
    "surname" => "asdf",
    "fake_age" => 3,
    "emails" => [
        "sfdgsa",
        "af234f",
        "asdf33333"
    ],
    "authors" => [
        [
            "name" => "Tolkien"
        ],
        [
            "name" => "Sapkovsky"
        ]
    ],
    "authors2" => [
        [
            "name" => "Tolkien"
        ],
        [
            "name" => "Sapkovsky"
        ]
    ],
    "authors3" => [],
    "buy" => [
        "phrase" => "Buy buy!!!",
        "length" => 10,
        "isFirst" => true
    ],
    "bar" => [
        "barField" => 32
    ]
]
```

