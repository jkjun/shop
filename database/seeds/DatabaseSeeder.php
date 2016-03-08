<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;
use App\Models\Category;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        $this->call('ShopsSeeder');
        $this->call('CategoriesSeeder');
		// $this->call('UserTableSeeder');
	}

}
class CategoriesSeeder extends Seeder {
    public function run ()
    {
        DB::table('Categories')->delete();
        Category::create([
            'title' => 'Bosh 123',
            'sluge' => 'Bosh-123',
            'brand' => 'BOSH',
            'price' => '12009',
            'articul' => '32432',


        ]);
        Category::create([
            'title' => 'Bosh LI',
            'sluge' => 'Bosh-LI',
            'brand' => 'BOSH',
            'price' => '1329',
            'articul' => '5532',

        ]) ;
        Category::create([
            'title' => 'AL-CO LI',
            'sluge' => 'AL-CO-LI',
            'brand' => 'AL-CO',
            'price' => '15009',
            'articul' => '45645',

        ]) ;
        Category::create([
            'title' => 'DeWalt 1900',
            'sluge' => 'DeWalt_1900',
            'brand' => 'DeWalt',
            'price' => '6660',
            'articul' => '45',

        ]) ;

    }
}

class ShopsSeeder extends Seeder {
    public function run ()
    {
        DB::table('Shops')->delete();
        Shop::create([
            'name' => 'Shop',
            'email' => 'shop',
            'password' => '<b>Shop body</b>',
            'remember_token' => true,

        ]);
        Shop::create([
            'name' => 'Shop2',
            'email' => 'shop565',
            'password' => '<b>Shop bodyrfds</b>',
            'remember_token' => true,
        ]) ;
    }
}