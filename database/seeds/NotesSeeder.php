<?php

use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 'name' => 'idro', 'email' => 'blag@gmaill,com', 'password'=>'boomboom']);
        DB::table('users')->insert([ 'name' => 'Idris', 'email' => 'idro@idro.com', 'password'=>'boomboom']);
        DB::table('notes')->insert([ 'userId' => 1, 'noteText' => 'This is blag note']);
        DB::table('notes')->insert([ 'userId' => 1, 'noteText' => 'The rain in Spain']);
        DB::table('notes')->insert([ 'userId' => 1, 'noteText' => 'This is only the start']);
        DB::table('notes')->insert([ 'userId' => 2, 'noteText' => 'Music sounds better with you']);
        DB::table('notes')->insert([ 'userId' => 2, 'noteText' => 'Blame it on the boogie']);
    }
}
