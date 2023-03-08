<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class Content extends Model
{
    use HasFactory;

    /**
     * 各コンテンツの学習言語を取得
     */
    public function language()
    {
        return $this->belongsToMany(Language::class);
    }
}
