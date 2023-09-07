<?php

namespace Heddiyoussouf\Mailtracker;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MailTrackerProvider extends ServiceProvider
{
    public function boot(){

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->registerRoutes();
        $this->registerAssets();
        $this->registerConfig();
        $this->registerMailtracker();


    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }
    protected function registerConfig()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->publishes([
                __DIR__.'/../config/mailtracker.php' => config_path('mailtracker.php'),
            ]);
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
    private function registerAssets(){
        $this->publishes([
            __DIR__.'/../assets' => public_path('/assets'),
        ], 'assets');
    }
    public function registerMailtracker(){
        Blade::directive('mailtracker', function ($input) {
            return "<?php echo '<img src=\"' . $input . '\" class=\"mailtracker-image\" id=\"mailtracker-image\">'; ?>";
        });
    }

}
