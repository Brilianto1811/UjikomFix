@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Pricing - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <h2 class="intro-y mr-auto mt-10 text-center text-2xl font-medium">
        Best Price & Services
    </h2>
    <x-base.tab.group>
        <!-- BEGIN: Pricing Tab -->
        <div class="intro-y mt-6 flex justify-center">
            <x-base.tab.list
                class="box mx-auto w-auto overflow-hidden rounded-full"
                variant="pills"
            >
                <x-base.tab
                    id="layout-1-monthly-fees-tab"
                    selected
                >
                    <x-base.tab.button
                        class="w-32 rounded-none py-2 lg:w-40 lg:py-3"
                        as="button"
                    >
                        Monthly Fees
                    </x-base.tab.button>
                </x-base.tab>
                <x-base.tab id="layout-1-annual-fees-tab">
                    <x-base.tab.button
                        class="w-32 rounded-none py-2 lg:w-40 lg:py-3"
                        as="button"
                    >
                        Annual Fees
                    </x-base.tab.button>
                </x-base.tab>
            </x-base.tab.list>
        </div>
        <!-- END: Pricing Tab -->
        <!-- BEGIN: Pricing Content -->
        <div class="mt-10 flex">
            <x-base.tab.panels>
                <x-base.tab.panel
                    class="flex flex-col lg:flex-row"
                    id="layout-1-monthly-fees"
                    selected
                >
                    <div class="intro-y flex flex-1 flex-col justify-center pb-10 text-center sm:px-10 lg:px-5 lg:pb-0">
                        <div class="text-lg font-medium">
                            Monthly Product Pricing
                        </div>
                        <div class="mt-3 text-slate-600 dark:text-slate-500 lg:text-justify">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever.
                            </p>
                            <p class="mt-2">
                                When an unknown printer took a galley of type and scrambled
                                it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged.
                            </p>
                        </div>
                    </div>
                    <div class="intro-y box mb-5 flex-1 py-16 lg:mb-0 lg:ml-5">
                        <x-base.lucide
                            class="mx-auto block h-12 w-12 text-primary"
                            icon="Briefcase"
                        />
                        <div class="mt-10 text-center text-xl font-medium">
                            Business
                        </div>
                        <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
                            1 Domain <span class="mx-1">•</span> 10 Users
                            <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="mx-auto mt-2 px-10 text-center text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </div>
                        <div class="flex justify-center">
                            <div class="relative mx-auto mt-8 text-5xl font-semibold">
                                <span class="absolute left-0 top-0 -ml-4 text-2xl">
                                    $
                                </span>
                                60
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
                    <div class="intro-y box flex-1 py-16 lg:ml-5">
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
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </div>
                        <div class="flex justify-center">
                            <div class="relative mx-auto mt-8 text-5xl font-semibold">
                                <span class="absolute left-0 top-0 -ml-4 text-2xl">
                                    $
                                </span>
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
                </x-base.tab.panel>
                <x-base.tab.panel class="flex flex-col lg:flex-row">
                    <div class="intro-y flex flex-1 flex-col justify-center pb-10 text-center sm:px-10 lg:px-5 lg:pb-0">
                        <div class="text-lg font-medium">
                            Annual Product Pricing
                        </div>
                        <div class="mt-3 text-slate-600 dark:text-slate-500 lg:text-justify">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever.
                            </p>
                            <p class="mt-2">
                                When an unknown printer took a galley of type and scrambled
                                it to make a type specimen book. It has survived not only
                                five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged.
                            </p>
                        </div>
                    </div>
                    <div class="intro-y box mb-5 flex-1 py-16 lg:mb-0 lg:ml-5">
                        <x-base.lucide
                            class="mx-auto block h-12 w-12 text-primary"
                            icon="Briefcase"
                        />
                        <div class="mt-10 text-center text-xl font-medium">
                            Business
                        </div>
                        <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
                            1 Domain <span class="mx-1">•</span> 10 Users
                            <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="mx-auto mt-2 px-10 text-center text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </div>
                        <div class="flex justify-center">
                            <div class="relative mx-auto mt-8 text-5xl font-semibold">
                                <span class="absolute left-0 top-0 -ml-4 text-2xl">
                                    $
                                </span>
                                40
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
                    <div class="intro-y box flex-1 py-16 lg:ml-5">
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
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </div>
                        <div class="flex justify-center">
                            <div class="relative mx-auto mt-8 text-5xl font-semibold">
                                <span class="absolute left-0 top-0 -ml-4 text-2xl">
                                    $
                                </span>
                                90
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
                </x-base.tab.panel>
            </x-base.tab.panels>
        </div>
    </x-base.tab.group>
    <!-- END: Pricing Content -->
    <div class="intro-y box mt-20 px-8 py-12">
        <h2 class="intro-y mr-auto text-center text-2xl font-medium">
            Best Price & Services
        </h2>
        <x-base.tab.group>
            <!-- BEGIN: Pricing Tab -->
            <div class="intro-y mt-6 flex justify-center">
                <x-base.tab.list
                    class="box mx-auto w-auto overflow-hidden rounded-full"
                    variant="pills"
                >
                    <x-base.tab
                        id="layout-2-monthly-fees-tab"
                        selected
                    >
                        <x-base.tab.button
                            class="w-32 rounded-none py-2 lg:w-40 lg:py-3"
                            as="button"
                        >
                            Monthly Fees
                        </x-base.tab.button>
                    </x-base.tab>
                    <x-base.tab id="layout-2-annual-fees-tab">
                        <x-base.tab.button
                            class="w-32 rounded-none py-2 lg:w-40 lg:py-3"
                            as="button"
                        >
                            Annual Fees
                        </x-base.tab.button>
                    </x-base.tab>
                </x-base.tab.list>
            </div>
            <!-- END: Pricing Tab -->
            <!-- BEGIN: Pricing Content -->
            <div class="mt-10 flex">
                <x-base.tab.panels>
                    <x-base.tab.panel
                        class="flex flex-col lg:flex-row"
                        id="layout-2-monthly-fees"
                        selected
                    >
                        <div class="intro-y flex flex-1 flex-col justify-center pb-10 text-center sm:px-10 lg:px-5 lg:pb-0">
                            <div class="text-lg font-medium">
                                Monthly Product Pricing
                            </div>
                            <div class="mt-3 text-slate-600 dark:text-slate-500 lg:text-justify">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever.
                                </p>
                                <p class="mt-2">
                                    When an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.
                                </p>
                            </div>
                        </div>
                        <div
                            class="intro-y flex-1 border-b border-t border-slate-200/60 py-16 dark:border-darkmode-400 lg:ml-8 lg:border-b-0 lg:border-l lg:border-r lg:border-t-0">
                            <x-base.lucide
                                class="mx-auto block h-12 w-12 text-primary"
                                icon="Briefcase"
                            />
                            <div class="mt-10 text-center text-xl font-medium">
                                Business
                            </div>
                            <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
                                1 Domain <span class="mx-1">•</span> 10 Users
                                <span class="mx-1">•</span> 20 Copies
                            </div>
                            <div class="mx-auto mt-2 px-10 text-center text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                                    <span class="absolute left-0 top-0 -ml-4 text-2xl">
                                        $
                                    </span>
                                    60
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
                        <div class="intro-y flex-1 py-16">
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
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                                    <span class="absolute left-0 top-0 -ml-4 text-2xl">
                                        $
                                    </span>
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
                    </x-base.tab.panel>
                    <x-base.tab.panel class="flex flex-col lg:flex-row">
                        <div
                            class="intro-y flex flex-1 flex-col justify-center pb-10 text-center sm:px-10 lg:px-5 lg:pb-0">
                            <div class="text-lg font-medium">
                                Annual Product Pricing
                            </div>
                            <div class="mt-3 text-slate-600 lg:text-justify">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever.
                                </p>
                                <p class="mt-2">
                                    When an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.
                                </p>
                            </div>
                        </div>
                        <div
                            class="intro-y flex-1 border-b border-t border-slate-200/60 py-16 dark:border-darkmode-400 lg:ml-8 lg:border-b-0 lg:border-l lg:border-r lg:border-t-0">
                            <x-base.lucide
                                class="mx-auto block h-12 w-12 text-primary"
                                icon="Briefcase"
                            />
                            <div class="mt-10 text-center text-xl font-medium">
                                Business
                            </div>
                            <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
                                1 Domain <span class="mx-1">•</span> 10 Users
                                <span class="mx-1">•</span> 20 Copies
                            </div>
                            <div class="mx-auto mt-2 px-10 text-center text-slate-500">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                                    <span class="absolute left-0 top-0 -ml-4 text-2xl">
                                        $
                                    </span>
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
                        <div class="intro-y flex-1 py-16">
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
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </div>
                            <div class="flex justify-center">
                                <div class="relative mx-auto mt-8 text-5xl font-semibold">
                                    <span class="absolute left-0 top-0 -ml-4 text-2xl">
                                        $
                                    </span>
                                    210
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
                    </x-base.tab.panel>
                </x-base.tab.panels>
            </div>
            <!-- END: Pricing Content -->
        </x-base.tab.group>
    </div>
@endsection
