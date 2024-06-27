<?php

namespace App\Jobs;

use App\Events\RandomDataGenerated;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateRandomData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $data = array_map(function () {
            return rand(1000, 9999);
        }, range(1, 10));

        event(new RandomDataGenerated($data));
    }
}
