# Laravel String Macros

* `declination` - склонение чисел;
```php
use Illuminate\Support\Str;

Str::declination(15, ['друг', 'друга', 'друзей']); // 15 друзей
```


* `declinationRuble` - склонение суммы в рублях на основе макроса `declination`;
```php
use Illuminate\Support\Str;

Str::declinationRuble(50); // 50 рублей
```


* `youtubeCodeFromUrl` - вырезать код ролика из URL YouTube;
```php
use Illuminate\Support\Str;

Str::youtubeCodeFromUrl('https://www.youtube.com/watch?v=rOjHhS5MtvA'); // rOjHhS5MtvA
```


* `onlyNums` - оставить в строке только числа;
```php
use Illuminate\Support\Str;

Str::onlyNums('+7 (911) 152-52-25'); // 79111525225
```

* `countLetters` - кол-во символов в строке;
```php
use Illuminate\Support\Str;

Str::countLetters('Самый обычный текст'); // 19
```

* `countWords` - кол-во слов строке;
```php
use Illuminate\Support\Str;

Str::countWords('Самый обычный текст'); // 3
```

* `mask` - Оборачивает текст в маску;
```php
use Illuminate\Support\Str;

Str::mask('/^(\d{3})(\d{3})(\d{2})(\d{2})$/', '+7 (\1) \2-\3-\4', 9112223344); // +7 (911) 222-33-44
```
