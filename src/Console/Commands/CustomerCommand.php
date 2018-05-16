<?php namespace Bantenprov\Customer\Console\Commands;

use Illuminate\Console\Command;

/**
 * The CustomerCommand class.
 *
 * @package Bantenprov\Customer
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CustomerCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:customer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\Customer package';

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
        $this->info('Welcome to command for Bantenprov\Customer package');
    }
}
