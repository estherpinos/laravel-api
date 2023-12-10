<?php

namespace App\Models;

use Database\Seeders\ProjectsTableSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);

    }

    protected $fillable = [
        'title',
        'description',
        'type_id',
        'technology_id'
    ];





}
