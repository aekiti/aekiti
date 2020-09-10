<?php

namespace App\Providers;

use App\Model\User;
use App\Model\Story;
use App\Model\Project;
use App\Model\Workshop;
use App\Model\Learn\Track;
use App\Observers\UserObserver;
use App\Observers\StoryObserver;
use App\Observers\ProjectObserver;
use App\Observers\WorkshopObserver;
use App\Observers\Learn\TrackObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Workshop::observe(WorkshopObserver::class);
    Track::observe(TrackObserver::class);
    Project::observe(ProjectObserver::class);
    Story::observe(StoryObserver::class);
    User::observe(UserObserver::class);
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }
}
