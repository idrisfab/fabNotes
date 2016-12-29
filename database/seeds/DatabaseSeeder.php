<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 'name' => 'idro', 'email' => 'blag@gmaill,com', 'password'=>'boomboom', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now()]);
        DB::table('users')->insert([ 'name' => 'Idris', 'email' => 'idro@idro.com', 'password'=>'boomboom', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now()]);
        DB::table('notes')->insert([ 'userId' => 1, 'noteText' => 'This is blag note', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now()]);
        DB::table('notes')->insert([ 'userId' => 1, 'noteText' => 'The rain in Spain', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now()]);
        DB::table('notes')->insert([ 'userId' => 1, 'noteText' => 'This is only the start', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now()]);
        DB::table('notes')->insert([ 'userId' => 2, 'noteText' => 'Music sounds better with you', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now()]);
        DB::table('notes')->insert([ 'userId' => 2, 'noteText' => 'Blame it on the boogie', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now()]);

        //$this->call(CreateNotesTable::class);

    }
}
