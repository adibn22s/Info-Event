<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
     // use HasFactory;
     use SoftDeletes;

     // declare table
     public $table = 'category';

     // this field must type date yyyy-mm-dd hh:mm:ss
     protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at',
     ];

     // declare fillable
     protected $fillable = [
         'name',
         'created_at',
         'updated_at',
         'deleted_at',
     ];

    // one to many
    public function doctor()
    {
        // 2 parameter (path model, field foreign key)
        return $this->hasMany('App\Models\MasterData\Event', 'category_id');
    }

    // one to many
    public function category()
    {
        // 3 parameter (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\MasterData\category', 'category_id', 'id');
    }
}
