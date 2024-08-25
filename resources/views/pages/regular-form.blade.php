@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Regular Form - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Regular Form</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Input</h2>
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
                        <div>
                            <x-base.form-label for="regular-form-1">Input Text</x-base.form-label>
                            <x-base.form-input
                                id="regular-form-1"
                                type="text"
                                placeholder="Input text"
                            />
                        </div>
                        <div class="mt-3">
                            <x-base.form-label for="regular-form-2">Rounded</x-base.form-label>
                            <x-base.form-input
                                id="regular-form-2"
                                type="text"
                                rounded
                                placeholder="Rounded"
                            />
                        </div>
                        <div class="mt-3">
                            <x-base.form-label for="regular-form-3">With Help</x-base.form-label>
                            <x-base.form-input
                                id="regular-form-3"
                                type="text"
                                placeholder="With help"
                            />
                            <x-base.form-help>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </x-base.form-help>
                        </div>
                        <div class="mt-3">
                            <x-base.form-label for="regular-form-4">Password</x-base.form-label>
                            <x-base.form-input
                                id="regular-form-4"
                                type="password"
                                placeholder="Password"
                            />
                        </div>
                        <div class="mt-3">
                            <x-base.form-label for="regular-form-5">Disabled</x-base.form-label>
                            <x-base.form-input
                                id="regular-form-5"
                                type="text"
                                placeholder="Disabled"
                                disabled
                            />
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <x-base.form-label for="regular-form-1">Input Text</x-base.form-label>
                                <x-base.form-input
                                    id="regular-form-1"
                                    type="text"
                                    placeholder="Input text"
                                />
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="regular-form-2">Rounded</x-base.form-label>
                                <x-base.form-input
                                    id="regular-form-2"
                                    type="text"
                                    rounded
                                    placeholder="Rounded"
                                />
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="regular-form-3">With Help</x-base.form-label>
                                <x-base.form-input
                                    id="regular-form-3"
                                    type="text"
                                    placeholder="With help"
                                />
                                <x-base.form-help>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.
                                </x-base.form-help>
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="regular-form-4">Password</x-base.form-label>
                                <x-base.form-input
                                    id="regular-form-4"
                                    type="password"
                                    placeholder="Password"
                                />
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="regular-form-5">Disabled</x-base.form-label>
                                <x-base.form-input
                                    id="regular-form-5"
                                    type="text"
                                    placeholder="Disabled"
                                    disabled
                                />
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Input -->
            <!-- BEGIN: Input Sizing -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Input Sizing
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
                        <x-base.form-input
                            formInputSize="lg"
                            type="text"
                            aria-label=".form-control-lg example"
                            placeholder=".form-control-lg"
                        />
                        <x-base.form-input
                            class="mt-2"
                            type="text"
                            aria-label="default input example"
                            placeholder="Default input"
                        />
                        <x-base.form-input
                            class="mt-2"
                            formInputSize="sm"
                            type="text"
                            aria-label=".form-control-sm example"
                            placeholder=".form-control-sm"
                        />
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.form-input
                                formInputSize="lg"
                                type="text"
                                aria-label=".form-control-lg example"
                                placeholder=".form-control-lg"
                            />
                            <x-base.form-input
                                class="mt-2"
                                type="text"
                                aria-label="default input example"
                                placeholder="Default input"
                            />
                            <x-base.form-input
                                class="mt-2"
                                formInputSize="sm"
                                type="text"
                                aria-label=".form-control-sm example"
                                placeholder=".form-control-sm"
                            />
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Input Sizing -->
            <!-- BEGIN: Input Groups -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Input Groups
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
                        <x-base.input-group inputGroup>
                            <x-base.input-group.text id="input-group-email">
                                @
                            </x-base.input-group.text>
                            <x-base.form-input
                                type="text"
                                aria-label="Email"
                                aria-describedby="input-group-email"
                                placeholder="Email"
                            />
                        </x-base.input-group>
                        <x-base.input-group
                            class="mt-2"
                            inputGroup
                        >
                            <x-base.form-input
                                type="text"
                                aria-label="Price"
                                aria-describedby="input-group-price"
                                placeholder="Price"
                            />
                            <x-base.input-group.text id="input-group-price">
                                .00
                            </x-base.input-group.text>
                        </x-base.input-group>
                        <x-base.input-group
                            class="mt-2"
                            inputGroup
                        >
                            <x-base.input-group.text>@</x-base.input-group.text>
                            <x-base.form-input
                                type="text"
                                aria-label="Amount (to the nearest dollar)"
                                placeholder="Price"
                            />
                            <x-base.input-group.text>.00</x-base.input-group.text>
                        </x-base.input-group>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.input-group inputGroup>
                                <x-base.input-group.text id="input-group-email">
                                    @
                                </x-base.input-group.text>
                                <x-base.form-input
                                    type="text"
                                    aria-label="Email"
                                    aria-describedby="input-group-email"
                                    placeholder="Email"
                                />
                            </x-base.input-group>
                            <x-base.input-group
                                class="mt-2"
                                inputGroup
                            >
                                <x-base.form-input
                                    type="text"
                                    aria-label="Price"
                                    aria-describedby="input-group-price"
                                    placeholder="Price"
                                />
                                <x-base.input-group.text id="input-group-price">
                                    .00
                                </x-base.input-group.text>
                            </x-base.input-group>
                            <x-base.input-group
                                class="mt-2"
                                inputGroup
                            >
                                <x-base.input-group.text>@</x-base.input-group.text>
                                <x-base.form-input
                                    type="text"
                                    aria-label="Amount (to the nearest dollar)"
                                    placeholder="Price"
                                />
                                <x-base.input-group.text>.00</x-base.input-group.text>
                            </x-base.input-group>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Input Groups -->
            <!-- BEGIN: Input State -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Input State</h2>
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
                        <div>
                            <x-base.form-label for="input-state-1">
                                Input Success
                            </x-base.form-label>
                            <x-base.form-input
                                class="border-success"
                                id="input-state-1"
                                type="text"
                                placeholder="Input text"
                            />
                            <div class="mt-3 grid h-1 w-full grid-cols-12 gap-4">
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                            </div>
                            <div class="mt-2 text-success">Strong password</div>
                        </div>
                        <div class="mt-3">
                            <x-base.form-label for="input-state-2">
                                Input Warning
                            </x-base.form-label>
                            <x-base.form-input
                                class="border-warning"
                                id="input-state-2"
                                type="text"
                                placeholder="Input text"
                            />
                            <div class="mt-2 text-warning">
                                Attempting to reconnect to server...
                            </div>
                        </div>
                        <div class="mt-3">
                            <x-base.form-label for="input-state-3">Input Error</x-base.form-label>
                            <x-base.form-input
                                class="border-danger"
                                id="input-state-3"
                                type="text"
                                placeholder="Input text"
                            />
                            <div class="mt-2 text-danger">
                                This field is required
                            </div>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <x-base.form-label for="input-state-1">
                                    Input Success
                                </x-base.form-label>
                                <x-base.form-input
                                    class="border-success"
                                    id="input-state-1"
                                    type="text"
                                    placeholder="Input text"
                                />
                                <div class="mt-3 grid h-1 w-full grid-cols-12 gap-4">
                                    <div class="col-span-3 h-full rounded bg-success"></div>
                                    <div class="col-span-3 h-full rounded bg-success"></div>
                                    <div class="col-span-3 h-full rounded bg-success"></div>
                                    <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                                </div>
                                <div class="mt-2 text-success">Strong password</div>
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="input-state-2">
                                    Input Warning
                                </x-base.form-label>
                                <x-base.form-input
                                    class="border-warning"
                                    id="input-state-2"
                                    type="text"
                                    placeholder="Input text"
                                />
                                <div class="mt-2 text-warning">
                                    Attempting to reconnect to server...
                                </div>
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="input-state-3">Input Error</x-base.form-label>
                                <x-base.form-input
                                    class="border-danger"
                                    id="input-state-3"
                                    type="text"
                                    placeholder="Input text"
                                />
                                <div class="mt-2 text-danger">
                                    This field is required
                                </div>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Input State -->
            <!-- BEGIN: Select Options -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Select Options
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
                        <div class="flex flex-col items-center sm:flex-row">
                            <x-base.form-select
                                class="sm:mr-2 sm:mt-2"
                                formSelectSize="lg"
                                aria-label=".form-select-lg example"
                            >
                                <option>Chris Evans</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </x-base.form-select>
                            <x-base.form-select
                                class="mt-2 sm:mr-2"
                                aria-label="Default select example"
                            >
                                <option>Chris Evans</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </x-base.form-select>
                            <x-base.form-select
                                class="mt-2"
                                formSelectSize="sm"
                                aria-label=".form-select-sm example"
                            >
                                <option>Chris Evans</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </x-base.form-select>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="flex flex-col items-center sm:flex-row">
                                <x-base.form-select
                                    class="sm:mr-2 sm:mt-2"
                                    formSelectSize="lg"
                                    aria-label=".form-select-lg example"
                                >
                                    <option>Chris Evans</option>
                                    <option>Liam Neeson</option>
                                    <option>Daniel Craig</option>
                                </x-base.form-select>
                                <x-base.form-select
                                    class="mt-2 sm:mr-2"
                                    aria-label="Default select example"
                                >
                                    <option>Chris Evans</option>
                                    <option>Liam Neeson</option>
                                    <option>Daniel Craig</option>
                                </x-base.form-select>
                                <x-base.form-select
                                    class="mt-2"
                                    formSelectSize="sm"
                                    aria-label=".form-select-sm example"
                                >
                                    <option>Chris Evans</option>
                                    <option>Liam Neeson</option>
                                    <option>Daniel Craig</option>
                                </x-base.form-select>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Select Options -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Vertical Form -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Vertical Form
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
                        <div>
                            <x-base.form-label for="vertical-form-1">Email</x-base.form-label>
                            <x-base.form-input
                                id="vertical-form-1"
                                type="text"
                                placeholder="example@gmail.com"
                            />
                        </div>
                        <div class="mt-3">
                            <x-base.form-label for="vertical-form-2">Password</x-base.form-label>
                            <x-base.form-input
                                id="vertical-form-2"
                                type="text"
                                placeholder="secret"
                            />
                        </div>
                        <x-base.form-check class="mt-5">
                            <x-base.form-check.input
                                id="vertical-form-3"
                                type="checkbox"
                                value=""
                            />
                            <x-base.form-check.label for="vertical-form-3">
                                Remember me
                            </x-base.form-check.label>
                        </x-base.form-check>
                        <x-base.button
                            class="mt-5"
                            variant="primary"
                        >
                            Login
                        </x-base.button>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <x-base.form-label for="vertical-form-1">Email</x-base.form-label>
                                <x-base.form-input
                                    id="vertical-form-1"
                                    type="text"
                                    placeholder="example@gmail.com"
                                />
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="vertical-form-2">Password</x-base.form-label>
                                <x-base.form-input
                                    id="vertical-form-2"
                                    type="text"
                                    placeholder="secret"
                                />
                            </div>
                            <x-base.form-check class="mt-5">
                                <x-base.form-check.input
                                    id="vertical-form-3"
                                    type="checkbox"
                                    value=""
                                />
                                <x-base.form-check.label for="vertical-form-3">
                                    Remember me
                                </x-base.form-check.label>
                            </x-base.form-check>
                            <x-base.button
                                class="mt-5"
                                variant="primary"
                            >
                                Login
                            </x-base.button>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Vertical Form -->
            <!-- BEGIN: Horizontal Form -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Horizontal Form
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
                        <x-base.form-inline>
                            <x-base.form-label
                                class="sm:w-20"
                                for="horizontal-form-1"
                            >
                                Email
                            </x-base.form-label>
                            <x-base.form-input
                                id="horizontal-form-1"
                                type="text"
                                placeholder="example@gmail.com"
                            />
                        </x-base.form-inline>
                        <x-base.form-inline class="mt-5">
                            <x-base.form-label
                                class="sm:w-20"
                                for="horizontal-form-2"
                            >
                                Password
                            </x-base.form-label>
                            <x-base.form-input
                                id="horizontal-form-2"
                                type="password"
                                placeholder="secret"
                            />
                        </x-base.form-inline>
                        <x-base.form-check class="mt-5 sm:ml-20 sm:pl-5">
                            <x-base.form-check.input
                                id="horizontal-form-3"
                                type="checkbox"
                                value=""
                            />
                            <x-base.form-check.label for="horizontal-form-3">
                                Remember me
                            </x-base.form-check.label>
                        </x-base.form-check>
                        <div class="mt-5 sm:ml-20 sm:pl-5">
                            <x-base.button variant="primary">Login</x-base.button>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.form-inline>
                                <x-base.form-label
                                    class="sm:w-20"
                                    for="horizontal-form-1"
                                >
                                    Email
                                </x-base.form-label>
                                <x-base.form-input
                                    id="horizontal-form-1"
                                    type="text"
                                    placeholder="example@gmail.com"
                                />
                            </x-base.form-inline>
                            <x-base.form-inline class="mt-5">
                                <x-base.form-label
                                    class="sm:w-20"
                                    for="horizontal-form-2"
                                >
                                    Password
                                </x-base.form-label>
                                <x-base.form-input
                                    id="horizontal-form-2"
                                    type="password"
                                    placeholder="secret"
                                />
                            </x-base.form-inline>
                            <x-base.form-check class="mt-5 sm:ml-20 sm:pl-5">
                                <x-base.form-check.input
                                    id="horizontal-form-3"
                                    type="checkbox"
                                    value=""
                                />
                                <x-base.form-check.label for="horizontal-form-3">
                                    Remember me
                                </x-base.form-check.label>
                            </x-base.form-check>
                            <div class="mt-5 sm:ml-20 sm:pl-5">
                                <x-base.button variant="primary">Login</x-base.button>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Horizontal Form -->
            <!-- BEGIN: Inline Form -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Inline Form</h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-8">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-8"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="grid grid-cols-12 gap-2">
                            <x-base.form-input
                                class="col-span-4"
                                type="text"
                                aria-label="default input inline 1"
                                placeholder="Input inline 1"
                            />
                            <x-base.form-input
                                class="col-span-4"
                                type="text"
                                aria-label="default input inline 2"
                                placeholder="Input inline 2"
                            />
                            <x-base.form-input
                                class="col-span-4"
                                type="text"
                                aria-label="default input inline 3"
                                placeholder="Input inline 3"
                            />
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="grid grid-cols-12 gap-2">
                                <x-base.form-input
                                    class="col-span-4"
                                    type="text"
                                    aria-label="default input inline 1"
                                    placeholder="Input inline 1"
                                />
                                <x-base.form-input
                                    class="col-span-4"
                                    type="text"
                                    aria-label="default input inline 2"
                                    placeholder="Input inline 2"
                                />
                                <x-base.form-input
                                    class="col-span-4"
                                    type="text"
                                    aria-label="default input inline 3"
                                    placeholder="Input inline 3"
                                />
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Inline Form -->
            <!-- BEGIN: Checkbox & Switch -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Checkbox & Switch
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
                        <div>
                            <label>Vertical Checkbox</label>
                            <x-base.form-check class="mt-2">
                                <x-base.form-check.input
                                    id="checkbox-switch-1"
                                    type="checkbox"
                                    value=""
                                />
                                <x-base.form-check.label for="checkbox-switch-1">
                                    Chris Evans
                                </x-base.form-check.label>
                            </x-base.form-check>
                            <x-base.form-check class="mt-2">
                                <x-base.form-check.input
                                    id="checkbox-switch-2"
                                    type="checkbox"
                                    value=""
                                />
                                <x-base.form-check.label for="checkbox-switch-2">
                                    Liam Neeson
                                </x-base.form-check.label>
                            </x-base.form-check>
                            <x-base.form-check class="mt-2">
                                <x-base.form-check.input
                                    id="checkbox-switch-3"
                                    type="checkbox"
                                    value=""
                                />
                                <x-base.form-check.label for="checkbox-switch-3">
                                    Daniel Craig
                                </x-base.form-check.label>
                            </x-base.form-check>
                        </div>
                        <div class="mt-3">
                            <label>Horizontal Checkbox</label>
                            <div class="mt-2 flex flex-col sm:flex-row">
                                <x-base.form-check class="mr-2">
                                    <x-base.form-check.input
                                        id="checkbox-switch-4"
                                        type="checkbox"
                                        value=""
                                    />
                                    <x-base.form-check.label for="checkbox-switch-4">
                                        Chris Evans
                                    </x-base.form-check.label>
                                </x-base.form-check>
                                <x-base.form-check class="mr-2 mt-2 sm:mt-0">
                                    <x-base.form-check.input
                                        id="checkbox-switch-5"
                                        type="checkbox"
                                        value=""
                                    />
                                    <x-base.form-check.label for="checkbox-switch-5">
                                        Liam Neeson
                                    </x-base.form-check.label>
                                </x-base.form-check>
                                <x-base.form-check class="mr-2 mt-2 sm:mt-0">
                                    <x-base.form-check.input
                                        id="checkbox-switch-6"
                                        type="checkbox"
                                        value=""
                                    />
                                    <x-base.form-check.label for="checkbox-switch-6">
                                        Daniel Craig
                                    </x-base.form-check.label>
                                </x-base.form-check>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Switch</label>
                            <div class="mt-2">
                                <x-base.form-switch>
                                    <x-base.form-switch.input
                                        id="checkbox-switch-7"
                                        type="checkbox"
                                    />
                                    <x-base.form-switch.label for="checkbox-switch-7">
                                        Default switch checkbox input
                                    </x-base.form-switch.label>
                                </x-base.form-switch>
                            </div>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <label>Vertical Checkbox</label>
                                <x-base.form-check class="mt-2">
                                    <x-base.form-check.input
                                        id="checkbox-switch-1"
                                        type="checkbox"
                                        value=""
                                    />
                                    <x-base.form-check.label for="checkbox-switch-1">
                                        Chris Evans
                                    </x-base.form-check.label>
                                </x-base.form-check>
                                <x-base.form-check class="mt-2">
                                    <x-base.form-check.input
                                        id="checkbox-switch-2"
                                        type="checkbox"
                                        value=""
                                    />
                                    <x-base.form-check.label for="checkbox-switch-2">
                                        Liam Neeson
                                    </x-base.form-check.label>
                                </x-base.form-check>
                                <x-base.form-check class="mt-2">
                                    <x-base.form-check.input
                                        id="checkbox-switch-3"
                                        type="checkbox"
                                        value=""
                                    />
                                    <x-base.form-check.label for="checkbox-switch-3">
                                        Daniel Craig
                                    </x-base.form-check.label>
                                </x-base.form-check>
                            </div>
                            <div class="mt-3">
                                <label>Horizontal Checkbox</label>
                                <div class="mt-2 flex flex-col sm:flex-row">
                                    <x-base.form-check class="mr-2">
                                        <x-base.form-check.input
                                            id="checkbox-switch-4"
                                            type="checkbox"
                                            value=""
                                        />
                                        <x-base.form-check.label for="checkbox-switch-4">
                                            Chris Evans
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-2 mt-2 sm:mt-0">
                                        <x-base.form-check.input
                                            id="checkbox-switch-5"
                                            type="checkbox"
                                            value=""
                                        />
                                        <x-base.form-check.label for="checkbox-switch-5">
                                            Liam Neeson
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-2 mt-2 sm:mt-0">
                                        <x-base.form-check.input
                                            id="checkbox-switch-6"
                                            type="checkbox"
                                            value=""
                                        />
                                        <x-base.form-check.label for="checkbox-switch-6">
                                            Daniel Craig
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Switch</label>
                                <div class="mt-2">
                                    <x-base.form-switch>
                                        <x-base.form-switch.input
                                            id="checkbox-switch-7"
                                            type="checkbox"
                                        />
                                        <x-base.form-switch.label for="checkbox-switch-7">
                                            Default switch checkbox input
                                        </x-base.form-switch.label>
                                    </x-base.form-switch>
                                </div>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Checkbox & Switch -->
            <!-- BEGIN: Radio Button -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Radio</h2>
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
                        <div>
                            <label>Vertical Radio Button</label>
                            <x-base.form-check class="mt-2">
                                <x-base.form-check.input
                                    id="radio-switch-1"
                                    name="vertical_radio_button"
                                    type="radio"
                                    value="vertical-radio-chris-evans"
                                />
                                <x-base.form-check.label for="radio-switch-1">
                                    Chris Evans
                                </x-base.form-check.label>
                            </x-base.form-check>
                            <x-base.form-check class="mt-2">
                                <x-base.form-check.input
                                    id="radio-switch-2"
                                    name="vertical_radio_button"
                                    type="radio"
                                    value="vertical-radio-liam-neeson"
                                />
                                <x-base.form-check.label for="radio-switch-2">
                                    Liam Neeson
                                </x-base.form-check.label>
                            </x-base.form-check>
                            <x-base.form-check class="mt-2">
                                <x-base.form-check.input
                                    id="radio-switch-3"
                                    name="vertical_radio_button"
                                    type="radio"
                                    value="vertical-radio-daniel-craig"
                                />
                                <x-base.form-check.label for="radio-switch-3">
                                    Daniel Craig
                                </x-base.form-check.label>
                            </x-base.form-check>
                        </div>
                        <div class="mt-3">
                            <label>Horizontal Radio Button</label>
                            <div class="mt-2 flex flex-col sm:flex-row">
                                <x-base.form-check class="mr-2">
                                    <x-base.form-check.input
                                        id="radio-switch-4"
                                        name="horizontal_radio_button"
                                        type="radio"
                                        value="horizontal-radio-chris-evans"
                                    />
                                    <x-base.form-check.label for="radio-switch-4">
                                        Chris Evans
                                    </x-base.form-check.label>
                                </x-base.form-check>
                                <x-base.form-check class="mr-2 mt-2 sm:mt-0">
                                    <x-base.form-check.input
                                        id="radio-switch-5"
                                        name="horizontal_radio_button"
                                        type="radio"
                                        value="horizontal-radio-liam-neeson"
                                    />
                                    <x-base.form-check.label for="radio-switch-5">
                                        Liam Neeson
                                    </x-base.form-check.label>
                                </x-base.form-check>
                                <x-base.form-check class="mr-2 mt-2 sm:mt-0">
                                    <x-base.form-check.input
                                        id="radio-switch-6"
                                        name="horizontal_radio_button"
                                        type="radio"
                                        value="horizontal-radio-daniel-craig"
                                    />
                                    <x-base.form-check.label for="radio-switch-6">
                                        Daniel Craig
                                    </x-base.form-check.label>
                                </x-base.form-check>
                            </div>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <label>Vertical Radio Button</label>
                                <x-base.form-check class="mt-2">
                                    <x-base.form-check.input
                                        id="radio-switch-1"
                                        name="vertical_radio_button"
                                        type="radio"
                                        value="vertical-radio-chris-evans"
                                    />
                                    <x-base.form-check.label for="radio-switch-1">
                                        Chris Evans
                                    </x-base.form-check.label>
                                </x-base.form-check>
                                <x-base.form-check class="mt-2">
                                    <x-base.form-check.input
                                        id="radio-switch-2"
                                        name="vertical_radio_button"
                                        type="radio"
                                        value="vertical-radio-liam-neeson"
                                    />
                                    <x-base.form-check.label for="radio-switch-2">
                                        Liam Neeson
                                    </x-base.form-check.label>
                                </x-base.form-check>
                                <x-base.form-check class="mt-2">
                                    <x-base.form-check.input
                                        id="radio-switch-3"
                                        name="vertical_radio_button"
                                        type="radio"
                                        value="vertical-radio-daniel-craig"
                                    />
                                    <x-base.form-check.label for="radio-switch-3">
                                        Daniel Craig
                                    </x-base.form-check.label>
                                </x-base.form-check>
                            </div>
                            <div class="mt-3">
                                <label>Horizontal Radio Button</label>
                                <div class="mt-2 flex flex-col sm:flex-row">
                                    <x-base.form-check class="mr-2">
                                        <x-base.form-check.input
                                            id="radio-switch-4"
                                            name="horizontal_radio_button"
                                            type="radio"
                                            value="horizontal-radio-chris-evans"
                                        />
                                        <x-base.form-check.label for="radio-switch-4">
                                            Chris Evans
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-2 mt-2 sm:mt-0">
                                        <x-base.form-check.input
                                            id="radio-switch-5"
                                            name="horizontal_radio_button"
                                            type="radio"
                                            value="horizontal-radio-liam-neeson"
                                        />
                                        <x-base.form-check.label for="radio-switch-5">
                                            Liam Neeson
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-2 mt-2 sm:mt-0">
                                        <x-base.form-check.input
                                            id="radio-switch-6"
                                            name="horizontal_radio_button"
                                            type="radio"
                                            value="horizontal-radio-daniel-craig"
                                        />
                                        <x-base.form-check.label for="radio-switch-6">
                                            Daniel Craig
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Radio Button -->
        </div>
    </div>
@endsection
