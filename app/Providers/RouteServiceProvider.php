<?php


public function map()
{
    $this->mapApiRoutes();
    $this->mapWebRoutes();
}

protected function mapApiRoutes()
{
    Route::prefix('api')
         ->middleware('api')
         ->group(base_path('routes/api.php'));
}
