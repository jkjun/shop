<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    public function getSortByPrice ()
    {
     $categories = $this->latest('price')->SortByBrandAndPrice()->get();
              return $categories;
    }
    public function scopeSortByBrandAndPrice($query)
    {
    $query-> where ('price', '>=', '500' )
        ->where ('brand', '=', 'bosh' );
    }
    public function scopeSortByBrandAndPriceNbosh($query)
    {
        $query-> where ('price', '>=', '500' )
            ->where ('brand', '!=', 'bosh' );
    }
    public function getSortByBrandAndPriceNbosh ()
    {
        return $this->latest('price')->SortByBrandAndPriceNbosh()->get();

    }
}

