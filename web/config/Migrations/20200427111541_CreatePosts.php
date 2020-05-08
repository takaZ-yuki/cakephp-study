<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('posts');
        $table->addColumn('title', 'string', ['limit' => 150,'null' => false]);
        $table->addColumn('description', 'text', ['limit' => 255]);
        $table->addColumn('body', 'text');
        $table->addColumn('published', 'boolean', ['default' => false]);
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');
        $table->create();
    }
}
