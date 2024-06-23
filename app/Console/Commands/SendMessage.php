<?php

namespace App\Console\Commands;

    use App\Events\MessageSent;
    use Illuminate\Console\Command;

class SendMessage extends Command
{
    protected $signature = 'event:send-message {message}';
    protected $description = 'Send the Message event';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $message = $this->argument('message');
        event(new MessageSent($message));
        $this->info('Event dispatched with message: ' . $message);
    }
}
