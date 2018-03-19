<?php

namespace App\Http\ViewComposers;

use App\Config;
use Illuminate\Contracts\View\View;

class ConfiguracionComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
        $configuracion = Config::find(1);
        $view->with('configuracion', $configuracion);
    }

}



