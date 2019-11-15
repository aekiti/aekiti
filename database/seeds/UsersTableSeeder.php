<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(App\User::class)->create([
      'id' => 1,
      'name' => 'Admin',
      'email' => 'admin@aekiti.com',
      'role_id' => 1,
    ]);

    factory(App\User::class)->create([
      'id' => 2,
      'name' => 'Facilitator',
      'email' => 'facilitator@aekiti.com',
      'role_id' => 2,
    ]);

    factory(App\User::class)->create([
      'id' => 3,
      'name' => 'Member',
      'email' => 'member@aekiti.com',
      'role_id' => 3,
    ]);
  }
}
