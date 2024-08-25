@props(['as' => 'div', 'variant' => null, 'dismissible' => null])

@pushOnce('vendors')
    @vite('resources/js/vendors/alert.js')
@endPushOnce

@php
    // Main Colors
    $primary = [
        'bg-primary border-primary text-white', // Default
        'dark:border-primary', // Dark
    ];
    $secondary = [
        'bg-secondary/70 border-secondary/70 text-slate-500', // Default
        'dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300', // Dark mode
    ];
    $success = [
        'bg-success border-success text-slate-900', // Default
        'dark:border-success', // Dark mode
    ];
    $warning = [
        'bg-warning border-warning text-slate-900', // Default
        'dark:border-warning', // Dark mode
    ];
    $pending = [
        'bg-pending border-pending text-white', // Default
        'dark:border-pending', // Dark mode
    ];
    $danger = [
        'bg-danger border-danger text-white', // Default
        'dark:border-danger', // Dark mode
    ];
    $dark = [
        'bg-dark border-dark text-white', // Default
        'dark:bg-darkmode-800 dark:border-transparent dark:text-slate-300', // Dark mode
    ];

    // Outline
    $outlinePrimary = [
        'border-primary text-primary', // Default
        'dark:border-primary', // Dark mode
    ];
    $outlineSecondary = [
        'border-secondary text-slate-500', // Default
        'dark:border-darkmode-100/40 dark:text-slate-300', // Dark mode
    ];
    $outlineSuccess = [
        'border-success text-success dark:border-success', // Default
        'dark:border-success', // Dark mode
    ];
    $outlineWarning = [
        'border-warning text-warning', // Default
        'dark:border-warning', // Dark mode
    ];
    $outlinePending = [
        'border-pending text-pending', // Default
        'dark:border-pending', // Dark mode
    ];
    $outlineDanger = [
        'border-danger text-danger', // Default
        'dark:border-danger', // Dark mode
    ];
    $outlineDark = [
        'border-dark text-dark', // Default
        'dark:border-darkmode-800 dark:text-slate-300', // Dark mode
    ];

    // Soft Color
    $softPrimary = [
        'bg-primary border-primary bg-opacity-20 border-opacity-5 text-primary', // Default
        'dark:border-opacity-100 dark:bg-opacity-20 dark:border-primary', // Dark mode
    ];
    $softSecondary = [
        'bg-slate-300 border-secondary bg-opacity-10 text-slate-500', // Default
        'dark:bg-darkmode-100/20 dark:border-darkmode-100/30 dark:text-slate-300', // Dark mode
    ];
    $softSuccess = [
        'bg-success border-success bg-opacity-20 border-opacity-5 text-success', // Default
        'dark:border-success dark:border-opacity-20', // Dark mode
    ];
    $softWarning = [
        'bg-warning border-warning bg-opacity-20 border-opacity-5 text-warning', // Default
        'dark:border-warning dark:border-opacity-20', // Dark mode
    ];
    $softPending = [
        'bg-pending border-pending bg-opacity-20 border-opacity-5 text-pending', // Default
        'dark:border-pending dark:border-opacity-20', // Dark mode
    ];
    $softDanger = [
        'bg-danger border-danger bg-opacity-20 border-opacity-5 text-danger', // Default
        'dark:border-danger dark:border-opacity-20', // Dark mode
    ];
    $softDark = [
        'bg-dark border-dark bg-opacity-20 border-opacity-5 text-dark', // Default
        'dark:bg-darkmode-800/30 dark:border-darkmode-800/60 dark:text-slate-300', // Dark mode
    ];
@endphp

<{{ $as }}
    role="alert"
    {{ $attributes->class(
            merge([
                'alert relative border rounded-md px-5 py-4',
                $variant == 'primary' ? $primary : null,
                $variant == 'secondary' ? $secondary : null,
                $variant == 'success' ? $success : null,
                $variant == 'warning' ? $warning : null,
                $variant == 'pending' ? $pending : null,
                $variant == 'danger' ? $danger : null,
                $variant == 'dark' ? $dark : null,
                $variant == 'outline-primary' ? $outlinePrimary : null,
                $variant == 'outline-secondary' ? $outlineSecondary : null,
                $variant == 'outline-success' ? $outlineSuccess : null,
                $variant == 'outline-warning' ? $outlineWarning : null,
                $variant == 'outline-pending' ? $outlinePending : null,
                $variant == 'outline-danger' ? $outlineDanger : null,
                $variant == 'outline-dark' ? $outlineDark : null,
                $variant == 'soft-primary' ? $softPrimary : null,
                $variant == 'soft-secondary' ? $softSecondary : null,
                $variant == 'soft-success' ? $softSuccess : null,
                $variant == 'soft-warning' ? $softWarning : null,
                $variant == 'soft-pending' ? $softPending : null,
                $variant == 'soft-danger' ? $softDanger : null,
                $variant == 'soft-dark' ? $softDark : null,
                $dismissible ? 'pl-5 pr-16' : null,
            ]),
        )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
