<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    /**
     * @var array Список категорий новостей
     */
    private static array $newsCategories = [
        'auto' => [
            'id' => 1,
            'title' => 'Автомобили'
        ],
        'health' => [
            'id' => 2,
            'title' => 'Здоровье'
        ],
        'science' => [
            'id' => 3,
            'title' => 'Наука и технологии'
        ],
        'society' => [
            'id' => 4,
            'title' => 'Общество'
        ],
        'entertainments' => [
            'id' => 5,
            'title' => 'Развлечения'
        ],
    ];

    /**
     * @return array
     */
    public static function getAllCategories(): array
    {
        return self::$newsCategories;
    }

}
