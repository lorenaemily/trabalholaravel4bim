<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define os comandos customizados.
     */
    protected $commands = [
        // Registre aqui seu comando
        \App\Console\Commands\DeleteOldAppointments::class,
    ];

    /**
     * Define o agendamento de tarefas (cron)
     */
    protected function schedule(Schedule $schedule)
    {
        // Executa diariamente
        $schedule->command('agendamentos:delete-old')->daily();
    }

    /**
     * Registra os comandos do console da aplicação.
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
