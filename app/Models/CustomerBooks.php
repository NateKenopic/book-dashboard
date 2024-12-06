<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerBooks extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerBooksFactory> */
    use HasFactory;

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function books() {
        return $this->belongsTo(Book::class);
    }
}
