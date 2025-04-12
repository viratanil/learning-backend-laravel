<?php

use Illuminate\Foundation\Inspiring;
use App\Console\Commands\delete_old_posts;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::command(delete_old_posts::class)->everyTenSeconds();
