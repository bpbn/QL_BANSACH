<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    //use SoftDeletes;
    protected $guarded = [];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Author()
    {
        return $this->belongsTo(Author::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function favoritebooks()
    {
        return $this->hasMany(Favoritebook::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
