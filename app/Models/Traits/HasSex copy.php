<?php

namespace App\Traits\Models;

trait HasSex
{
    static string $SEX_MALE   = 'm';
    static string $SEX_FEMALE = 'f';

    public function getSex(): string
    {
        return self::sexes()[$this->sex];
    }

    public static function sexes(): array
    {
        return [
            self::$SEX_MALE   => 'Male',
            self::$SEX_FEMALE => 'Female',
        ];
    }
}