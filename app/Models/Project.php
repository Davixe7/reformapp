<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'budget',
        'due_date',
        'user_id',
        'category_id'
    ];
    
    public function user(){
      return $this->belongsTo('App\Models\User');
    }
    
    public function category(){
      return $this->belongsTo('App\Models\Category');
    }
    
    public function scopeByCategory($query, $category_id){
      if( !$category_id ){ return $query; }
      return $query->where('category_id',$category_id);
    }
    
    public function scopeByName($query, $name){
      if( !$name ){ return $query; }
      return $query->where('name', 'like', "%$name%");
    }
    
    public function scopePublished($query){
      return $query->where('status', 'published');
    }
    
    public function scopeByDateRange($query, $from, $to){
      if( !$from && !$to ){ return $query; }
      return $query->whereBetween('created_at', [$from, $to]);
    }
}
