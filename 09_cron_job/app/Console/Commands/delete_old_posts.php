<?php

namespace App\Console\Commands;

use App\Models\CornLearn;
use Illuminate\Console\Command;

class delete_old_posts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete_old_posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command will delete older post.';

    /**
     * Execute the console command.
     */public function handle()
{
    $corn_learns = CornLearn::where('status',0)->take(1)->get();

    if ($corn_learns->isEmpty()) {
        $this->info('No posts found to delete.');
        return;
    }

    foreach ($corn_learns as $corn) {
        $corn->delete();
        $this->info("Deleted: {$corn_learns->id}");
    }

    $this->info('Posts deleted successfully!');
}
}