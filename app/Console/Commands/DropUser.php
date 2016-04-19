<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class DropUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'drop-user {user_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop User';

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
        $userId = $this->argument('user_id');
        $user = User::find($userId);

        if ($user) {
            $user->delete();
            $this->comment("Dropped User, UserId: {$userId}");
        }
        else {
            $this->comment("Wrong UserId: {$userId}");
        }

    }
}
