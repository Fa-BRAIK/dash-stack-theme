<?php

namespace Nuxtifyts\DashStackTheme\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand('filament-dash-stack-theme:install')]
class FilamentDashStackThemeInstallCommand extends Command
{
    /**
     * @var 0
     */
    public const SUCCESS = 0;

    /**
     * @var 1
     */
    public const FAILURE = 1;

    /**
     * @var string
     */
    protected $signature = 'filament-dash-stack-theme:install';

    /**
     * @var string
     */
    protected $description = 'Install the Dash Stack theme for Filament';

    /**
     * @return 1|0
     */
    public function handle(): int
    {
        $this->info('Installing the Dash Stack theme...');

        if (($npmVersionResult = Process::run('npm -v'))->failed()) {
            $this->error('NPM is required to install the Dash Stack theme.');

            return static::FAILURE;
        }

        $this->info("Using NPM version {$npmVersionResult->output()} to installed dependencies.");

        $npmInstallResult = Process::run('npm install tailwindcss @tailwindcss/vite @tailwindcss/forms @tailwindcss/typography --save-dev');

        $this->info($npmInstallResult->output());

        $this->info('Running NPM build...');

        $npmBuildResult = Process::run('npm install && npm run build');

        $this->info($npmBuildResult->output());

        return static::SUCCESS;
    }
}
