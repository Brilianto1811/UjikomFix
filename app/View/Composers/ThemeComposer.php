<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ThemeComposer
{
    /**
     * Bind menu to the view.
     */
    public function compose(View $view): void
    {
        if (!is_null(request()->route())) {
            $activeTheme = $this->activeTheme($view);
            $view->with('activeTheme', $activeTheme);
        }
    }

    /**
     * Selected theme.
     */
    public function activeTheme($view): string
    {
        if (isset($view->activeTheme)) {
            return $view->activeTheme;
        } else if (request()->has('active-theme')) {
            return request()->query('active-theme');
        }

        return session()->has('activeTheme') ? session('activeTheme') : "rubick";
    }
}
