<?php

declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Posts seed.
 */
class PostsSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'First Post',
                'body' => 'Hello CakePHP.',
                'is_published' => 1,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ]
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
