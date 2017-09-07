<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(['name'=>'task1']);
        DB::table('tasks')->insert(['name'=>'task2']);
        \App\Task::create(['name'=>'task3']);
    }
}
