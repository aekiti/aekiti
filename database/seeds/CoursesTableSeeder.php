<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Course::create([
      'name' => 'Introduction to Blockchain',
      'level' => 'Beginner',
      'picture' => 'assets/images/web/courses/itb.png',
      'description' => 'Learn the fundamentals of Blockchain technologies. Understand in which cases, other than digital money....',
      'link' => 'https://dacade.org/intro-to-blockchain/introduction/?utm_source=aembassador-emmanueljet',
      'created_at' => now(),
      'updated_at' => now()
    ]);
    Course::create([
      'name' => 'Web Development 101',
      'level' => 'Beginner',
      'picture' => 'assets/images/web/courses/wd101.png',
      'description' => 'This course is designed to make you understand the basics of HTML, CSS and Bootstrap by building your own professional looking, responsive website...',
      'link' => 'https://dacade.org/web-dev-101/introduction/?utm_source=aembassador-emmanueljet',
      'created_at' => now(),
      'updated_at' => now()
    ]);
    Course::create([
      'name' => 'æternity Development 101',
      'level' => 'Beginner',
      'picture' => 'assets/images/web/courses/ad101.png',
      'description' => 'Build a voting æpp with æternity technology, learning key features of the Sophia programming language...',
      'link' => 'https://dacade.org/ae-dev-101/introduction/?utm_source=aembassador-emmanueljet',
      'created_at' => now(),
      'updated_at' => now()
    ]);
    Course::create([
      'name' => 'Version Control with Git',
      'level' => 'Beginner',
      'picture' => 'assets/images/web/courses/udacity.png',
      'description' => 'This course covers the essentials of using the version control system Git....',
      'link' => 'https://www.udacity.com/course/version-control-with-git--ud123',
      'created_at' => now(),
      'updated_at' => now()
    ]);
    Course::create([
      'name' => 'Firebase Web Codelab',
      'level' => 'Beginner',
      'picture' => 'assets/images/web/courses/firebase.png',
      'description' => 'you\'ll learn how to use Firebase to easily create web applications by implementing and....',
      'link' => 'https://codelabs.developers.google.com/codelabs/firebase-web',
      'created_at' => now(),
      'updated_at' => now()
    ]);
    Course::create([
      'name' => 'React JS 101',
      'level' => 'Beginner',
      'picture' => 'assets/images/web/courses/rj101.png',
      'description' => 'Build powerful interactive applications with React, a popular JavaScript library....',
      'link' => 'https://www.codecademy.com/learn/react-101',
      'created_at' => now(),
      'updated_at' => now()
    ]);
  }
}
