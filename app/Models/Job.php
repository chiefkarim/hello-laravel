<?php

namespace App\Models;

class Job
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'teacher', 'salary' => '50k'],
            ['id' => 2, 'title' => 'plumber', 'salary' => '60k'],
            ['id' => 3, 'title' => 'engineer', 'salary' => '10k'],
        ];
    }
}
