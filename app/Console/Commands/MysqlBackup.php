<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class MysqlBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mysql:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filename = '/app/Backup/backup-'. Carbon::now()->format('Y-m-d') .".sql";
        $command = 'mysqldump --user='. env('DB_USERNAME') . ' --password='. env('DB_PASSWORD') .' --host='. env('DB_HOST') .' '. env('DB_DATABASE') .' > '. storage_path().$filename;

        exec($command);
    }
}
