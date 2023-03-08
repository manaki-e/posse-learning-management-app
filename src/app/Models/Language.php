<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

class Language extends Model
{
    use HasFactory;

    /**
     * 各言語の学習コンテンツを取得
     */
    public function content()
    {
        return $this->belongsToMany(Content::class);
    }
}
