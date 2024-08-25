@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>File Upload - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Dropzone</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Single File Upload -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Single File Upload
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-1">
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
                        <x-base.dropzone
                            class="dropzone"
                            data-single="true"
                            action="/file-upload"
                        >
                            <div class="text-lg font-medium">
                                Drop files here or click to upload.
                            </div>
                            <div class="text-gray-600">
                                This is just a demo dropzone. Selected files are
                                <span class="font-medium">not</span> actually
                                uploaded.
                            </div>
                        </x-base.dropzone>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.dropzone
                                class="dropzone"
                                data-single="true"
                                action="/file-upload"
                            >
                                <div class="text-lg font-medium">
                                    Drop files here or click to upload.
                                </div>
                                <div class="text-gray-600">
                                    This is just a demo dropzone. Selected files are
                                    <span class="font-medium">not</span> actually
                                    uploaded.
                                </div>
                            </x-base.dropzone>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Single File Upload -->
            <!-- BEGIN: Multiple File Upload -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Multiple File Upload
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-2">
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
                        <x-base.dropzone
                            class="dropzone"
                            data-single="true"
                            action="/file-upload"
                        >
                            <div class="text-lg font-medium">
                                Drop files here or click to upload.
                            </div>
                            <div class="text-gray-600">
                                This is just a demo dropzone. Selected files are
                                <span class="font-medium">not</span> actually
                                uploaded.
                            </div>
                        </x-base.dropzone>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.dropzone
                                class="dropzone"
                                data-single="true"
                                action="/file-upload"
                            >
                                <div class="text-lg font-medium">
                                    Drop files here or click to upload.
                                </div>
                                <div class="text-gray-600">
                                    This is just a demo dropzone. Selected files are
                                    <span class="font-medium">not</span> actually
                                    uploaded.
                                </div>
                            </x-base.dropzone>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Multiple File Upload -->
            <!-- BEGIN: File Type Validation -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        File Type Validation
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-3">
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
                        <x-base.dropzone
                            class="dropzone"
                            data-single="true"
                            action="/file-upload"
                        >
                            <div class="text-lg font-medium">
                                Drop files here or click to upload.
                            </div>
                            <div class="text-gray-600">
                                This is just a demo dropzone. Selected files are
                                <span class="font-medium">not</span> actually
                                uploaded.
                            </div>
                        </x-base.dropzone>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.dropzone
                                class="dropzone"
                                data-single="true"
                                action="/file-upload"
                            >
                                <div class="text-lg font-medium">
                                    Drop files here or click to upload.
                                </div>
                                <div class="text-gray-600">
                                    This is just a demo dropzone. Selected files are
                                    <span class="font-medium">not</span> actually
                                    uploaded.
                                </div>
                            </x-base.dropzone>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: File Type Validation -->
        </div>
    </div>
@endsection
