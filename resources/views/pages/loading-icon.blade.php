@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Icon - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">SVG Loaders</h2>
    </div>
    <!-- BEGIN: Icon List -->
    <div class="intro-y box mt-5 grid grid-cols-12 gap-y-6 px-5 py-8 sm:gap-6">
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="audio"
            />
            <div class="mt-2 text-center text-xs">audio</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="ball-triangle"
            />
            <div class="mt-2 text-center text-xs">ball-triangle</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="bars"
            />
            <div class="mt-2 text-center text-xs">bars</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="circles"
            />
            <div class="mt-2 text-center text-xs">circles</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="grid"
            />
            <div class="mt-2 text-center text-xs">grid</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="hearts"
            />
            <div class="mt-2 text-center text-xs">hearts</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="oval"
            />
            <div class="mt-2 text-center text-xs">oval</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="puff"
            />
            <div class="mt-2 text-center text-xs">puff</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="rings"
            />
            <div class="mt-2 text-center text-xs">rings</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="spinning-circles"
            />
            <div class="mt-2 text-center text-xs">spinning-circles</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="tail-spin"
            />
            <div class="mt-2 text-center text-xs">tail-spin</div>
        </div>
        <div class="col-span-6 flex flex-col items-center justify-end sm:col-span-3 xl:col-span-2">
            <x-base.loading-icon
                class="h-8 w-8"
                icon="three-dots"
            />
            <div class="mt-2 text-center text-xs">three-dots</div>
        </div>
    </div>
    <!-- END: Icon List -->
@endsection
