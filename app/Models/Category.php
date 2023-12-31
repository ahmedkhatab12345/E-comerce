<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'id','parent_id','name','description','photo','created_at','updated_at',
    ];

    public function parent()
    {
        return $this->belongsTo(\App\Models\Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(\App\Models\Category::class, 'parent_id','id');
    }
    public function product()
    {
        return $this->hasMany(\App\Models\Product::class, 'category_id');
    }
    
    public static function getChildByParentId($id){
        return Category::where('parent_id',$id)->pluck('name','id');
    }
    
}
