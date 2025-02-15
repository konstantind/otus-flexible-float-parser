<?php declare(strict_types=1);

class FlexibleFloatParser
{
    public static function parse(string $value): ?float {
        $normalizedValue = str_replace(',', '.', trim($value));

        if ($normalizedValue === '') {
            return null;
        }

        if (preg_match('/^-?\d*(\.\d+)?$/', $normalizedValue)) {
            return (float) (preg_match('/^\./', $normalizedValue) ? '0' . $normalizedValue : $normalizedValue);
        }

        return null;
    }
}
