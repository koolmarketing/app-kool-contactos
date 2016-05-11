<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$usuarios = new \stdClass;

    	$carlos = (object) [
    	"name"           => "Carlos",
    	"email"          => "soporteweb@koolmarketing.net",
    	"password"       => Hash::make('kool-2016'),
    	"activo"         => 1,
    	"remember_token" => str_random(60);
    	];

    	$carlos = (object) [
    	"name"           => "Aura",
    	"email"          => "aura@koolmarketing.net",
    	"password"       => Hash::make('kool-2016'),
    	"activo"         => 1,
    	"remember_token" => str_random(60);
    	]; 

    	$marlon = (object) [
    	"name"           => "Marlon",
    	"email"          => "marlon@koolmarketing.net",
    	"password"       => Hash::make('kool-2016'),
    	"activo"         => 1,
    	"remember_token" => str_random(60);
    	]; 

    	$usuarios->carlos = $carlos;
    	$usuarios->aura   = $aura;
    	$usuarios->marlon = $marlon;
    }
}
