<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;

class FileTrashing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'file:trash';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $barang = DB::table('barang')->select('foto')->get();
        
    }
}
