<?php

namespace App\Console\Commands;

use App\Models\Bill;
use App\Models\State;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class RestorantState extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'restorant:state';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $state = Bill::whereBetween('created_at', [now()->startOfDay()->toDateTimeString(), now()->endOfDay()->toDateTimeString()])->first();
        do{
            $toDayAmount = Bill::whereBetween('created_at', [
                now()->subDay()->startOfDay()->toDateTimeString(), now()->subDay()->endOfDay()->toDateTimeString()
            ])->sum('amount');
            $todayDayOrders = Bill::whereBetween('created_at', [
                now()->subDay()->startOfDay()->toDateTimeString(), now()->subDay()->endOfDay()->toDateTimeString()
            ])->sum('order_id');
        }
        while(!$state);

        try {
            State::create([
                'balance' => $toDayAmount,
                'orders' => $todayDayOrders,
            ]);
            Log::info('State created...');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage() . ' ' . $exception->getTraceAsString());
            return 0;
        }
    }
}
