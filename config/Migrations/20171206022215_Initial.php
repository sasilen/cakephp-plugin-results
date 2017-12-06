<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('results')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('firstname', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('surname', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('club', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 36,
                'null' => true,
            ])
            ->addColumn('race', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('league', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('distance', 'float', [
                'default' => '0',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('time', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('gender', 'string', [
                'default' => null,
                'limit' => 1,
                'null' => true,
            ])
            ->addColumn('birthdate', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('agegroup', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('ranking', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('user_id', 'string', [
                'default' => null,
                'limit' => 36,
                'null' => true,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('results');
    }
}
