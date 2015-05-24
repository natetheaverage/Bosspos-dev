<?php

use Illuminate\Database\Seeder;

class ConversationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory('Boss\Pos\Conversations\Conversation', 20)->create();
    }
}
