<?php

namespace LaravelFrontendPresets\UIKit3Preset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class UIKit3PresetServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    UiCommand::macro('uikit3', function ($command) {
      $command->info('UIKit3 scaffolding installed successfully.');
      $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
      UIKit3Preset::install();
    });

    UiCommand::macro('uikit3-auth', function ($command) {
      $command->info('UIKit3 auth scaffolding installed successfully.');
      UIKit3Preset::addAuthTemplates();
    });
  }
}
