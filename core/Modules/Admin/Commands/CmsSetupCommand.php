<?php

namespace Core\Modules\Admin\Commands;

use Illuminate\Console\Command;

class CmsSetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup CMS';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // DATABASE MIGRATE
        $this::call('migrate', [
            '--path' => 'Core\Modules\Database/Migrations'
        ]);

        //RUN CMS SEEDER
       $this::call('db:seed', [
           '--class' => 'Core\Modules\Database\Seeds\SampleAuthSeeder'
       ]);
    }
}
