<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory()->create([
            'name' => 'Nevolja',
            'email' => 'john@email.com'
        ]);

        Listing::create([
            'title' => 'Senior Dev Lara',
            'user_id' => $user->id,
            'tags' => 'laravel, javascript',
            'company' => 'Microsoft',
            'location' => 'Travnik',
            'email' => 'microsoft@microsoft.com',
            'description' => 'A job for talented dev'
        ]);

        Listing::create([
            'title' => 'Senior Dev JS',
            'user_id' => $user->id,
            'tags' => 'javascript',
            'company' => 'Lanaco',
            'location' => 'Travnik',
            'email' => 'microsoft@microsoft.com',
            'description' => 'A job for talented dev'
        ]);
    
    }
}
