## Что делает

Превращает строки типа `'0,5'`, `'0.5'`, `'.5'`, `',5'` в корректный `(float) 0.5`   

## Установка

`composer require konstantind/otus-flexible-float-parser`

## Использование

```
$floatValue = FlexibleFloatParser::parse('3,14'); // 3.14
$floatValue = FlexibleFloatParser::parse('.5');   // 0.5
$floatValue = FlexibleFloatParser::parse('');     // null
$floatValue = FlexibleFloatParser::parse('abc');  // null
```
