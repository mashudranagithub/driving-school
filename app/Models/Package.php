<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['icon', 'title', 'price', 'description', 'features'];

    protected $casts = [
        'features' => 'array',
    ];

    public static function rules(): array
    {
        return [
            'description' => ['required', 'string', 'min:10', 'max:120'],
        ];
    }

}
