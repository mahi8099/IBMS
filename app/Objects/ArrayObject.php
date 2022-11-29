<?php

namespace App\Objects;

use Illuminate\Contracts\Support\Arrayable;

abstract class ArrayObject implements Arrayable
{
    public function fill(array $input)
    {
        foreach ($input as $key => $value) {
            if (! property_exists(static::class, $key)) {
                continue;
            }

            $this->$key = $value;
        }

        return $this;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return (array) $this;
    }
}