@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Tom Select - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Tom Select</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Select -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Basic Select
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
                        <!-- BEGIN: Basic Select -->
                        <div>
                            <label>Basic</label>
                            <div class="mt-2">
                                <x-base.tom-select
                                    class="w-full"
                                    data-placeholder="Select your favorite actors"
                                >
                                    <option value="1">Leonardo DiCaprio</option>
                                    <option value="2">Johnny Deep</option>
                                    <option value="3">Robert Downey, Jr</option>
                                    <option value="4">Samuel L. Jackson</option>
                                    <option value="5">Morgan Freeman</option>
                                </x-base.tom-select>
                            </div>
                        </div>
                        <!-- END: Basic Select -->
                        <!-- BEGIN: Nested Select -->
                        <div class="mt-3">
                            <label>Nested</label>
                            <div class="mt-2">
                                <x-base.tom-select
                                    class="w-full"
                                    data-placeholder="Select your favorite actors"
                                >
                                    <optgroup label="American Actors">
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option value="2">Johnny Deep</option>
                                        <option value="3">Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </optgroup>
                                    <optgroup label="American Actresses">
                                        <option value="6">Scarlett Johansson</option>
                                        <option value="7">Jessica Alba</option>
                                        <option value="8">Jennifer Lawrence</option>
                                        <option value="9">Emma Stone</option>
                                        <option value="10">Angelina Jolie</option>
                                    </optgroup>
                                </x-base.tom-select>
                            </div>
                        </div>
                        <!-- END: Nested Select -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Basic Select -->
                            <div>
                                <label>Basic</label>
                                <div class="mt-2">
                                    <x-base.tom-select
                                        class="w-full"
                                        data-placeholder="Select your favorite actors"
                                    >
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option value="2">Johnny Deep</option>
                                        <option value="3">Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </x-base.tom-select>
                                </div>
                            </div>
                            <!-- END: Basic Select -->
                            <!-- BEGIN: Nested Select -->
                            <div class="mt-3">
                                <label>Nested</label>
                                <div class="mt-2">
                                    <x-base.tom-select
                                        class="w-full"
                                        data-placeholder="Select your favorite actors"
                                    >
                                        <optgroup label="American Actors">
                                            <option value="1">Leonardo DiCaprio</option>
                                            <option value="2">Johnny Deep</option>
                                            <option value="3">Robert Downey, Jr</option>
                                            <option value="4">Samuel L. Jackson</option>
                                            <option value="5">Morgan Freeman</option>
                                        </optgroup>
                                        <optgroup label="American Actresses">
                                            <option value="6">Scarlett Johansson</option>
                                            <option value="7">Jessica Alba</option>
                                            <option value="8">Jennifer Lawrence</option>
                                            <option value="9">Emma Stone</option>
                                            <option value="10">Angelina Jolie</option>
                                        </optgroup>
                                    </x-base.tom-select>
                                </div>
                            </div>
                            <!-- END: Nested Select -->
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Basic Select -->
            <!-- BEGIN: Multiple Select -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Multiple Select
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
                        <x-base.tom-select
                            class="w-full"
                            data-placeholder="Select your favorite actors"
                            multiple
                        >
                            <option
                                value="1"
                                selected
                            >Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option
                                value="3"
                                selected
                            >Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </x-base.tom-select>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.tom-select
                                class="w-full"
                                data-placeholder="Select your favorite actors"
                                multiple
                            >
                                <option
                                    value="1"
                                    selected
                                >Leonardo DiCaprio</option>
                                <option value="2">Johnny Deep</option>
                                <option
                                    value="3"
                                    selected
                                >Robert Downey, Jr</option>
                                <option value="4">Samuel L. Jackson</option>
                                <option value="5">Morgan Freeman</option>
                            </x-base.tom-select>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Multiple Select -->
            <!-- BEGIN: Header -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Header</h2>
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
                        <x-base.tom-select
                            class="w-full"
                            data-placeholder="Select your favorite actors"
                            data-header="Actors"
                            multiple
                        >
                            <option value="1">Leonardo DiCaprio</option>
                            <option
                                value="2"
                                selected
                            >Johnny Deep</option>
                            <option
                                value="3"
                                selected
                            >Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option
                                value="5"
                                selected
                            >Morgan Freeman</option>
                        </x-base.tom-select>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.tom-select
                                class="w-full"
                                data-placeholder="Select your favorite actors"
                                data-header="Actors"
                                multiple
                            >
                                <option value="1">Leonardo DiCaprio</option>
                                <option
                                    value="2"
                                    selected
                                >Johnny Deep</option>
                                <option
                                    value="3"
                                    selected
                                >Robert Downey, Jr</option>
                                <option value="4">Samuel L. Jackson</option>
                                <option
                                    value="5"
                                    selected
                                >Morgan Freeman</option>
                            </x-base.tom-select>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Header -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input Group -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Input Group</h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-4">
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
                        <div class="flex">
                            <div
                                class="z-30 -mr-1 flex w-10 items-center justify-center rounded-l border bg-slate-100 text-slate-600 dark:border-darkmode-800 dark:bg-darkmode-700 dark:text-slate-400">
                                @
                            </div>
                            <x-base.tom-select class="w-full">
                                <option value="1">Leonardo DiCaprio</option>
                                <option value="2">Johnny Deep</option>
                                <option value="3">Robert Downey, Jr</option>
                                <option value="4">Samuel L. Jackson</option>
                                <option value="5">Morgan Freeman</option>
                            </x-base.tom-select>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="flex">
                                <div class="flex">
                                    <div
                                        class="z-30 -mr-1 flex w-10 items-center justify-center rounded-l border bg-slate-100 text-slate-600 dark:border-darkmode-800 dark:bg-darkmode-700 dark:text-slate-400">
                                        @
                                    </div>
                                    <x-base.tom-select class="w-full">
                                        <option value="1">Leonardo DiCaprio</option>
                                        <option value="2">Johnny Deep</option>
                                        <option value="3">Robert Downey, Jr</option>
                                        <option value="4">Samuel L. Jackson</option>
                                        <option value="5">Morgan Freeman</option>
                                    </x-base.tom-select>
                                </div>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Input Group -->
            <!-- BEGIN: Disabled -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Disabled</h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-5">
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
                        <x-base.tom-select
                            class="w-full"
                            disabled
                        >
                            <option value="1">Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3">Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </x-base.tom-select>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.tom-select
                                class="w-full"
                                disabled
                            >
                                <option value="1">Leonardo DiCaprio</option>
                                <option value="2">Johnny Deep</option>
                                <option value="3">Robert Downey, Jr</option>
                                <option value="4">Samuel L. Jackson</option>
                                <option value="5">Morgan Freeman</option>
                            </x-base.tom-select>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Disabled -->
            <!-- BEGIN: Disabled Option -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Disabled Option
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-6">
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
                        <x-base.tom-select class="w-full">
                            <option
                                value="1"
                                disabled
                            >
                                Leonardo DiCaprio
                            </option>
                            <option value="2">Johnny Deep</option>
                            <option value="3">Robert Downey, Jr</option>
                            <option
                                value="4"
                                disabled
                            >
                                Samuel L. Jackson
                            </option>
                            <option value="5">Morgan Freeman</option>
                        </x-base.tom-select>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.tom-select class="w-full">
                                <option
                                    value="1"
                                    disabled
                                >Leonardo DiCaprio</option>
                                <option value="2">Johnny Deep</option>
                                <option value="3">Robert Downey, Jr</option>
                                <option
                                    value="4"
                                    disabled
                                >Samuel L. Jackson</option>
                                <option value="5">Morgan Freeman</option>
                            </x-base.tom-select>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Disabled Option -->
        </div>
    </div>
@endsection
