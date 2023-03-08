<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;
use App\Models\Language;

class ContentLanguage extends Model
{
    use HasFactory;

    /**
     * 学習コンテンツを取得
     */
    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    /**
     * 学習言語を取得
     */
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
