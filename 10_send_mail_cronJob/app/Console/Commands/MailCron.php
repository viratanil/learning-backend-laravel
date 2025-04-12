<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use  Mail;

class MailCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:mail-cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'sent mail ........';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = array('data'=>'cron testing');
        Mail::send('mail',$data,function($message){
            $message->to('vaofficial630@gmail.com')->subject('Cron texting mail by Virat anil ');
        }) ;
    }
}
