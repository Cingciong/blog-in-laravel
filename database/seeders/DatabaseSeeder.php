<?php

namespace Database\Seeders;

use App\Models\Follows;
use Database\Factories\CommentFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
   $this->truncateTables(['users', 'posts', 'comments','follows']);



        $this->measureExecutionTime(function () {
            User::factory(100)->create();
            echo "  users created";
        });
        $this->measureExecutionTime(function () {
            Follows::factory(3000)->create();
            echo "  follows created";
        });
        $this->measureExecutionTime(function () {
            Post::factory(200)->create();
            echo "  posts created";
        });
        $this->measureExecutionTime(function () {
            Comment::factory(500)->create();
            echo "  comments created";
        });
    }

    /**
     * Truncate all tables in the database.
     *
     * @return void
     */

    protected function measureExecutionTime(callable $function)
    {
        $this->start_time = microtime(true);
        $function();
        $end_time = microtime(true);
        $execution_time = ($end_time - $this->start_time);
        $execution_time= substr((string)$execution_time, 0, 7);
        echo ' '.$execution_time*1000 . "ms \n" ;
    }


    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
