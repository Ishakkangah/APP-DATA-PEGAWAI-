<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class refreshDatabaseCommand extends Command
{
    protected $signature = 'db:refresh';

    protected $description = 'This command is usefull to refresh all and seed the default data!';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->call('migrate:refresh');
        $this->call('db:seed');
        $this->line('This command has been run');
        return 0;
    }
}
