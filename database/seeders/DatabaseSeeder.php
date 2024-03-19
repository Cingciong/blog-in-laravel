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

        Artisan::call('migrate:rollback');
        Artisan::call('migrate');




        User::factory(100)->create();
        Follows::factory(500)->create();
        Post::factory(200)->create();
        Comment::factory(500)->create();
    }

    /**
     * Truncate all tables in the database.
     *
     * @return void
     */
    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
