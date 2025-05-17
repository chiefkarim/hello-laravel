<?php

namespace App\Models;

use Illuminate\Support\Arr;

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

    public static function findById(int $id): array
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}
