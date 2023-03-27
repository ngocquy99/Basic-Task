<?php

namespace App\Console\Commands;

use App\Mail\SignupEmail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        $this->__SendingEmail();
        $this -> info('Demo:cron run successfuly');

    }


    public function __SendingEmail()
    {
       
        $listUser = User::all();
        foreach($listUser as $user ){
            $email = $user->email ;
            $username = $user->username ;
            $data = [
                'username' => $username, 
                'email' => $email,
            ];
            Mail::to(users: $email )->send(new SignupEmail($data));
        }
       
    }
}
