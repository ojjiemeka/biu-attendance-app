<?php
declare(strict_types=1);

namespace App\Model\Traits;

trait FindByName
{
    /**
     * @param $name
     * @return self
     */
    public static function findByName($name)
    {
        return static::findByColumn('name', $name)->first();
    }
}