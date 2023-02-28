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

    public function scopeFilter($query, array $filters){
        
        if(isset ($filters['search']) ? $filters['search'] : false){
            return$query->where('judul', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('pengarang', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('harga', 'like', '%' . $filters['search'] . '%');
        }

        $query->when($filters['category']??false, function($query, $category){
            return $query->whereHas('publisher', function($query) use ($category){
                $query->where('id', $category);
            });
        });
    }
}

