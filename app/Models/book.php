<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    // protected $fillable = ['publisher_id', 'judul', 'pengarang', 'harga'];

    protected $guarded = ['id'];

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
}
