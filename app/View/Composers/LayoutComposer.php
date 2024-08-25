<?php

namespace App\View\Composers;

use Illuminate\View\View;

class LayoutComposer
{
    /**
     * Bind menu to the view.
     */
    public function compose(View $view): void
    {
        if (!is_null(request()->route())) {
            $activeLayout = $this->activeLayout($view);
            $view->with('activeLayout', $activeLayout);
        }
    }

    /**
     * Selected layout.
     */
    public function activeLayout($view): string
    {
        if (isset($view->activeLayout)) {
            return $view->activeLayout;
        } else if (request()->has('active-layout')) {
            return request()->query('active-layout');
        }

        return session()->has('activeLayout') ? session('activeLayout') : "side-menu";
    }
}
