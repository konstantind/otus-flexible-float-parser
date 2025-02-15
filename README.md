## What It Does

Flexible Float Parser is a lightweight PHP package that converts numeric strings with either a comma or a dot as a decimal separator into a float. It supports negative numbers and values without a leading zero (e.g., .5 → 0.5).   

## Installation

```sh
composer require konstantind/otus-flexible-float-parser
```

## Use

```
<?php

$floatValue = FlexibleFloatParser::parse('3,14'); // 3.14
$floatValue = FlexibleFloatParser::parse('.5');   // 0.5
$floatValue = FlexibleFloatParser::parse('');     // null
$floatValue = FlexibleFloatParser::parse('abc');  // null
```
