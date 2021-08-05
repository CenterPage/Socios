<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
      return 'url';
    }

    public static function create(array $attributes = []) {

        $socio = static::query()->create($attributes);

        $url = \Str::slug($attributes['nombre_socio']);

        if (static::whereUrl($url)->exists()) {

            $socio->url = \Str::slug($attributes['nombre_socio']) . "-{$socio->id}";
        } else {

            $socio->url = \Str::slug($attributes['nombre_socio']);
        }

        $socio->save();

        return $socio;
    }
}
