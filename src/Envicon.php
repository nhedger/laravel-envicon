<?php

namespace Hedger\Envicon;

use Illuminate\Support\Facades\App;

class Envicon
{
    /** @var array */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Returns the URL of the favicon for the runtime environment
     */
    public function url()
    {
        return $this->for(App::environment());
    }

    /**
     * Returns the URL of the favicon for the given environment
     *
     * @param string $env name of the environment, as as defined in the config file
     * @return string URL to the favicon, or the default favicon URL if the environment does not exist
     */
    public function for($env)
    {
        return asset($this->config['environments'][$env] ?? $this->config['default_favicon']);
    }
}
