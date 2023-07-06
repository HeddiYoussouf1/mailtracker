<?php

namespace Heddiyoussouf\Mailtracker;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MailTrackerProvider extends ServiceProvider
{
    public function boot(){
        $this->publishes([
            __DIR__.'/../config/mailtracker.php' => config_path('mailtracker.php'),
        ]);
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->registerRoutes();
        Blade::directive('mailtracker', function ($input) {

            return "<?php echo '<img src=' . $input . ' width=\"1\" height=\"1\">'; ?>";
        });
    }

    public function register(){

    }
    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    /**
     * Get the Press route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            
            'namespace' => 'Heddiyoussouf\Mailtracker\Http\Controllers',
        ];
    }

}
