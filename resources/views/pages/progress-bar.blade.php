@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Progress Bar - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Progressbar</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Progressbar -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Basic Progressbar
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
                        <x-base.progress>
                            <x-base.progress.bar
                                class="w-1/2"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></x-base.progress.bar>
                        </x-base.progress>
                        <x-base.progress class="mt-3">
                            <x-base.progress.bar
                                class="w-2/3"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></x-base.progress.bar>
                        </x-base.progress>
                        <x-base.progress class="mt-3">
                            <x-base.progress.bar
                                class="w-3/4"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></x-base.progress.bar>
                        </x-base.progress>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <div
                                    class="w-1/2"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                            <div class="mt-3">
                                <div
                                    class="w-2/3"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                            <div class="mt-3">
                                <div
                                    class="w-3/4"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Basic Progressbar -->
            <!-- BEGIN: Progressbar With Label -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Progressbar with Label
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
                        <x-base.progress class="h-4">
                            <x-base.progress.bar
                                class="w-1/2"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            >
                                50%
                            </x-base.progress.bar>
                        </x-base.progress>
                        <x-base.progress class="mt-3 h-4">
                            <x-base.progress.bar
                                class="w-2/3"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            >
                                60%
                            </x-base.progress.bar>
                        </x-base.progress>
                        <x-base.progress class="mt-3 h-4">
                            <x-base.progress.bar
                                class="w-3/4"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            >
                                70%
                            </x-base.progress.bar>
                        </x-base.progress>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="h-4">
                                <div
                                    class="w-1/2"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                >
                                    50%
                                </div>
                            </div>
                            <div class="mt-3 h-4">
                                <div
                                    class="w-2/3"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                >
                                    60%
                                </div>
                            </div>
                            <div class="mt-3 h-4">
                                <div
                                    class="w-3/4"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                >
                                    70%
                                </div>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Progressbar With Label -->
            <!-- BEGIN: Progressbar Height -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Progressbar Height
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
                        <x-base.progress class="h-1">
                            <x-base.progress.bar
                                class="w-1/2"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></x-base.progress.bar>
                        </x-base.progress>
                        <x-base.progress class="mt-3">
                            <x-base.progress.bar
                                class="w-2/3"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></x-base.progress.bar>
                        </x-base.progress>
                        <x-base.progress class="mt-3 h-3">
                            <x-base.progress.bar
                                class="w-3/4"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></x-base.progress.bar>
                        </x-base.progress>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="h-1">
                                <div
                                    class="w-1/2"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                            <div class="mt-3">
                                <div
                                    class="w-2/3"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                            <div class="mt-3 h-3">
                                <div
                                    class="w-3/4"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Progressbar Height -->
            <!-- BEGIN: Progressbar Color -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Progressbar Color
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
                        <x-base.progress>
                            <x-base.progress.bar
                                class="w-1/2"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></x-base.progress.bar>
                        </x-base.progress>
                        <x-base.progress class="mt-3">
                            <x-base.progress.bar
                                class="w-2/3 bg-success"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></x-base.progress.bar>
                        </x-base.progress>
                        <x-base.progress class="mt-3">
                            <x-base.progress.bar
                                class="w-3/4 bg-warning"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></x-base.progress.bar>
                        </x-base.progress>
                        <x-base.progress class="mt-3">
                            <x-base.progress.bar
                                class="w-3/4 bg-danger"
                                role="progressbar"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></x-base.progress.bar>
                        </x-base.progress>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <div
                                    class="w-1/2"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                            <div class="mt-3">
                                <div
                                    class="w-2/3 bg-success"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                            <div class="mt-3">
                                <div
                                    class="w-3/4 bg-warning"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                            <div class="mt-3">
                                <div
                                    class="w-3/4 bg-danger"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Progressbar Color -->
        </div>
    </div>
@endsection
