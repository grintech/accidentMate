<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;


     protected $table = 'users';

    protected $fillable = [
                            'name',
                            'email ',
                            'profession ',
                            'email_verified_at',
                            'password ',
                            'remember_token '
                        ];


    public function RegistrationUser($request)
    {
        self::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'profession' => $request->profession,
                        'password' => $request->password
                        
                        ]);
            

    }
}
