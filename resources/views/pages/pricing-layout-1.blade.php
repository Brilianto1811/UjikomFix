@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Pricing - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Pricing Layout</h2>
    </div>
    <!-- BEGIN: Pricing Layout -->
    <div class="intro-y box mt-5 flex flex-col lg:flex-row">
        <div class="intro-y flex-1 px-5 py-16">
            <x-base.lucide
                class="mx-auto block h-12 w-12 text-primary"
                icon="CreditCard"
            />
            <div class="mt-10 text-center text-xl font-medium">
                Basic Plan
            </div>
            <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
                1 Domain <span class="mx-1">•</span> 10 Users
                <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="mx-auto mt-2 px-10 text-center text-slate-500">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
            </div>
            <div class="flex justify-center">
                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                    <span class="absolute left-0 top-0 -ml-4 text-2xl">$</span> 35
                </div>
            </div>
            <x-base.button
                class="mx-auto mt-8 block px-4 py-3"
                type="button"
                variant="primary"
                rounded
            >
                PURCHASE NOW
            </x-base.button>
        </div>
        <div
            class="intro-y flex-1 border-b border-t border-slate-200/60 p-5 py-16 dark:border-darkmode-400 lg:border-b-0 lg:border-l lg:border-r lg:border-t-0">
            <x-base.lucide
                class="mx-auto block h-12 w-12 text-primary"
                icon="Briefcase"
            />
            <div class="mt-10 text-center text-xl font-medium">Business</div>
            <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
                1 Domain <span class="mx-1">•</span> 10 Users
                <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="mx-auto mt-2 px-10 text-center text-slate-500">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
            </div>
            <div class="flex justify-center">
                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                    <span class="absolute left-0 top-0 -ml-4 text-2xl">$</span> 60
                </div>
            </div>
            <x-base.button
                class="mx-auto mt-8 block px-4 py-3"
                type="button"
                variant="primary"
                rounded
            >
                PURCHASE NOW
            </x-base.button>
        </div>
        <div class="intro-y flex-1 px-5 py-16">
            <x-base.lucide
                class="mx-auto block h-12 w-12 text-primary"
                icon="ShoppingBag"
            />
            <div class="mt-10 text-center text-xl font-medium">
                Enterprise
            </div>
            <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
                1 Domain <span class="mx-1">•</span> 10 Users
                <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="mx-auto mt-2 px-10 text-center text-slate-500">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
            </div>
            <div class="flex justify-center">
                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                    <span class="absolute left-0 top-0 -ml-4 text-2xl">$</span>
                    120
                </div>
            </div>
            <x-base.button
                class="mx-auto mt-8 block px-4 py-3"
                type="button"
                variant="primary"
                rounded
            >
                PURCHASE NOW
            </x-base.button>
        </div>
    </div>
    <!-- END: Pricing Layout -->
    <!-- BEGIN: Pricing Layout -->
    <div class="intro-y box mt-5 flex flex-col lg:flex-row">
        <div class="intro-y flex-1 px-5 py-16">
            <x-base.lucide
                class="mx-auto block h-12 w-12 text-primary"
                icon="Activity"
            />
            <div class="mt-10 text-center text-xl font-medium">
                Basic Plan
            </div>
            <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
                1 Domain <span class="mx-1">•</span> 10 Users
                <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="mx-auto mt-2 px-10 text-center text-slate-500">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
            </div>
            <div class="flex justify-center">
                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                    <span class="absolute left-0 top-0 -ml-4 text-2xl">$</span> 35
                </div>
            </div>
            <x-base.button
                class="mx-auto mt-8 block px-4 py-3"
                type="button"
                variant="primary"
                rounded
            >
                PURCHASE NOW
            </x-base.button>
        </div>
        <div
            class="intro-y flex-1 border-b border-t border-slate-200/60 px-5 py-16 dark:border-darkmode-400 lg:border-b-0 lg:border-l lg:border-r lg:border-t-0">
            <x-base.lucide
                class="mx-auto block h-12 w-12 text-primary"
                icon="Box"
            />
            <div class="mt-10 text-center text-xl font-medium">Business</div>
            <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
                1 Domain <span class="mx-1">•</span> 10 Users
                <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="mx-auto mt-2 px-10 text-center text-slate-500">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
            </div>
            <div class="flex justify-center">
                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                    <span class="absolute left-0 top-0 -ml-4 text-2xl">$</span> 60
                </div>
            </div>
            <x-base.button
                class="mx-auto mt-8 block px-4 py-3"
                type="button"
                variant="primary"
                rounded
            >
                PURCHASE NOW
            </x-base.button>
        </div>
        <div class="intro-y flex-1 px-5 py-16">
            <x-base.lucide
                class="mx-auto block h-12 w-12 text-primary"
                icon="Send"
            />
            <div class="mt-10 text-center text-xl font-medium">
                Enterprise
            </div>
            <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
                1 Domain <span class="mx-1">•</span> 10 Users
                <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="mx-auto mt-2 px-10 text-center text-slate-500">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
            </div>
            <div class="flex justify-center">
                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                    <span class="absolute left-0 top-0 -ml-4 text-2xl">$</span>
                    120
                </div>
            </div>
            <x-base.button
                class="mx-auto mt-8 block px-4 py-3"
                type="button"
                variant="primary"
                rounded
            >
                PURCHASE NOW
            </x-base.button>
        </div>
    </div>
    <!-- END: Pricing Layout -->
@endsection
