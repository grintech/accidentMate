<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profession extends Model
{
    use HasFactory;

    protected $table = 'professions';

    protected $fillable = [
                            'name',
                        ];

    public function addProfession($request)
    {
        self::create([
                        'name' => $request->name
                    ]);
    }


    public function updateProfession($request)
    {
        self::update([
                        'name' => $request->name
                    ]);
    }

}
