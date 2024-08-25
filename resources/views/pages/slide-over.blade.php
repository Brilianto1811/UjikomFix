@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Slide Over - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">Slide Over</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 intro-y lg:col-span-6">
            <!-- BEGIN: Blank Slide Over -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Blank Slide Over
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                <div
                    class="p-5"
                    id="blank-slideover"
                >
                    <x-base.preview>
                        <!-- BEGIN: Slide Over Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#basic-slide-over-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Slide Over
                            </x-base.button>
                        </div>
                        <!-- END: Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <x-base.slideover id="basic-slide-over-preview">
                            <x-base.slideover.panel>
                                <x-base.slideover.title class="p-5">
                                    <h2 class="mr-auto text-base font-medium">
                                        Blank Slide Over
                                    </h2>
                                </x-base.slideover.title>
                                <x-base.slideover.description>

                                    This is totally awesome blank slide over!
                                </x-base.slideover.description>
                            </x-base.slideover.panel>
                        </x-base.slideover>
                        <!-- END: Slide Over Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Slide Over Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#basic-slide-over-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Slide Over
                                </x-base.button>
                            </div>
                            <!-- END: Slide Over Toggle -->
                            <!-- BEGIN: Slide Over Content -->
                            <x-base.slideover id="basic-slide-over-preview">
                                <x-base.slideover.panel>
                                    <x-base.slideover.title class="p-5">
                                        <h2 class="mr-auto text-base font-medium">
                                            Blank Slide Over
                                        </h2>
                                    </x-base.slideover.title>
                                    <x-base.slideover.description>

                                        This is totally awesome blank slide over!
                                    </x-base.slideover.description>
                                </x-base.slideover.panel>
                            </x-base.slideover>
                            <!-- END: Slide Over Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Blank Slide Over -->
            <!-- BEGIN: Slide Over Size -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Slide Over Size
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                <div
                    class="p-5"
                    id="slideover-size"
                >
                    <x-base.preview>
                        <div class="text-center">
                            <!-- BEGIN: Small Slide Over Toggle -->
                            <x-base.button
                                class="mb-2 mr-1"
                                data-tw-toggle="modal"
                                data-tw-target="#small-slide-over-size-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Small Slide Over
                            </x-base.button>
                            <!-- END: Small Slide Over Toggle -->
                            <!-- BEGIN: Medium Slide Over Toggle -->
                            <x-base.button
                                class="mb-2 mr-1"
                                data-tw-toggle="modal"
                                data-tw-target="#medium-slide-over-size-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Medium Slide Over
                            </x-base.button>
                            <!-- END: Medium Slide Over Toggle -->
                            <!-- BEGIN: Large Slide Over Toggle -->
                            <x-base.button
                                class="mb-2 mr-1"
                                data-tw-toggle="modal"
                                data-tw-target="#large-slide-over-size-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Large Slide Over
                            </x-base.button>
                            <!-- END: Large Slide Over Toggle -->
                            <!-- BEGIN: Super Large Slide Over Toggle -->
                            <x-base.button
                                class="mb-2 mr-1"
                                data-tw-toggle="modal"
                                data-tw-target="#superlarge-slide-over-size-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Superlarge Slide Over
                            </x-base.button>
                            <!-- END: Super Large Slide Over Toggle -->
                        </div>
                        <!-- BEGIN: Small Slide Over Content -->
                        <x-base.slideover
                            id="small-slide-over-size-preview"
                            size="sm"
                        >
                            <x-base.slideover.panel>
                                <x-base.slideover.title class="p-5">
                                    <h2 class="mr-auto text-base font-medium">
                                        Small Slide Over
                                    </h2>
                                </x-base.slideover.title>
                                <x-base.slideover.description>
                                    This is totally awesome small slide over!
                                </x-base.slideover.description>
                            </x-base.slideover.panel>
                        </x-base.slideover>
                        <!-- END: Small Slide Over Content -->
                        <!-- BEGIN: Medium Slide Over Content -->
                        <x-base.slideover id="medium-slide-over-size-preview">
                            <x-base.slideover.panel>
                                <x-base.slideover.title class="p-5">
                                    <h2 class="mr-auto text-base font-medium">
                                        Medium Slide Over
                                    </h2>
                                </x-base.slideover.title>
                                <x-base.slideover.description>
                                    This is totally awesome medium slide over!
                                </x-base.slideover.description>
                            </x-base.slideover.panel>
                        </x-base.slideover>
                        <!-- END: Medium Slide Over Content -->
                        <!-- BEGIN: Large Slide Over Content -->
                        <x-base.slideover
                            id="large-slide-over-size-preview"
                            size="lg"
                        >
                            <x-base.slideover.panel>
                                <x-base.slideover.title class="p-5">
                                    <h2 class="mr-auto text-base font-medium">
                                        Large Slide Over
                                    </h2>
                                </x-base.slideover.title>
                                <x-base.slideover.description>
                                    This is totally awesome large slide over!
                                </x-base.slideover.description>
                            </x-base.slideover.panel>
                        </x-base.slideover>
                        <!-- END: Large Slide Over Content -->
                        <!-- BEGIN: Super Large Slide Over Content -->
                        <x-base.slideover
                            id="superlarge-slide-over-size-preview"
                            size="xl"
                        >
                            <x-base.slideover.panel>
                                <x-base.slideover.title class="p-5">
                                    <h2 class="mr-auto text-base font-medium">
                                        Superlarge Slide Over
                                    </h2>
                                </x-base.slideover.title>
                                <x-base.slideover.description>
                                    This is totally awesome superlarge slide over!
                                </x-base.slideover.description>
                            </x-base.slideover.panel>
                        </x-base.slideover>
                        <!-- END: Super Large Slide Over Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <!-- BEGIN: Small Slide Over Toggle -->
                                <x-base.button
                                    class="mb-2 mr-1"
                                    data-tw-toggle="modal"
                                    data-tw-target="#small-slide-over-size-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Small Slide Over
                                </x-base.button>
                                <!-- END: Small Slide Over Toggle -->
                                <!-- BEGIN: Medium Slide Over Toggle -->
                                <x-base.button
                                    class="mb-2 mr-1"
                                    data-tw-toggle="modal"
                                    data-tw-target="#medium-slide-over-size-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Medium Slide Over
                                </x-base.button>
                                <!-- END: Medium Slide Over Toggle -->
                                <!-- BEGIN: Large Slide Over Toggle -->
                                <x-base.button
                                    class="mb-2 mr-1"
                                    data-tw-toggle="modal"
                                    data-tw-target="#large-slide-over-size-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Large Slide Over
                                </x-base.button>
                                <!-- END: Large Slide Over Toggle -->
                                <!-- BEGIN: Super Large Slide Over Toggle -->
                                <x-base.button
                                    class="mb-2 mr-1"
                                    data-tw-toggle="modal"
                                    data-tw-target="#superlarge-slide-over-size-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Superlarge Slide Over
                                </x-base.button>
                                <!-- END: Super Large Slide Over Toggle -->
                            </div>
                            <!-- BEGIN: Small Slide Over Content -->
                            <x-base.slideover
                                id="small-slide-over-size-preview"
                                size="sm"
                            >
                                <x-base.slideover.panel>
                                    <x-base.slideover.title class="p-5">
                                        <h2 class="mr-auto text-base font-medium">
                                            Small Slide Over
                                        </h2>
                                    </x-base.slideover.title>
                                    <x-base.slideover.description>
                                        This is totally awesome small slide over!
                                    </x-base.slideover.description>
                                </x-base.slideover.panel>
                            </x-base.slideover>
                            <!-- END: Small Slide Over Content -->
                            <!-- BEGIN: Medium Slide Over Content -->
                            <x-base.slideover id="medium-slide-over-size-preview">
                                <x-base.slideover.panel>
                                    <x-base.slideover.title class="p-5">
                                        <h2 class="mr-auto text-base font-medium">
                                            Medium Slide Over
                                        </h2>
                                    </x-base.slideover.title>
                                    <x-base.slideover.description>
                                        This is totally awesome medium slide over!
                                    </x-base.slideover.description>
                                </x-base.slideover.panel>
                            </x-base.slideover>
                            <!-- END: Medium Slide Over Content -->
                            <!-- BEGIN: Large Slide Over Content -->
                            <x-base.slideover
                                id="large-slide-over-size-preview"
                                size="lg"
                            >
                                <x-base.slideover.panel>
                                    <x-base.slideover.title class="p-5">
                                        <h2 class="mr-auto text-base font-medium">
                                            Large Slide Over
                                        </h2>
                                    </x-base.slideover.title>
                                    <x-base.slideover.description>
                                        This is totally awesome large slide over!
                                    </x-base.slideover.description>
                                </x-base.slideover.panel>
                            </x-base.slideover>
                            <!-- END: Large Slide Over Content -->
                            <!-- BEGIN: Super Large Slide Over Content -->
                            <x-base.slideover
                                id="superlarge-slide-over-size-preview"
                                size="xl"
                            >
                                <x-base.slideover.panel>
                                    <x-base.slideover.title class="p-5">
                                        <h2 class="mr-auto text-base font-medium">
                                            Superlarge Slide Over
                                        </h2>
                                    </x-base.slideover.title>
                                    <x-base.slideover.description>
                                        This is totally awesome superlarge slide over!
                                    </x-base.slideover.description>
                                </x-base.slideover.panel>
                            </x-base.slideover>
                            <!-- END: Super Large Slide Over Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Slide Over Size -->
            <!-- BEGIN: Slide Over With Close Button -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Slide Over With Close Button
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                <div
                    class="p-5"
                    id="button-slideover"
                >
                    <x-base.preview>
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#button-slide-over-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Slide Over
                            </x-base.button>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.slideover
                            id="button-slide-over-preview"
                            staticBackdrop
                        >
                            <x-base.slideover.panel>
                                <a
                                    class="absolute top-0 left-0 right-auto mt-4 -ml-10 sm:-ml-12"
                                    data-tw-dismiss="modal"
                                    href="#"
                                >
                                    <x-base.lucide
                                        class="w-8 h-8 text-slate-400"
                                        icon="X"
                                    />
                                </a>
                                <x-base.slideover.title class="p-5">
                                    <h2 class="mr-auto text-base font-medium">
                                        Slide Over With Close Button
                                    </h2>
                                </x-base.slideover.title>
                                <x-base.slideover.description>
                                    This is totally awesome slide over with close button!
                                </x-base.slideover.description>
                            </x-base.slideover.panel>
                        </x-base.slideover>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#button-slide-over-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Slide Over
                                </x-base.button>
                            </div>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.slideover
                                id="button-slide-over-preview"
                                staticBackdrop
                            >
                                <x-base.slideover.panel>
                                    <a
                                        class="absolute top-0 left-0 right-auto mt-4 -ml-10 sm:-ml-12"
                                        data-tw-dismiss="modal"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="w-8 h-8 text-slate-400"
                                            icon="X"
                                        />
                                    </a>
                                    <x-base.slideover.title class="p-5">
                                        <h2 class="mr-auto text-base font-medium">
                                            Slide Over With Close Button
                                        </h2>
                                    </x-base.slideover.title>
                                    <x-base.slideover.description>
                                        This is totally awesome slide over with close button!
                                    </x-base.slideover.description>
                                </x-base.slideover.panel>
                            </x-base.slideover>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Slide Over With Close Button -->
        </div>
        <div class="col-span-12 intro-y lg:col-span-6">
            <!-- BEGIN: Overlapping Slide Over -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Overlapping Slide Over
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                <div
                    class="p-5"
                    id="overlapping-slideover"
                >
                    <x-base.preview>
                        <!-- BEGIN: Slide Over Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#overlapping-slide-over-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Slide Over
                            </x-base.button>
                        </div>
                        <!-- END: Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <x-base.slideover id="overlapping-slide-over-preview">
                            <x-base.slideover.panel>
                                <x-base.slideover.title class="p-5">
                                    <h2 class="mr-auto text-base font-medium">
                                        Overlapping Slide Over
                                    </h2>
                                </x-base.slideover.title>
                                <x-base.slideover.description class="px-5 py-10">
                                    <div class="text-center">
                                        <div class="mb-5">
                                            Click button bellow to show overlapping slide
                                            over!
                                        </div>
                                        <!-- BEGIN: Overlapping Slide Over Toggle -->
                                        <x-base.button
                                            data-tw-toggle="modal"
                                            data-tw-target="#next-overlapping-slide-over-preview"
                                            href="#"
                                            as="a"
                                            variant="primary"
                                        >
                                            Show Overlapping Slide Over
                                        </x-base.button>
                                        <!-- END: Overlapping Slide Over Toggle -->
                                        <!-- BEGIN: Overlapping Slide Over Content -->
                                        <x-base.slideover id="next-overlapping-slide-over-preview">
                                            <x-base.slideover.panel>
                                                <x-base.slideover.title class="p-5">
                                                    <h2 class="mr-auto text-base font-medium">
                                                        Overlapping Slide Over
                                                    </h2>
                                                </x-base.slideover.title>
                                                <x-base.slideover.description class="text-center">
                                                    This is totally awesome overlapping slide
                                                    over!
                                                </x-base.slideover.description>
                                            </x-base.slideover.panel>
                                        </x-base.slideover>
                                        <!-- END: Overlapping Slide Over Content -->
                                    </div>
                                </x-base.slideover.description>
                            </x-base.slideover.panel>
                        </x-base.slideover>
                        <!-- END: Slide Over Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Slide Over Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#overlapping-slide-over-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Slide Over
                                </x-base.button>
                            </div>
                            <!-- END: Slide Over Toggle -->
                            <!-- BEGIN: Slide Over Content -->
                            <x-base.slideover id="overlapping-slide-over-preview">
                                <x-base.slideover.panel>
                                    <x-base.slideover.title class="p-5">
                                        <h2 class="mr-auto text-base font-medium">
                                            Overlapping Slide Over
                                        </h2>
                                    </x-base.slideover.title>
                                    <x-base.slideover.description class="px-5 py-10">
                                        <div class="text-center">
                                            <div class="mb-5">
                                                Click button bellow to show overlapping slide
                                                over!
                                            </div>
                                            <!-- BEGIN: Overlapping Slide Over Toggle -->
                                            <x-base.button
                                                data-tw-toggle="modal"
                                                data-tw-target="#next-overlapping-slide-over-preview"
                                                href="#"
                                                as="a"
                                                variant="primary"
                                            >
                                                Show Overlapping Slide Over
                                            </x-base.button>
                                            <!-- END: Overlapping Slide Over Toggle -->
                                            <!-- BEGIN: Overlapping Slide Over Content -->
                                            <x-base.slideover id="next-overlapping-slide-over-preview">
                                                <x-base.slideover.panel>
                                                    <x-base.slideover.title class="p-5">
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Overlapping Slide Over
                                                        </h2>
                                                    </x-base.slideover.title>
                                                    <x-base.slideover.description class="text-center">
                                                        This is totally awesome overlapping slide
                                                        over!
                                                    </x-base.slideover.description>
                                                </x-base.slideover.panel>
                                            </x-base.slideover>
                                            <!-- END: Overlapping Slide Over Content -->
                                        </div>
                                    </x-base.slideover.description>
                                </x-base.slideover.panel>
                            </x-base.slideover>
                            <!-- END: Slide Over Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Overlapping Slide Over -->
            <!-- BEGIN: Header & Footer Slide Over -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Header & Footer Slide Over
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                <div
                    class="p-5"
                    id="header-footer-slideover"
                >
                    <x-base.preview>
                        <!-- BEGIN: Slide Over Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#header-footer-slide-over-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Slide Over
                            </x-base.button>
                        </div>
                        <!-- END: Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <x-base.slideover
                            id="header-footer-slide-over-preview"
                            staticBackdrop
                        >
                            <!-- BEGIN: Slide Over Header -->
                            <x-base.slideover.panel>
                                <a
                                    class="absolute top-0 left-0 right-auto mt-4 -ml-10 sm:-ml-12"
                                    data-tw-dismiss="modal"
                                    href="#"
                                >
                                    <x-base.lucide
                                        class="w-8 h-8 text-slate-400"
                                        icon="X"
                                    />
                                </a>
                                <x-base.slideover.title>
                                    <h2 class="mr-auto text-base font-medium">
                                        Broadcast Message
                                    </h2>
                                    <x-base.button
                                        class="hidden sm:flex"
                                        variant="outline-secondary"
                                    >
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="File"
                                        />
                                        Download Docs
                                    </x-base.button>
                                    <x-base.menu class="sm:hidden">
                                        <x-base.menu.button
                                            class="block w-5 h-5"
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.lucide
                                                class="w-5 h-5 text-slate-500"
                                                icon="MoreHorizontal"
                                            />
                                        </x-base.menu.button>
                                        <x-base.menu.items class="w-40">
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="w-4 h-4 mr-2"
                                                    icon="File"
                                                />
                                                Download Docs
                                            </x-base.menu.item>
                                        </x-base.menu.items>
                                    </x-base.menu>
                                </x-base.slideover.title>
                                <!-- END: Slide Over Header -->
                                <!-- BEGIN: Slide Over Body -->
                                <x-base.slideover.description>
                                    <div>
                                        <x-base.form-label for="modal-form-1">From</x-base.form-label>
                                        <x-base.form-input
                                            id="modal-form-1"
                                            type="text"
                                            placeholder="example@gmail.com"
                                        />
                                    </div>
                                    <div class="mt-3">
                                        <x-base.form-label for="modal-form-2">To</x-base.form-label>
                                        <x-base.form-input
                                            id="modal-form-2"
                                            type="text"
                                            placeholder="example@gmail.com"
                                        />
                                    </div>
                                    <div class="mt-3">
                                        <x-base.form-label for="modal-form-3">
                                            Subject
                                        </x-base.form-label>
                                        <x-base.form-input
                                            id="modal-form-3"
                                            type="text"
                                            placeholder="Important Meeting"
                                        />
                                    </div>
                                    <div class="mt-3">
                                        <x-base.form-label for="modal-form-4">
                                            Has the Words
                                        </x-base.form-label>
                                        <x-base.form-input
                                            id="modal-form-4"
                                            type="text"
                                            placeholder="Job, Work, Documentation"
                                        />
                                    </div>
                                    <div class="mt-3">
                                        <x-base.form-label for="modal-form-5">
                                            Doesn't Have
                                        </x-base.form-label>
                                        <x-base.form-input
                                            id="modal-form-5"
                                            type="text"
                                            placeholder="Job, Work, Documentation"
                                        />
                                    </div>
                                    <div class="mt-3">
                                        <x-base.form-label for="modal-form-6">Size</x-base.form-label>
                                        <x-base.form-select id="modal-form-6">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </x-base.form-select>
                                    </div>
                                </x-base.slideover.description>
                                <!-- END: Slide Over Body -->
                                <!-- BEGIN: Slide Over Footer -->
                                <x-base.slideover.footer>
                                    <x-base.button
                                        class="w-20 mr-1"
                                        data-tw-dismiss="modal"
                                        type="button"
                                        variant="outline-secondary"
                                    >
                                        Cancel
                                    </x-base.button>
                                    <x-base.button
                                        class="w-20"
                                        type="button"
                                        variant="primary"
                                    >
                                        Send
                                    </x-base.button>
                                </x-base.slideover.footer>
                            </x-base.slideover.panel>
                            <!-- END: Slide Over Footer -->
                        </x-base.slideover>
                        <!-- END: Slide Over Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Slide Over Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#header-footer-slide-over-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Slide Over
                                </x-base.button>
                            </div>
                            <!-- END: Slide Over Toggle -->
                            <!-- BEGIN: Slide Over Content -->
                            <x-base.slideover
                                id="header-footer-slide-over-preview"
                                staticBackdrop
                            >
                                <!-- BEGIN: Slide Over Header -->
                                <x-base.slideover.panel>
                                    <a
                                        class="absolute top-0 left-0 right-auto mt-4 -ml-10 sm:-ml-12"
                                        data-tw-dismiss="modal"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="w-8 h-8 text-slate-400"
                                            icon="X"
                                        />
                                    </a>
                                    <x-base.slideover.title>
                                        <h2 class="mr-auto text-base font-medium">
                                            Broadcast Message
                                        </h2>
                                        <x-base.button
                                            class="hidden sm:flex"
                                            variant="outline-secondary"
                                        >
                                            <x-base.lucide
                                                class="w-4 h-4 mr-2"
                                                icon="File"
                                            />
                                            Download Docs
                                        </x-base.button>
                                        <x-base.menu class="sm:hidden">
                                            <x-base.menu.button
                                                class="block w-5 h-5"
                                                href="#"
                                                as="a"
                                            >
                                                <x-base.lucide
                                                    class="w-5 h-5 text-slate-500"
                                                    icon="MoreHorizontal"
                                                />
                                            </x-base.menu.button>
                                            <x-base.menu.items class="w-40">
                                                <x-base.menu.item>
                                                    <x-base.lucide
                                                        class="w-4 h-4 mr-2"
                                                        icon="File"
                                                    />
                                                    Download Docs
                                                </x-base.menu.item>
                                            </x-base.menu.items>
                                        </x-base.menu>
                                    </x-base.slideover.title>
                                    <!-- END: Slide Over Header -->
                                    <!-- BEGIN: Slide Over Body -->
                                    <x-base.slideover.description>
                                        <div>
                                            <x-base.form-label for="modal-form-1">
                                                From
                                            </x-base.form-label>
                                            <x-base.form-input
                                                id="modal-form-1"
                                                type="text"
                                                placeholder="example@gmail.com"
                                            />
                                        </div>
                                        <div class="mt-3">
                                            <x-base.form-label for="modal-form-2">
                                                To
                                            </x-base.form-label>
                                            <x-base.form-input
                                                id="modal-form-2"
                                                type="text"
                                                placeholder="example@gmail.com"
                                            />
                                        </div>
                                        <div class="mt-3">
                                            <x-base.form-label for="modal-form-3">
                                                Subject
                                            </x-base.form-label>
                                            <x-base.form-input
                                                id="modal-form-3"
                                                type="text"
                                                placeholder="Important Meeting"
                                            />
                                        </div>
                                        <div class="mt-3">
                                            <x-base.form-label for="modal-form-4">
                                                Has the Words
                                            </x-base.form-label>
                                            <x-base.form-input
                                                id="modal-form-4"
                                                type="text"
                                                placeholder="Job, Work, Documentation"
                                            />
                                        </div>
                                        <div class="mt-3">
                                            <x-base.form-label for="modal-form-5">
                                                Doesn't Have
                                            </x-base.form-label>
                                            <x-base.form-input
                                                id="modal-form-5"
                                                type="text"
                                                placeholder="Job, Work, Documentation"
                                            />
                                        </div>
                                        <div class="mt-3">
                                            <x-base.form-label for="modal-form-6">
                                                Size
                                            </x-base.form-label>
                                            <x-base.form-select id="modal-form-6">
                                                <option>10</option>
                                                <option>25</option>
                                                <option>35</option>
                                                <option>50</option>
                                            </x-base.form-select>
                                        </div>
                                    </x-base.slideover.description>
                                    <!-- END: Slide Over Body -->
                                    <!-- BEGIN: Slide Over Footer -->
                                    <x-base.slideover.footer>
                                        <x-base.button
                                            class="w-20 mr-1"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="outline-secondary"
                                        >
                                            Cancel
                                        </x-base.button>
                                        <x-base.button
                                            class="w-20"
                                            type="button"
                                            variant="primary"
                                        >
                                            Send
                                        </x-base.button>
                                    </x-base.slideover.footer>
                                </x-base.slideover.panel>
                                <!-- END: Slide Over Footer -->
                            </x-base.slideover>
                            <!-- END: Slide Over Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Header & Footer Slide Over -->
            <!-- BEGIN: Programmatically Show/Hide Slide Over -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Programmatically Show/Hide Slide Over
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
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
                <div
                    class="p-5"
                    id="programmatically-show-hide-slideover"
                >
                    <x-base.preview>
                        <!-- BEGIN: Show Slide Over Toggle -->
                        <div class="text-center">
                            <x-base.button
                                class="mb-2 mr-1"
                                id="programmatically-show-slideover"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Slide Over
                            </x-base.button>
                        </div>
                        <!-- END: Show Slide Over Toggle -->
                        <!-- BEGIN: Slide Over Content -->
                        <x-base.slideover id="programmatically-slideover">
                            <x-base.slideover.panel>
                                <x-base.slideover.title class="p-5">
                                    <h2 class="mr-auto text-base font-medium">
                                        Programmatically Show/Hide Slide Over
                                    </h2>
                                </x-base.slideover.title>
                                <x-base.slideover.description class="p-10 text-center">
                                    <!-- BEGIN: Hide Slide Over Toggle -->
                                    <x-base.button
                                        class="mr-1"
                                        id="programmatically-hide-slideover"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        Hide Slide Over
                                    </x-base.button>
                                    <!-- END: Hide Slide Over Toggle -->
                                    <!-- BEGIN: Toggle Slide Over Toggle -->
                                    <x-base.button
                                        class="mt-2 mr-1 sm:mt-0"
                                        id="programmatically-toggle-slideover"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        Toggle Slide Over
                                    </x-base.button>
                                    <!-- END: Toggle Slide Over Toggle -->
                                </x-base.slideover.description>
                            </x-base.slideover.panel>
                        </x-base.slideover>
                        <!-- END: Slide Over Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Show Slide Over Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    class="mb-2 mr-1"
                                    id="programmatically-show-slideover"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Slide Over
                                </x-base.button>
                            </div>
                            <!-- END: Show Slide Over Toggle -->
                            <!-- BEGIN: Slide Over Content -->
                            <x-base.slideover id="programmatically-slideover">
                                <x-base.slideover.panel>
                                    <x-base.slideover.title class="p-5">
                                        <h2 class="mr-auto text-base font-medium">
                                            Programmatically Show/Hide Slide Over
                                        </h2>
                                    </x-base.slideover.title>
                                    <x-base.slideover.description class="p-10 text-center">
                                        <!-- BEGIN: Hide Slide Over Toggle -->
                                        <x-base.button
                                            class="mr-1"
                                            id="programmatically-hide-slideover"
                                            href="#"
                                            as="a"
                                            variant="primary"
                                        >
                                            Hide Slide Over
                                        </x-base.button>
                                        <!-- END: Hide Slide Over Toggle -->
                                        <!-- BEGIN: Toggle Slide Over Toggle -->
                                        <x-base.button
                                            class="mt-2 mr-1 sm:mt-0"
                                            id="programmatically-toggle-slideover"
                                            href="#"
                                            as="a"
                                            variant="primary"
                                        >
                                            Toggle Slide Over
                                        </x-base.button>
                                        <!-- END: Toggle Slide Over Toggle -->
                                    </x-base.slideover.description>
                                </x-base.slideover.panel>
                            </x-base.slideover>
                            <!-- END: Slide Over Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Programmatically Show/Hide Slide Over -->
        </div>
    </div>
@endsection

@pushOnce('scripts')
    @vite('resources/js/pages/slideover.js')
@endPushOnce
