<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add user';

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
     * @return int
     */
    public function handle()
    {
        DB::table('users')->insert([
            'name' => 'bai viet 2',
            'username' => 'Noi dung cua bai viet 2',
            'email' => 'emailtestcro2n@gmail.com',
            'password' => '11111111'
        ]);
        $this -> info('Demo:cron run successfuly');
    }
}
