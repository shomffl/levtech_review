<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getBylimit(int $limit_count = 10){
        return $this->orderBy("updated_at", "DESC")->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 10){
        return $this->orderBy("updated_at", "DESC")->paginate($limit_count);
    }
    
    protected $fillable = [
        "title",
        "body",
        ];
}
