@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Alert - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Alert</h2>
    </div>
    <div class="intro-y mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Alert -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Basic Alerts
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
                        <x-base.alert
                            class="mb-2"
                            variant="primary"
                        >
                            Awesome simple alert
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="secondary"
                        >
                            Awesome simple alert
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="success"
                        >
                            Awesome simple alert
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="warning"
                        >
                            Awesome simple alert
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="pending"
                        >
                            Awesome simple alert
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="danger"
                        >
                            Awesome simple alert
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="dark"
                        >
                            Awesome simple alert
                        </x-base.alert>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.alert
                                class="mb-2"
                                variant="primary"
                            >
                                Awesome simple alert
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="secondary"
                            >
                                Awesome simple alert
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="success"
                            >
                                Awesome simple alert
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="warning"
                            >
                                Awesome simple alert
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="pending"
                            >
                                Awesome simple alert
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="danger"
                            >
                                Awesome simple alert
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="dark"
                            >
                                Awesome simple alert
                            </x-base.alert>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Basic Alert -->
            <!-- BEGIN: Icon's Alert -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Icon Alerts</h2>
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
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="primary"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertCircle"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="secondary"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertOctagon"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="success"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="warning"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertCircle"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="pending"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="danger"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertOctagon"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="dark"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertCircle"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="secondary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertOctagon"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="success"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="warning"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertCircle"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="pending"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="danger"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertOctagon"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="dark"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Icon's Alert -->
            <!-- BEGIN: Additional Content Alert -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Additional Content Alerts
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
                        <x-base.alert
                            class="mb-2"
                            variant="primary"
                        >
                            <div class="flex items-center">
                                <div class="text-lg font-medium">
                                    Awesome alert with additional info
                                </div>
                                <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                    New
                                </div>
                            </div>
                            <div class="mt-3">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s.
                            </div>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="secondary"
                        >
                            <div class="flex items-center">
                                <div class="text-lg font-medium">
                                    Awesome alert with additional info
                                </div>
                                <div class="ml-auto rounded-md bg-slate-500 px-1 text-xs text-white">
                                    New
                                </div>
                            </div>
                            <div class="mt-3">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s.
                            </div>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="success"
                        >
                            <div class="flex items-center">
                                <div class="text-lg font-medium">
                                    Awesome alert with additional info
                                </div>
                                <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                    New
                                </div>
                            </div>
                            <div class="mt-3">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s.
                            </div>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="warning"
                        >
                            <div class="flex items-center">
                                <div class="text-lg font-medium">
                                    Awesome alert with additional info
                                </div>
                                <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                    New
                                </div>
                            </div>
                            <div class="mt-3">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s.
                            </div>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="pending"
                        >
                            <div class="flex items-center">
                                <div class="text-lg font-medium">
                                    Awesome alert with additional info
                                </div>
                                <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                    New
                                </div>
                            </div>
                            <div class="mt-3">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s.
                            </div>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="danger"
                        >
                            <div class="flex items-center">
                                <div class="text-lg font-medium">
                                    Awesome alert with additional info
                                </div>
                                <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                    New
                                </div>
                            </div>
                            <div class="mt-3">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s.
                            </div>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2"
                            variant="dark"
                        >
                            <div class="flex items-center">
                                <div class="text-lg font-medium">
                                    Awesome alert with additional info
                                </div>
                                <div class="ml-auto rounded-md bg-slate-500 px-1 text-xs text-white">
                                    New
                                </div>
                            </div>
                            <div class="mt-3">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s.
                            </div>
                        </x-base.alert>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.alert
                                class="mb-2"
                                variant="primary"
                            >
                                <div class="flex items-center">
                                    <div class="text-lg font-medium">
                                        Awesome alert with additional info
                                    </div>
                                    <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                        New
                                    </div>
                                </div>
                                <div class="mt-3">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.
                                </div>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="secondary"
                            >
                                <div class="flex items-center">
                                    <div class="text-lg font-medium">
                                        Awesome alert with additional info
                                    </div>
                                    <div class="ml-auto rounded-md bg-slate-500 px-1 text-xs text-white">
                                        New
                                    </div>
                                </div>
                                <div class="mt-3">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.
                                </div>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="success"
                            >
                                <div class="flex items-center">
                                    <div class="text-lg font-medium">
                                        Awesome alert with additional info
                                    </div>
                                    <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                        New
                                    </div>
                                </div>
                                <div class="mt-3">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.
                                </div>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="warning"
                            >
                                <div class="flex items-center">
                                    <div class="text-lg font-medium">
                                        Awesome alert with additional info
                                    </div>
                                    <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                        New
                                    </div>
                                </div>
                                <div class="mt-3">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.
                                </div>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="pending"
                            >
                                <div class="flex items-center">
                                    <div class="text-lg font-medium">
                                        Awesome alert with additional info
                                    </div>
                                    <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                        New
                                    </div>
                                </div>
                                <div class="mt-3">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.
                                </div>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="danger"
                            >
                                <div class="flex items-center">
                                    <div class="text-lg font-medium">
                                        Awesome alert with additional info
                                    </div>
                                    <div class="ml-auto rounded-md bg-white px-1 text-xs text-slate-700">
                                        New
                                    </div>
                                </div>
                                <div class="mt-3">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.
                                </div>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2"
                                variant="dark"
                            >
                                <div class="flex items-center">
                                    <div class="text-lg font-medium">
                                        Awesome alert with additional info
                                    </div>
                                    <div class="ml-auto rounded-md bg-slate-500 px-1 text-xs text-white">
                                        New
                                    </div>
                                </div>
                                <div class="mt-3">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.
                                </div>
                            </x-base.alert>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Additional Content Alert -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Icon & Dismiss Alert -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Icon & Dismiss Alerts
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
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="primary"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertCircle"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="text-white"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="secondary"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertOctagon"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="success"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="warning"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertCircle"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="pending"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="danger"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertOctagon"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="text-white"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="dark"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="text-white"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertCircle"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="text-white"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="secondary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertOctagon"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="success"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="warning"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertCircle"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="pending"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="danger"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertOctagon"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="text-white"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="dark"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="text-white"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Icon & Dismiss Alert -->
            <!-- BEGIN: Outline Alert -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Outline Alerts
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
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="outline-primary"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertCircle"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="outline-secondary"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertOctagon"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="outline-success"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="outline-warning"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertCircle"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="outline-pending"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertCircle"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="outline-danger"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertOctagon"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="outline-dark"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                            <x-base.alert.dismiss-button
                                class="btn-close"
                                type="button"
                                aria-label="Close"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="X"
                                />
                            </x-base.alert.dismiss-button>
                        </x-base.alert>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="outline-primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertCircle"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="outline-secondary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertOctagon"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="outline-success"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="outline-warning"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertCircle"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="outline-pending"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertCircle"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="outline-danger"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertOctagon"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="outline-dark"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                                <x-base.alert.dismiss-button
                                    class="btn-close"
                                    type="button"
                                    aria-label="Close"
                                >
                                    <x-base.lucide
                                        class="h-4 w-4"
                                        icon="X"
                                    />
                                </x-base.alert.dismiss-button>
                            </x-base.alert>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Outline Alert -->
            <!-- BEGIN: Soft Color Alert -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Soft Color Alerts
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-6">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-6"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="soft-primary"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertCircle"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="soft-secondary"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertOctagon"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="soft-success"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="soft-warning"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertCircle"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="soft-pending"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="soft-danger"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertOctagon"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                        <x-base.alert
                            class="mb-2 flex items-center"
                            variant="soft-dark"
                        >
                            <x-base.lucide
                                class="mr-2 h-6 w-6"
                                icon="AlertTriangle"
                            />
                            Awesome alert with icon
                        </x-base.alert>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="soft-primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertCircle"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="soft-secondary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertOctagon"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="soft-success"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="soft-warning"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertCircle"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="soft-pending"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="soft-danger"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertOctagon"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                            <x-base.alert
                                class="mb-2 flex items-center"
                                variant="soft-dark"
                            >
                                <x-base.lucide
                                    class="mr-2 h-6 w-6"
                                    icon="AlertTriangle"
                                />
                                Awesome alert with icon
                            </x-base.alert>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Soft Color Alert -->
        </div>
    </div>
@endsection
