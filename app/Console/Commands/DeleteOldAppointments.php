<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Agendamento;
use Carbon\Carbon;

class DeleteOldAppointments extends Command
{
    protected $signature = 'agendamentos:delete-old';
    protected $description = 'Remove agendamentos com data já passada';

    public function handle()
    {
        $deleted = Agendamento::where('data', '<', Carbon::now())->delete();

        $this->info("$deleted agendamentos removidos.");
        return Command::SUCCESS;
    }
}
