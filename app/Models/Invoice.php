<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory;
    //use SoftDeletes;
    protected $guarded = [];
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function invoiceDetails(){
        return $this->hasMany(InvoiceDetail::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
