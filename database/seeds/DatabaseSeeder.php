<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		//$this->call('UserTableSeeder');
		$this->call('ProductTableSeeder');
	}

}

class ProductTableSeeder extends Seeder {
	public function run(){
		DB::insert('insert into products
		(name, quantity, price, description, created_at, updated_at)
		values (?,?,?,?,?,?)', array('Geladeira', 2, 590.00, 'Side by Side com gelo na porta',Carbon::now(),Carbon::now()));
		DB::insert('insert into products
		(name, quantity, price, description, created_at, updated_at)
		values (?,?,?,?,?,?)', array('Fogão', 5, 950.00, 'Painel automático e forno elétrico',Carbon::now(),Carbon::now()));
		DB::insert('insert into products
		(name, quantity, price, description, created_at, updated_at)
		values (?,?,?,?,?,?)', array('Microondas', 1, 152.00, 'Manda SMS quando termina de esquentar',Carbon::now(),Carbon::now()));
	}
}
