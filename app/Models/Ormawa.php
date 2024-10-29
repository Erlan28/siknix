<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Ormawa extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'ormawa'; // Sesuaikan dengan nama tabel yang benar

    // Add fillable property to specify which attributes can be mass-assigned
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'nama_ormawa',
        'password',
    ];

    // Add hidden property to prevent sensitive information from being serialized
    protected $hidden = [
        'password',
    ];

    // Add a mutator to automatically hash the password when it's set
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
