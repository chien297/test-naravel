<?php

namespace App\Console\Commands;

use App\Repositories\Note\NoteRepository;
use App\Repositories\Note\NoteRepositoryInterface;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class getNote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'note:insert';
    protected $noteRepo;
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test insert with command';

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
        $notes = [];

        if (($open = fopen(storage_path() . "/text.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $data = array("name" => $data[0] , "text" => $data[1]);
                $notes[] = $data;
                // dd($datas);
            }

            fclose($open);
        }
        $array = array_chunk($notes,1000);
        foreach ($array as $arr) {
            # code...
            echo DB::table('notes')->insert($arr);
        }
    }
    
}
