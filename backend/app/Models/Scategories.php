<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scategories extends Model
{
    use HasFactory;
    protected $fillable = [
        "nomscategories",
        "imagescategories",
        "categorieID"];
        public function categorie(){
            return $this->belongsTo(Categorie::class, 'categorieID');  // Assuming Categories has a foreign key named 'categorieID'  and this model has a column named 'categorieID'
        }
}
