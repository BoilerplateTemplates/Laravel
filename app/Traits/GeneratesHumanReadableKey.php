<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Tuupola\KsuidFactory as Ksuid;

trait GeneratesHumanReadableKey
{
    public static function bootGeneratesHumanReadableKey()
    {
        static::creating(function ($model) {
            if (method_exists($model, 'humanReadableKeyColumn')) {
                $column = $model->humanReadableKeyColumn();

                $model->setAttribute(
                    key: $column,
                    value: $model->generateKey(),
                );
            }

            $model->ksuid = $model->generateKey();
        });
    }

    public function generateKey()
    {
        return $this->getKeyPrefix() . '_' . Ksuid::create();
    }

    public static function getKeyPrefix(): string
    {
        return Str::of(static::class)
                  ->classBasename()
                  ->lower()
                  ->limit(2, '')
                  ->toString();
    }
}
