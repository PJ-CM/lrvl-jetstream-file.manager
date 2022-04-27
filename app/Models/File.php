<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        //'path',
    ];

    public function getUrlAttribute()
    {
        return Storage::url($this->path);
    }

    public function getCreatedAtForHumansAttribute()
    {
        // X minutos/horas/días/... antes
        //return $this->created_at->diffForHumans(now());
        // hace X minutos/horas/días/...
        return $this->created_at->diffForHumans();
    }
}
