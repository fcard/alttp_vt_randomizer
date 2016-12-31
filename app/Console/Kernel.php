<?php namespace ALttP\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {
	protected $commands = [
		Commands\FindUncleText::class,
		Commands\Randomize::class,
		Commands\UpdateResetJson::class,
	];

	protected function commands() {
		require base_path('routes/console.php');
	}
}