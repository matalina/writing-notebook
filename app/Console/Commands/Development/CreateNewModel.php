<?php

namespace App\Console\Commands\Development;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class CreateNewModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:rim {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Model with corresponding Interface and Repository';

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
        $name = $this->argument('name');

        $parts = explode('\\', $name);

        $model = array_pop($parts);
        $namespace = implode('\\', $parts);


        // create Model file
        $this->call('make:model',[
            'name' => 'Models\\'.$namespace.'\\'.$model
        ]);

        // create Interface file
        $this->call('make:interface', [
            'name' => $namespace.'\\'.$model.'Interface'
        ]);

        // create Repository file
        $this->call('make:repository', [
            'name' => $namespace.'\\'.$model.'Repository',
            'interface' => $model.'Interface'
        ]);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the model.'],
        ];
    }
}
