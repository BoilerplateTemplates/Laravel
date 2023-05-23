<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class CustomSettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $output = [];

        if (Schema::hasTable('settings')) {
            $settings = Setting::all()->pluck('value', 'name')->toArray();

            foreach ($settings as $key => $value) {
                $temp = explode('.', $key);

                // Return boolean values if true or false
                if ($value === 'true' || $value === 'false') {
                    $output[$temp[0]][$temp[1]] = $value === 'true';
                } else {
                    $output[$temp[0]][$temp[1]] = $value;
                }
            }
        }

        // Load configurations from database and merge with static environment variables
        config(['boilerplate' => array_merge(config('boilerplate'), $output)]);

        seo()
            ->site('Laravel Boilerplate')
            ->title(
                default: 'Laravel Boilerplate',
                modify: fn (string $title) => $title . ' | Laravel Boilerplate'
            )
            ->description(default: 'Laravel Boilerplate')
            ->twitterSite('boilerplate');
    }
}
