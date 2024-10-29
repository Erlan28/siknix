<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Ormawa;
use Illuminate\Support\Facades\Hash;

class UpdateOrmawaPasswords extends Command
{
    protected $signature = 'ormawa:update-passwords';
    protected $description = 'Update existing Ormawa passwords to use Bcrypt';

    public function handle()
    {
        $ormawas = Ormawa::all();
        foreach ($ormawas as $ormawa) {
            $ormawa->password = $ormawa->getAttributes()['password']; // Ini akan men-trigger mutator
            $ormawa->save();
        }
        $this->info('All Ormawa passwords have been updated to use Bcrypt.');
    }
}

