<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = $manager->table('users')->insertGetId([
            'name' => 'larabel.user',
            'email' => 'mail@example.com',
            'password' => $hasher->make('password'),
            'created_at' => \Carbon\Carbon::now()->now()->toDateTimeString()
        
        ]);
        //
        $manager->table('user_tokens')
            ->insert([
                'user_id' => $userId,
                'api_token' => \Illuminate\Support\Str::random(60)
                
                ]);
        
        
        
    }
}
