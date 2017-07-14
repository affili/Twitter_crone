<?php

use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweets')->insert([
        [
            'body' => '最初のテキストです。',
            'user_id' => '1',
            'created_at' => '2017-05-02 14:28:19',
            'updated_at' => '2017-05-02 14:28:19'
        ],[
            'body' => '2番目のテキストです。',
            'user_id' => '1',
            'created_at' => '2017-05-03 14:28:19',
            'updated_at' => '2017-05-03 14:28:19'
        ]
    ]);
    }
}
