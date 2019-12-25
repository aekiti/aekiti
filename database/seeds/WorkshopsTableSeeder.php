<?php

use App\Workshop;
use Illuminate\Database\Seeder;

class WorkshopsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Workshop::create([
      'title' => 'Study Jæm - Ekiti State',
      'slug' => 'study-jaem-ekiti-state',
      'category' => 'Beginner',
      'picture' => 'assets/images/web/workshop/study-jam.png',
      'date' => '14th January - 19th March 2020',
      'time' => '	15:00hrs - 20:00hrs(WAT)',
      'venue' => 'TechHub EKSU',
      'link' => 'https://docs.google.com/forms/d/e/1FAIpQLScN5KMKr-e1fP3RigiwHdiVW1Yidi_4eSJh7nzJ37n2IZaNYA/viewform?embedded=true',
      'created_at' => now(),
      'updated_at' => now()
    ]);
    Workshop::create([
      'title' => 'Study Jæm - Ondo State',
      'slug' => 'study-jaem-ondo-state',
      'category' => 'Beginner',
      'picture' => 'assets/images/web/workshop/study-jam.png',
      'date' => '	11th May - 31st July 2020',
      'time' => '15:00hrs - 20:00hrs(WAT)',
      'venue' => '	Premier Hub',
      'created_at' => now(),
      'updated_at' => now()
    ]);
    Workshop::create([
      'title' => 'Study Jæm Hackæthon',
      'slug' => 'study-jaem-haeckathon',
      'category' => 'Jæmers',
      'picture' => 'assets/images/web/workshop/study-jam.png',
      'date' => '10th - 15th August 2020',
      'time' => '10:00hrs - 02:00hrs(WAT)',
      'venue' => 'Delight Hotel & Suite',
      'created_at' => now(),
      'updated_at' => now()
    ]);
  }
}
