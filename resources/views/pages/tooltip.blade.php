@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Tooltip - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Tooltip</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Tooltip -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Basic Tooltip
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-1">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-1"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="text-center">
                            <x-base.tippy
                                as="x-base.button"
                                variant="primary"
                                content="This is awesome tooltip example!"
                            >
                                Show Tooltip
                            </x-base.tippy>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <x-base.tippy
                                    as="x-base.button"
                                    variant="primary"
                                    content="This is awesome tooltip example!"
                                >
                                    Show Tooltip
                                </x-base.tippy>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Basic Tooltip -->
            <!-- BEGIN: On CLick Tooltip -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        On Click Tooltip
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-2">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-2"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="text-center">
                            <x-base.tippy
                                data-trigger="click"
                                as="x-base.button"
                                variant="primary"
                                content="This is awesome tooltip example!"
                            >
                                Show Tooltip
                            </x-base.tippy>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <x-base.tippy
                                    data-trigger="click"
                                    as="x-base.button"
                                    variant="primary"
                                    content="This is awesome tooltip example!"
                                >
                                    Show Tooltip
                                </x-base.tippy>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: On CLick Tooltip -->
            <!-- BEGIN: Light Tooltip -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Light Tooltip
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-3">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-3"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="text-center">
                            <x-base.tippy
                                data-theme="light"
                                as="x-base.button"
                                variant="primary"
                                content="This is awesome tooltip example!"
                            >
                                Show Tooltip
                            </x-base.tippy>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <x-base.tippy
                                    data-theme="light"
                                    as="x-base.button"
                                    variant="primary"
                                    content="This is awesome tooltip example!"
                                >
                                    Show Tooltip
                                </x-base.tippy>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Light Tooltip -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Custom Content Tooltip -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Custom Tooltip Content
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-4">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-4"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <!-- BEGIN: Custom Tooltip Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tooltip="custom-tooltip-content"
                                variant="primary"
                            >
                                Show Tooltip
                            </x-base.button>
                        </div>
                        <!-- END: Custom Tooltip Toggle -->
                        <!-- BEGIN: Custom Tooltip Content -->
                        <div class="tooltip-content">
                            <x-base.tippy-content to="custom-tooltip-content">
                                <div class="relative flex items-center py-1">
                                    <div class="image-fit h-12 w-12">
                                        <img
                                            class="rounded-full"
                                            src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium leading-relaxed dark:text-slate-200">
                                            {{ $fakers[0]['users'][0]['name'] }}
                                        </div>
                                        <div class="text-slate-500 dark:text-slate-400">
                                            Tailwind Admin Dashboard Template
                                        </div>
                                    </div>
                                </div>
                            </x-base.tippy-content>
                        </div>
                        <!-- END: Custom Tooltip Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Custom Tooltip Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tooltip="custom-tooltip-content"
                                    variant="primary"
                                >
                                    Show Tooltip
                                </x-base.button>
                            </div>
                            <!-- END: Custom Tooltip Toggle -->
                            <!-- BEGIN: Custom Tooltip Content -->
                            <div class="tooltip-content">
                                <x-base.tippy-content to="custom-tooltip-content">
                                    <div class="relative flex items-center py-1">
                                        <div class="image-fit h-12 w-12">
                                            <img
                                                class="rounded-full"
                                                src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                                alt="Midone - Tailwind Admin Dashboard Template"
                                            />
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium leading-relaxed dark:text-slate-200">
                                                {{ $fakers[0]['users'][0]['name'] }}
                                            </div>
                                            <div class="text-slate-500 dark:text-slate-400">
                                                Tailwind Admin Dashboard Template
                                            </div>
                                        </div>
                                    </div>
                                </x-base.tippy-content>
                            </div>
                            <!-- END: Custom Tooltip Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Custom Content Tooltip -->
            <!-- BEGIN: Chart Tooltip -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Chart Tooltip
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-5">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-5"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <!-- BEGIN: Custom Tooltip Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tooltip="chart-tooltip"
                                variant="primary"
                            >
                                Show Tooltip
                            </x-base.button>
                        </div>
                        <!-- END: Custom Tooltip Toggle -->
                        <!-- BEGIN: Custom Tooltip Content -->
                        <div class="tooltip-content">
                            <x-base.tippy-content
                                class="py-1"
                                to="chart-tooltip"
                            >
                                <div class="font-medium dark:text-slate-200">
                                    Net Worth
                                </div>
                                <div class="mt-2 flex items-center sm:mt-0">
                                    <div class="mr-2 flex w-20 dark:text-slate-400">
                                        USP:
                                        <span class="ml-auto font-medium text-success">
                                            +23%
                                        </span>
                                    </div>
                                    <div class="w-24 sm:w-32 lg:w-56">
                                        <x-simple-line-chart-1 height="h-[30px]" />
                                    </div>
                                </div>
                            </x-base.tippy-content>
                        </div>
                        <!-- END: Custom Tooltip Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Custom Tooltip Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tooltip="chart-tooltip"
                                    variant="primary"
                                >
                                    Show Tooltip
                                </x-base.button>
                            </div>
                            <!-- END: Custom Tooltip Toggle -->
                            <!-- BEGIN: Custom Tooltip Content -->
                            <div class="tooltip-content">
                                <x-base.tippy-content
                                    class="py-1"
                                    to="chart-tooltip"
                                >
                                    <div class="font-medium dark:text-slate-200">
                                        Net Worth
                                    </div>
                                    <div class="mt-2 flex items-center sm:mt-0">
                                        <div class="mr-2 flex w-20 dark:text-slate-400">
                                            USP:
                                            <span class="ml-auto font-medium text-success">
                                                +23%
                                            </span>
                                        </div>
                                        <div class="w-24 sm:w-32 lg:w-56">
                                            <x-simple-line-chart-1 height="h-[30px]" />
                                        </div>
                                    </div>
                                </x-base.tippy-content>
                            </div>
                            <!-- END: Custom Tooltip Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Chart Tooltip -->
        </div>
    </div>
@endsection
