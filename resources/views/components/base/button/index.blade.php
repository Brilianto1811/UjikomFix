@props(['as' => 'button', 'variant' => null, 'elevated' => null, 'size' => null, 'rounded' => null])

@php
    // General Styles
    $generalStyles = [
        'transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer', // Default
        'focus:ring-4 focus:ring-primary focus:ring-opacity-20', // On focus
        'focus-visible:outline-none', // On focus visible
        'dark:focus:ring-slate-700 dark:focus:ring-opacity-50', // Dark mode
        '[&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90', // On hover and not disabled
        '[&:not(button)]:text-center', // Not a button element
        'disabled:opacity-70 disabled:cursor-not-allowed', // Disabled
    ];

    // Sizes
    $small = ['text-xs py-1.5 px-2'];
    $large = ['text-lg py-1.5 px-4'];

    // Main Colors
    $primary = [
        'bg-primary border-primary text-white dark:border-primary', // Default
    ];
    $secondary = [
        'bg-secondary/70 border-secondary/70 text-slate-500', // Default
        'dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300', // Dark mode
        '[&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100', // On hover and not disabled
        '[&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80', // On hover and not disabled in dark mode
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
        '[&:hover:not(:disabled)]:dark:dark:bg-darkmode-800/70', // On hover and not disabled in dark mode
    ];

    // Social Media
    $facebook = ['bg-[#3b5998] border-[#3b5998] text-white dark:border-[#3b5998]'];
    $twitter = ['bg-[#4ab3f4] border-[#4ab3f4] text-white dark:border-[#4ab3f4]'];
    $instagram = ['bg-[#517fa4] border-[#517fa4] text-white dark:border-[#517fa4]'];
    $linkedin = ['bg-[#0077b5] border-[#0077b5] text-white dark:border-[#0077b5]'];

    // Outline
    $outlinePrimary = [
        'border-primary text-primary', // Default
        'dark:border-primary', // Dark mode
        '[&:hover:not(:disabled)]:bg-primary/10', // On hover and not disabled
    ];
    $outlineSecondary = [
        'border-secondary text-slate-500', // Default
        'dark:border-darkmode-100/40 dark:text-slate-300', // Dark mode
        '[&:hover:not(:disabled)]:bg-secondary/20', // On hover and not disabled
        '[&:hover:not(:disabled)]:dark:bg-darkmode-100/10', // On hover and not disabled in dark mode
    ];
    $outlineSuccess = [
        'border-success text-success', // Default
        'dark:border-success', // Dark mode
        '[&:hover:not(:disabled)]:bg-success/10', // On hover and not disabled
    ];
    $outlineWarning = [
        'border-warning text-warning', // Default
        'dark:border-warning', // Dark mode
        '[&:hover:not(:disabled)]:bg-warning/10', // On hover and not disabled
    ];
    $outlinePending = [
        'border-pending text-pending', // Default
        'dark:border-pending', // Dark mode
        '[&:hover:not(:disabled)]:bg-pending/10', // On hover and not disabled
    ];
    $outlineDanger = [
        'border-danger text-danger', // Default
        'dark:border-danger', // Dark mode
        '[&:hover:not(:disabled)]:bg-danger/10', // On hover and not disabled
    ];
    $outlineDark = [
        'border-dark text-dark', // Default
        'dark:border-darkmode-800 dark:text-slate-300', // Dark mode
        '[&:hover:not(:disabled)]:bg-darkmode-800/30', // On hover and not disabled
        '[&:hover:not(:disabled)]:dark:bg-opacity-30', // On hover and not disabled in dark mode
    ];

    // Soft Color
    $softPrimary = [
        'bg-primary border-primary bg-opacity-20 border-opacity-5 text-primary', // Default
        'dark:border-opacity-100 dark:bg-opacity-20 dark:border-primary', // Dark mode
        '[&:hover:not(:disabled)]:bg-opacity-10 [&:hover:not(:disabled)]:border-opacity-10', // On hover and not disabled
        '[&:hover:not(:disabled)]:dark:border-opacity-60', // On hover and not disabled in dark mode
    ];
    $softSecondary = [
        'bg-slate-300 border-secondary bg-opacity-20 text-slate-500', // Default
        'dark:bg-darkmode-100/20 dark:border-darkmode-100/30 dark:text-slate-300', // Dark mode
        '[&:hover:not(:disabled)]:bg-opacity-10', // On hover and not disabled
        '[&:hover:not(:disabled)]:dark:bg-darkmode-100/10 [&:hover:not(:disabled)]:dark:border-darkmode-100/20', // On hover and not disabled in dark mode
    ];
    $softSuccess = [
        'bg-success border-success bg-opacity-20 border-opacity-5 text-success', // Default
        'dark:border-success dark:border-opacity-20', // Dark mode
        '[&:hover:not(:disabled)]:bg-opacity-10 [&:hover:not(:disabled)]:border-opacity-10', // On hover and not disabled
    ];
    $softWarning = [
        'bg-warning border-warning bg-opacity-20 border-opacity-5 text-warning', // Default
        'dark:border-warning dark:border-opacity-20', // Dark mode
        '[&:hover:not(:disabled)]:bg-opacity-10 [&:hover:not(:disabled)]:border-opacity-10', // On hover and not disabled
    ];
    $softPending = [
        'bg-pending border-pending bg-opacity-20 border-opacity-5 text-pending', // Default
        'dark:border-pending dark:border-opacity-20', // Dark mode
        '[&:hover:not(:disabled)]:bg-opacity-10 [&:hover:not(:disabled)]:border-opacity-10', // On hover and not disabled
    ];
    $softDanger = [
        'bg-danger border-danger bg-opacity-20 border-opacity-5 text-danger', // Default
        'dark:border-danger dark:border-opacity-20', // Dark mode
        '[&:hover:not(:disabled)]:bg-opacity-10 [&:hover:not(:disabled)]:border-opacity-10', // On hover and not disabled
    ];
    $softDark = [
        'bg-dark border-dark bg-opacity-20 border-opacity-5 text-dark', // Default
        'dark:bg-darkmode-800/30 dark:border-darkmode-800/60 dark:text-slate-300', // Dark mode
        '[&:hover:not(:disabled)]:bg-opacity-10 [&:hover:not(:disabled)]:border-opacity-10', // On hover and not disabled
        '[&:hover:not(:disabled)]:dark:bg-darkmode-800/50 [&:hover:not(:disabled)]:dark:border-darkmode-800', // On hover and not disabled in dark mode
    ];
@endphp

<{{ $as }}
    data-tw-merge
    {{ $attributes->class(
            merge([
                $generalStyles,
                $size == 'sm' ? $small : null,
                $size == 'lg' ? $large : null,
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
                $variant == 'facebook' ? $facebook : null,
                $variant == 'twitter' ? $twitter : null,
                $variant == 'instagram' ? $instagram : null,
                $variant == 'linkedin' ? $linkedin : null,
                $rounded ? 'rounded-full' : null,
                $elevated ? 'shadow-md' : null,
                $attributes->whereStartsWith('class')->first(),
            ]),
        )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
