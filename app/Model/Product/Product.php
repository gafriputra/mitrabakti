<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Product\Category;
use App\Model\Product\ProductGallery;
use App\Model\Product\ProductDocument;


class Product extends Model
{
    use SoftDeletes;
    // filllable gunanya untuk jika insert data, kita bisa langsung assign
    // data apa saja yang kita insert secara langsung

    protected $fillable = [
        'category_id', 'name', 'slug', 'description', 'price', 'status'
    ];

    // hidden gunanya untuk ada beberapa variabel yang gamau dimunculin, dimasukkan kesini
    protected $hidden = [];

    // relasi gallery
    public function category()
    {
        // produk galeri ini milik dari produk
        // (model::class, 'foreignkey','primary')
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    // bikin relasi ke gallery
    public function productGalleries()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }

    // bikin relasi ke gDocumentallery
    public function productDocuments()
    {
        return $this->hasMany(ProductDocument::class, 'product_id', 'id');
    }
}
