<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class GoogleEmptyTrashCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'google:empty-trash';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Empty remote google trash ';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            Storage::disk('google')->getAdapter()->emptyTrash([]);
            $this->info('Google trush cleared!');
        } catch (\Throwable $th) {
            $this->error($th);
        }
    }
}
