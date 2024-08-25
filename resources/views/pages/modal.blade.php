@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Modal - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Modal</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Blank Modal -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Blank Modal</h2>
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
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#basic-modal-preview"
                                as="a"
                                variant="primary"
                            >
                                Show Modal
                            </x-base.button>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.dialog id="basic-modal-preview">
                            <x-base.dialog.panel class="p-10 text-center">
                                This is totally awesome blank modal!
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#basic-modal-preview"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Modal
                                </x-base.button>
                            </div>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.dialog id="basic-modal-preview">
                                <x-base.dialog.panel class="p-10 text-center">
                                    This is totally awesome blank modal!
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Blank Modal -->
            <!-- BEGIN: Modal Size -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Modal Size</h2>
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
                            <!-- BEGIN: Small Modal Toggle -->
                            <x-base.button
                                class="mb-2 mr-1"
                                data-tw-toggle="modal"
                                data-tw-target="#small-modal-size-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Small Modal
                            </x-base.button>
                            <!-- END: Small Modal Toggle -->
                            <!-- BEGIN: Medium Modal Toggle -->
                            <x-base.button
                                class="mb-2 mr-1"
                                data-tw-toggle="modal"
                                data-tw-target="#medium-modal-size-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Medium Modal
                            </x-base.button>
                            <!-- END: Medium Modal Toggle -->
                            <!-- BEGIN: Large Modal Toggle -->
                            <x-base.button
                                class="mb-2 mr-1"
                                data-tw-toggle="modal"
                                data-tw-target="#large-modal-size-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Large Modal
                            </x-base.button>
                            <!-- END: Large Modal Toggle -->
                            <!-- BEGIN: Super Large Modal Toggle -->
                            <x-base.button
                                class="mb-2 mr-1"
                                data-tw-toggle="modal"
                                data-tw-target="#superlarge-modal-size-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Superlarge Modal
                            </x-base.button>
                            <!-- END: Super Large Modal Toggle -->
                        </div>
                        <!-- BEGIN: Small Modal Content -->
                        <x-base.dialog
                            id="small-modal-size-preview"
                            size="sm"
                        >
                            <x-base.dialog.panel class="p-10 text-center">
                                This is totally awesome small modal!
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Small Modal Content -->
                        <!-- BEGIN: Medium Modal Content -->
                        <x-base.dialog id="medium-modal-size-preview">
                            <x-base.dialog.panel class="p-10 text-center">
                                This is totally awesome medium modal!
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Medium Modal Content -->
                        <!-- BEGIN: Large Modal Content -->
                        <x-base.dialog
                            id="large-modal-size-preview"
                            size="lg"
                        >
                            <x-base.dialog.panel class="p-10 text-center">
                                This is totally awesome large modal!
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Large Modal Content -->
                        <!-- BEGIN: Super Large Modal Content -->
                        <x-base.dialog
                            id="superlarge-modal-size-preview"
                            size="xl"
                        >
                            <x-base.dialog.panel class="p-10 text-center">
                                This is totally awesome superlarge modal!
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Super Large Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <!-- BEGIN: Small Modal Toggle -->
                                <x-base.button
                                    class="mb-2 mr-1"
                                    data-tw-toggle="modal"
                                    data-tw-target="#small-modal-size-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Small Modal
                                </x-base.button>
                                <!-- END: Small Modal Toggle -->
                                <!-- BEGIN: Medium Modal Toggle -->
                                <x-base.button
                                    class="mb-2 mr-1"
                                    data-tw-toggle="modal"
                                    data-tw-target="#medium-modal-size-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Medium Modal
                                </x-base.button>
                                <!-- END: Medium Modal Toggle -->
                                <!-- BEGIN: Large Modal Toggle -->
                                <x-base.button
                                    class="mb-2 mr-1"
                                    data-tw-toggle="modal"
                                    data-tw-target="#large-modal-size-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Large Modal
                                </x-base.button>
                                <!-- END: Large Modal Toggle -->
                                <!-- BEGIN: Super Large Modal Toggle -->
                                <x-base.button
                                    class="mb-2 mr-1"
                                    data-tw-toggle="modal"
                                    data-tw-target="#superlarge-modal-size-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Superlarge Modal
                                </x-base.button>
                                <!-- END: Super Large Modal Toggle -->
                            </div>
                            <!-- BEGIN: Small Modal Content -->
                            <x-base.dialog
                                id="small-modal-size-preview"
                                size="sm"
                            >
                                <x-base.dialog.panel class="p-10 text-center">
                                    This is totally awesome small modal!
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Small Modal Content -->
                            <!-- BEGIN: Medium Modal Content -->
                            <x-base.dialog id="medium-modal-size-preview">
                                <x-base.dialog.panel class="p-10 text-center">
                                    This is totally awesome medium modal!
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Medium Modal Content -->
                            <!-- BEGIN: Large Modal Content -->
                            <x-base.dialog
                                id="large-modal-size-preview"
                                size="lg"
                            >
                                <x-base.dialog.panel class="p-10 text-center">
                                    This is totally awesome large modal!
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Large Modal Content -->
                            <!-- BEGIN: Super Large Modal Content -->
                            <x-base.dialog
                                id="superlarge-modal-size-preview"
                                size="xl"
                            >
                                <x-base.dialog.panel class="p-10 text-center">
                                    This is totally awesome superlarge modal!
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Super Large Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Modal Size -->
            <!-- BEGIN: Warning Modal -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Warning Modal
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
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#warning-modal-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Modal
                            </x-base.button>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.dialog id="warning-modal-preview">
                            <x-base.dialog.panel>
                                <div class="p-5 text-center">
                                    <x-base.lucide
                                        class="mx-auto mt-3 h-16 w-16 text-warning"
                                        icon="XCircle"
                                    />
                                    <div class="mt-5 text-3xl">Oops...</div>
                                    <div class="mt-2 text-slate-500">
                                        Something went wrong!
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <x-base.button
                                        class="w-24"
                                        data-tw-dismiss="modal"
                                        type="button"
                                        variant="primary"
                                    >
                                        Ok
                                    </x-base.button>
                                </div>
                                <div class="border-t border-slate-200/60 p-5 text-center dark:border-darkmode-400">
                                    <a
                                        class="text-primary"
                                        href=""
                                    >
                                        Why do I have this issue?
                                    </a>
                                </div>
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#warning-modal-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Modal
                                </x-base.button>
                            </div>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.dialog id="warning-modal-preview">
                                <x-base.dialog.panel>
                                    <div class="p-5 text-center">
                                        <x-base.lucide
                                            class="mx-auto mt-3 h-16 w-16 text-warning"
                                            icon="XCircle"
                                        />
                                        <div class="mt-5 text-3xl">Oops...</div>
                                        <div class="mt-2 text-slate-500">
                                            Something went wrong!
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <x-base.button
                                            class="w-24"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Ok
                                        </x-base.button>
                                    </div>
                                    <div class="border-t border-slate-200/60 p-5 text-center dark:border-darkmode-400">
                                        <a
                                            class="text-primary"
                                            href=""
                                        >
                                            Why do I have this issue?
                                        </a>
                                    </div>
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Warning Modal -->
            <!-- BEGIN: Modal With Close Button -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Modal With Close Button
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
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#button-modal-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Modal
                            </x-base.button>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.dialog id="button-modal-preview">
                            <x-base.dialog.panel>
                                <a
                                    class="absolute right-0 top-0 mr-3 mt-3"
                                    data-tw-dismiss="modal"
                                    href="#"
                                >
                                    <x-base.lucide
                                        class="h-8 w-8 text-slate-400"
                                        icon="X"
                                    />
                                </a>
                                <div class="p-5 text-center">
                                    <x-base.lucide
                                        class="mx-auto mt-3 h-16 w-16 text-success"
                                        icon="CheckCircle"
                                    />
                                    <div class="mt-5 text-3xl">Modal Example</div>
                                    <div class="mt-2 text-slate-500">
                                        Modal with close button
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <x-base.button
                                        class="w-24"
                                        data-tw-dismiss="modal"
                                        type="button"
                                        variant="primary"
                                    >
                                        Ok
                                    </x-base.button>
                                </div>
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#button-modal-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Modal
                                </x-base.button>
                            </div>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.dialog id="button-modal-preview">
                                <x-base.dialog.panel>
                                    <a
                                        class="absolute right-0 top-0 mr-3 mt-3"
                                        data-tw-dismiss="modal"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="h-8 w-8 text-slate-400"
                                            icon="X"
                                        />
                                    </a>
                                    <div class="p-5 text-center">
                                        <x-base.lucide
                                            class="mx-auto mt-3 h-16 w-16 text-success"
                                            icon="CheckCircle"
                                        />
                                        <div class="mt-5 text-3xl">Modal Example</div>
                                        <div class="mt-2 text-slate-500">
                                            Modal with close button
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <x-base.button
                                            class="w-24"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Ok
                                        </x-base.button>
                                    </div>
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Modal With Close Button -->
            <!-- BEGIN: Static Backdrop Modal -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Static Backdrop Modal
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
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#static-backdrop-modal-preview"
                                variant="primary"
                            >
                                Show Modal
                            </x-base.button>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.dialog
                            id="static-backdrop-modal-preview"
                            staticBackdrop
                        >
                            <x-base.dialog.panel class="px-5 py-10">
                                <div class="text-center">
                                    <div class="mb-5">
                                        I will not close if you click outside me. Don't even
                                        try to press escape key.
                                    </div>
                                    <x-base.button
                                        class="w-24"
                                        data-tw-dismiss="modal"
                                        type="button"
                                        variant="primary"
                                    >
                                        Ok
                                    </x-base.button>
                                </div>
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#static-backdrop-modal-preview"
                                    variant="primary"
                                >
                                    Show Modal
                                </x-base.button>
                            </div>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.dialog
                                id="static-backdrop-modal-preview"
                                staticBackdrop
                            >
                                <x-base.dialog.panel class="px-5 py-10">
                                    <div class="text-center">
                                        <div class="mb-5">
                                            I will not close if you click outside me. Don't even
                                            try to press escape key.
                                        </div>
                                        <x-base.button
                                            class="w-24"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Ok
                                        </x-base.button>
                                    </div>
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Static Backdrop Modal -->
            <!-- BEGIN: Overlapping Modal -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Overlapping Modal
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
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#overlapping-modal-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Modal
                            </x-base.button>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.dialog id="overlapping-modal-preview">
                            <x-base.dialog.panel class="px-5 py-10">
                                <div class="text-center">
                                    <div class="mb-5">
                                        Click button bellow to show overlapping modal!
                                    </div>
                                    <!-- BEGIN: Overlapping Modal Toggle -->
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#next-overlapping-modal-preview"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        Show Overlapping Modal
                                    </x-base.button>
                                    <!-- END: Overlapping Modal Toggle -->
                                </div>
                                <!-- BEGIN: Overlapping Modal Content -->
                                <x-base.dialog id="next-overlapping-modal-preview">
                                    <x-base.dialog.panel class="p-5 text-center">
                                        This is totally awesome overlapping modal!
                                    </x-base.dialog.panel>
                                </x-base.dialog>
                                <!-- END: Overlapping Modal Content -->
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#overlapping-modal-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Modal
                                </x-base.button>
                            </div>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.dialog id="overlapping-modal-preview">
                                <x-base.dialog.panel class="px-5 py-10">
                                    <div class="text-center">
                                        <div class="mb-5">
                                            Click button bellow to show overlapping modal!
                                        </div>
                                        <!-- BEGIN: Overlapping Modal Toggle -->
                                        <x-base.button
                                            data-tw-toggle="modal"
                                            data-tw-target="#next-overlapping-modal-preview"
                                            href="#"
                                            as="a"
                                            variant="primary"
                                        >
                                            Show Overlapping Modal
                                        </x-base.button>
                                        <!-- END: Overlapping Modal Toggle -->
                                    </div>
                                    <!-- BEGIN: Overlapping Modal Content -->
                                    <x-base.dialog id="next-overlapping-modal-preview">
                                        <x-base.dialog.panel class="p-5 text-center">
                                            This is totally awesome overlapping modal!
                                        </x-base.dialog.panel>
                                    </x-base.dialog>
                                    <!-- END: Overlapping Modal Content -->
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Overlapping Modal -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Header & Footer Modal -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Header & Footer Modal
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-7">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-7"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#header-footer-modal-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Modal
                            </x-base.button>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.dialog id="header-footer-modal-preview">
                            <x-base.dialog.panel>
                                <x-base.dialog.title>
                                    <h2 class="mr-auto text-base font-medium">
                                        Broadcast Message
                                    </h2>
                                    <x-base.button
                                        class="hidden sm:flex"
                                        variant="outline-secondary"
                                    >
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="File"
                                        />
                                        Download Docs
                                    </x-base.button>
                                    <x-base.menu class="sm:hidden">
                                        <x-base.menu.button
                                            class="block h-5 w-5"
                                            href="#"
                                        >
                                            <x-base.lucide
                                                class="h-5 w-5 text-slate-500"
                                                icon="MoreHorizontal"
                                            />
                                        </x-base.menu.button>
                                        <x-base.menu.items class="w-40">
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4"
                                                    icon="File"
                                                />
                                                Download Docs
                                            </x-base.menu.item>
                                        </x-base.menu.items>
                                    </x-base.menu>
                                </x-base.dialog.title>
                                <x-base.dialog.description class="grid grid-cols-12 gap-4 gap-y-3">
                                    <div class="col-span-12 sm:col-span-6">
                                        <x-base.form-label for="modal-form-1">From</x-base.form-label>
                                        <x-base.form-input
                                            id="modal-form-1"
                                            type="text"
                                            placeholder="example@gmail.com"
                                        />
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <x-base.form-label for="modal-form-2">To</x-base.form-label>
                                        <x-base.form-input
                                            id="modal-form-2"
                                            type="text"
                                            placeholder="example@gmail.com"
                                        />
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <x-base.form-label for="modal-form-3">
                                            Subject
                                        </x-base.form-label>
                                        <x-base.form-input
                                            id="modal-form-3"
                                            type="text"
                                            placeholder="Important Meeting"
                                        />
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <x-base.form-label for="modal-form-4">
                                            Has the Words
                                        </x-base.form-label>
                                        <x-base.form-input
                                            id="modal-form-4"
                                            type="text"
                                            placeholder="Job, Work, Documentation"
                                        />
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <x-base.form-label for="modal-form-5">
                                            Doesn't Have
                                        </x-base.form-label>
                                        <x-base.form-input
                                            id="modal-form-5"
                                            type="text"
                                            placeholder="Job, Work, Documentation"
                                        />
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <x-base.form-label for="modal-form-6">Size</x-base.form-label>
                                        <x-base.form-select id="modal-form-6">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </x-base.form-select>
                                    </div>
                                </x-base.dialog.description>
                                <x-base.dialog.footer>
                                    <x-base.button
                                        class="mr-1 w-20"
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
                                </x-base.dialog.footer>
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#header-footer-modal-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Modal
                                </x-base.button>
                            </div>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.dialog id="header-footer-modal-preview">
                                <x-base.dialog.panel>
                                    <x-base.dialog.title>
                                        <h2 class="mr-auto text-base font-medium">
                                            Broadcast Message
                                        </h2>
                                        <x-base.button
                                            class="hidden sm:flex"
                                            variant="outline-secondary"
                                        >
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4"
                                                icon="File"
                                            />
                                            Download Docs
                                        </x-base.button>
                                        <x-base.menu class="sm:hidden">
                                            <x-base.menu.button
                                                class="block h-5 w-5"
                                                href="#"
                                            >
                                                <x-base.lucide
                                                    class="h-5 w-5 text-slate-500"
                                                    icon="MoreHorizontal"
                                                />
                                            </x-base.menu.button>
                                            <x-base.menu.items class="w-40">
                                                <x-base.menu.item>
                                                    <x-base.lucide
                                                        class="mr-2 h-4 w-4"
                                                        icon="File"
                                                    />
                                                    Download Docs
                                                </x-base.menu.item>
                                            </x-base.menu.items>
                                        </x-base.menu>
                                    </x-base.dialog.title>
                                    <x-base.dialog.description class="grid grid-cols-12 gap-4 gap-y-3">
                                        <div class="col-span-12 sm:col-span-6">
                                            <x-base.form-label for="modal-form-1">
                                                From
                                            </x-base.form-label>
                                            <x-base.form-input
                                                id="modal-form-1"
                                                type="text"
                                                placeholder="example@gmail.com"
                                            />
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <x-base.form-label for="modal-form-2">
                                                To
                                            </x-base.form-label>
                                            <x-base.form-input
                                                id="modal-form-2"
                                                type="text"
                                                placeholder="example@gmail.com"
                                            />
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <x-base.form-label for="modal-form-3">
                                                Subject
                                            </x-base.form-label>
                                            <x-base.form-input
                                                id="modal-form-3"
                                                type="text"
                                                placeholder="Important Meeting"
                                            />
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <x-base.form-label for="modal-form-4">
                                                Has the Words
                                            </x-base.form-label>
                                            <x-base.form-input
                                                id="modal-form-4"
                                                type="text"
                                                placeholder="Job, Work, Documentation"
                                            />
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
                                            <x-base.form-label for="modal-form-5">
                                                Doesn't Have
                                            </x-base.form-label>
                                            <x-base.form-input
                                                id="modal-form-5"
                                                type="text"
                                                placeholder="Job, Work, Documentation"
                                            />
                                        </div>
                                        <div class="col-span-12 sm:col-span-6">
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
                                    </x-base.dialog.description>
                                    <x-base.dialog.footer>
                                        <x-base.button
                                            class="mr-1 w-20"
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
                                    </x-base.dialog.footer>
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Header & Footer Modal -->
            <!-- BEGIN: Delete Modal -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Delete Modal
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-9">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-9"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#delete-modal-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Modal
                            </x-base.button>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.dialog id="delete-modal-preview">
                            <x-base.dialog.panel>
                                <div class="p-5 text-center">
                                    <x-base.lucide
                                        class="mx-auto mt-3 h-16 w-16 text-danger"
                                        icon="XCircle"
                                    />
                                    <div class="mt-5 text-3xl">Are you sure?</div>
                                    <div class="mt-2 text-slate-500">
                                        Do you really want to delete these records? <br />
                                        This process cannot be undone.
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <x-base.button
                                        class="mr-1 w-24"
                                        data-tw-dismiss="modal"
                                        type="button"
                                        variant="outline-secondary"
                                    >
                                        Cancel
                                    </x-base.button>
                                    <x-base.button
                                        class="w-24"
                                        type="button"
                                        variant="danger"
                                    >
                                        Delete
                                    </x-base.button>
                                </div>
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#delete-modal-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Modal
                                </x-base.button>
                            </div>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.dialog id="delete-modal-preview">
                                <x-base.dialog.panel>
                                    <div class="p-5 text-center">
                                        <x-base.lucide
                                            class="mx-auto mt-3 h-16 w-16 text-danger"
                                            icon="XCircle"
                                        />
                                        <div class="mt-5 text-3xl">Are you sure?</div>
                                        <div class="mt-2 text-slate-500">
                                            Do you really want to delete these records? <br />
                                            This process cannot be undone.
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <x-base.button
                                            class="mr-1 w-24"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="outline-secondary"
                                        >
                                            Cancel
                                        </x-base.button>
                                        <x-base.button
                                            class="w-24"
                                            type="button"
                                            variant="danger"
                                        >
                                            Delete
                                        </x-base.button>
                                    </div>
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Delete Modal -->
            <!-- BEGIN: Success Modal -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Success Modal
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-10">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-10"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#success-modal-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Modal
                            </x-base.button>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.dialog id="success-modal-preview">
                            <x-base.dialog.panel>
                                <div class="p-5 text-center">
                                    <x-base.lucide
                                        class="mx-auto mt-3 h-16 w-16 text-success"
                                        icon="CheckCircle"
                                    />
                                    <div class="mt-5 text-3xl">Good job!</div>
                                    <div class="mt-2 text-slate-500">
                                        You clicked the button!
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <x-base.button
                                        class="w-24"
                                        data-tw-dismiss="modal"
                                        type="button"
                                        variant="primary"
                                    >
                                        Ok
                                    </x-base.button>
                                </div>
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#success-modal-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Modal
                                </x-base.button>
                            </div>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.dialog id="success-modal-preview">
                                <x-base.dialog.panel>
                                    <div class="p-5 text-center">
                                        <x-base.lucide
                                            class="mx-auto mt-3 h-16 w-16 text-success"
                                            icon="CheckCircle"
                                        />
                                        <div class="mt-5 text-3xl">Good job!</div>
                                        <div class="mt-2 text-slate-500">
                                            You clicked the button!
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <x-base.button
                                            class="w-24"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Ok
                                        </x-base.button>
                                    </div>
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Success Modal -->
            <!-- BEGIN: Tiny Slider Modal -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Tiny Slider Modal
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-11">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-11"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <!-- BEGIN: Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                data-tw-toggle="modal"
                                data-tw-target="#tiny-slider-modal-preview"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Modal
                            </x-base.button>
                        </div>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.dialog id="tiny-slider-modal-preview">
                            <x-base.dialog.panel class="p-5">
                                <div class="mx-6">
                                    <x-base.tiny-slider config="multiple-items">
                                        <div class="h-56 px-2">
                                            <div class="image-fit h-full overflow-hidden rounded-md">
                                                <img
                                                    src="{{ Vite::asset($fakers[0]['images'][0]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </div>
                                        </div>
                                        <div class="h-56 px-2">
                                            <div class="image-fit h-full overflow-hidden rounded-md">
                                                <img
                                                    src="{{ Vite::asset($fakers[0]['images'][1]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </div>
                                        </div>
                                        <div class="h-56 px-2">
                                            <div class="image-fit h-full overflow-hidden rounded-md">
                                                <img
                                                    src="{{ Vite::asset($fakers[0]['images'][2]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </div>
                                        </div>
                                        <div class="h-56 px-2">
                                            <div class="image-fit h-full overflow-hidden rounded-md">
                                                <img
                                                    src="{{ Vite::asset($fakers[0]['images'][3]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </div>
                                        </div>
                                    </x-base.tiny-slider>
                                </div>
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#tiny-slider-modal-preview"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Modal
                                </x-base.button>
                            </div>
                            <!-- END: Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.dialog id="tiny-slider-modal-preview">
                                <x-base.dialog.panel class="p-5">
                                    <div class="mx-6">
                                        <x-base.tiny-slider config="multiple-items">
                                            <div class="h-56 px-2">
                                                <div class="image-fit h-full overflow-hidden rounded-md">
                                                    <img
                                                        src="{{ Vite::asset($fakers[0]['images'][0]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                            <div class="h-56 px-2">
                                                <div class="image-fit h-full overflow-hidden rounded-md">
                                                    <img
                                                        src="{{ Vite::asset($fakers[0]['images'][1]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                            <div class="h-56 px-2">
                                                <div class="image-fit h-full overflow-hidden rounded-md">
                                                    <img
                                                        src="{{ Vite::asset($fakers[0]['images'][2]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                            <div class="h-56 px-2">
                                                <div class="image-fit h-full overflow-hidden rounded-md">
                                                    <img
                                                        src="{{ Vite::asset($fakers[0]['images'][3]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                        </x-base.tiny-slider>
                                    </div>
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Tiny Slider Modal -->
            <!-- BEGIN: Programmatically Show/Hide Modal -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Programmatically Show/Hide Modal
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-12">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-12"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <!-- BEGIN: Show Modal Toggle -->
                        <div class="text-center">
                            <x-base.button
                                class="mb-2 mr-1"
                                id="programmatically-show-modal"
                                href="#"
                                as="a"
                                variant="primary"
                            >
                                Show Modal
                            </x-base.button>
                        </div>
                        <!-- END: Show Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <x-base.dialog id="programmatically-modal">
                            <x-base.dialog.panel class="p-10 text-center">
                                <!-- BEGIN: Hide Modal Toggle -->
                                <x-base.button
                                    class="mr-1"
                                    id="programmatically-hide-modal"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Hide Modal
                                </x-base.button>
                                <!-- END: Hide Modal Toggle -->
                                <!-- BEGIN: Toggle Modal Toggle -->
                                <x-base.button
                                    class="mr-1"
                                    id="programmatically-toggle-modal"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Toggle Modal
                                </x-base.button>
                                <!-- END: Toggle Modal Toggle -->
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- END: Modal Content -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Show Modal Toggle -->
                            <div class="text-center">
                                <x-base.button
                                    class="mb-2 mr-1"
                                    id="programmatically-show-modal"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    Show Modal
                                </x-base.button>
                            </div>
                            <!-- END: Show Modal Toggle -->
                            <!-- BEGIN: Modal Content -->
                            <x-base.dialog id="programmatically-modal">
                                <x-base.dialog.panel class="p-10 text-center">
                                    <!-- BEGIN: Hide Modal Toggle -->
                                    <x-base.button
                                        class="mr-1"
                                        id="programmatically-hide-modal"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        Hide Modal
                                    </x-base.button>
                                    <!-- END: Hide Modal Toggle -->
                                    <!-- BEGIN: Toggle Modal Toggle -->
                                    <x-base.button
                                        class="mr-1"
                                        id="programmatically-toggle-modal"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        Toggle Modal
                                    </x-base.button>
                                    <!-- END: Toggle Modal Toggle -->
                                </x-base.dialog.panel>
                            </x-base.dialog>
                            <!-- END: Modal Content -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Programmatically Show/Hide Modal -->
        </div>
    </div>
@endsection

@pushOnce('scripts')
    @vite('resources/js/pages/modal.js')
@endPushOnce
