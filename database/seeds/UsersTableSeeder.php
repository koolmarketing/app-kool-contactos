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
    	"fotografia"     => "carlos.jpg",
    	"remember_token" => str_random(60)
    	];

    	$aura = (object) [
    	"name"           => "Aura",
    	"email"          => "aura@koolmarketing.net",
    	"password"       => Hash::make('kool-2016'),
    	"activo"         => 1,
    	"fotografia"     => "aura.jpg",
    	"remember_token" => str_random(60)
    	]; 

    	$marlon = (object) [
    	"name"           => "Marlon",
    	"email"          => "info@koolmarketing.net",
    	"password"       => Hash::make('kool-2016'),
    	"activo"         => 1,
    	"fotografia"     => "marlon.jpg",
    	"remember_token" => str_random(60)
    	]; 

    	$luiger = (object) [
    	"name"           => "Luiger",
    	"email"          => "soportegrafico@koolmarketing.net",
    	"password"       => Hash::make('kool-2016'),
    	"activo"         => 1,
    	"fotografia"     => "luiger.jpg",
    	"remember_token" => str_random(60)
    	]; 

    	$usuarios->carlos = $carlos;
    	$usuarios->aura   = $aura;
    	$usuarios->marlon = $marlon;
    	$usuarios->luiger = $luiger;

    	foreach ($usuarios as $usuario) {
    		DB::table('users')->insert([
    			'name'           => $usuario->name,
    			'email'            => $usuario->email,
    			'password'         => $usuario->password,
    			'remember_token'   => $usuario->remember_token,
    			'fotografia'         => $usuario->fotografia,
    			'activo'		   => $usuario->activo
    			]);

    	}
    }
}
