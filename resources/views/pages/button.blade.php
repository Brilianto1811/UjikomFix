@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Button - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Buttons</h2>
    </div>
    <div class="intro-y mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Button -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Basic Buttons
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
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="primary"
                        >
                            Primary
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="secondary"
                        >
                            Secondary
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="success"
                        >
                            Success
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="warning"
                        >
                            Warning
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="pending"
                        >
                            Pending
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="danger"
                        >
                            Danger
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="dark"
                        >
                            Dark
                        </x-base.button>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="primary"
                            >
                                Primary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="secondary"
                            >
                                Secondary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="success"
                            >
                                Success
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="warning"
                            >
                                Warning
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="pending"
                            >
                                Pending
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="danger"
                            >
                                Danger
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="dark"
                            >
                                Dark
                            </x-base.button>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Basic Button -->
            <!-- BEGIN: Button Size -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Button Sizes
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
                        <div>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="primary"
                                size="sm"
                            >
                                Small
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="primary"
                            >
                                Medium
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="primary"
                                size="lg"
                            >
                                Large
                            </x-base.button>
                        </div>
                        <div class="mt-5">
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="secondary"
                                size="sm"
                            >
                                Small
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="secondary"
                            >
                                Medium
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="secondary"
                                size="lg"
                            >
                                Large
                            </x-base.button>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="primary"
                                    size="sm"
                                >
                                    Small
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="primary"
                                >
                                    Medium
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="primary"
                                    size="lg"
                                >
                                    Large
                                </x-base.button>
                            </div>
                            <div class="mt-5">
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="secondary"
                                    size="sm"
                                >
                                    Small
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="secondary"
                                >
                                    Medium
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="secondary"
                                    size="lg"
                                >
                                    Large
                                </x-base.button>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Button Size -->
            <!-- BEGIN: Button Link -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Working with Links
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
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            href=""
                            as="a"
                            variant="primary"
                        >
                            Link
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            href=""
                            as="a"
                            variant="secondary"
                        >
                            Button
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            href=""
                            as="a"
                            variant="success"
                        >
                            Input
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            href=""
                            as="a"
                            variant="warning"
                        >
                            Submit
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            href=""
                            as="a"
                            variant="pending"
                        >
                            Pending
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            href=""
                            as="a"
                            variant="danger"
                        >
                            Reset
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            href=""
                            as="a"
                            variant="dark"
                        >
                            Metal
                        </x-base.button>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                href=""
                                as="a"
                                variant="primary"
                            >
                                Link
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                href=""
                                as="a"
                                variant="secondary"
                            >
                                Button
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                href=""
                                as="a"
                                variant="success"
                            >
                                Input
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                href=""
                                as="a"
                                variant="warning"
                            >
                                Submit
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                href=""
                                as="a"
                                variant="pending"
                            >
                                Pending
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                href=""
                                as="a"
                                variant="danger"
                            >
                                Reset
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                href=""
                                as="a"
                                variant="dark"
                            >
                                Metal
                            </x-base.button>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Button Link -->
            <!-- BEGIN: Elevated Button -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Elevated Buttons
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
                        <div>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="primary"
                                elevated
                            >
                                Primary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="secondary"
                                elevated
                            >
                                Secondary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="success"
                                elevated
                            >
                                Success
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="warning"
                                elevated
                            >
                                Warning
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="pending"
                                elevated
                            >
                                Pending
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="danger"
                                elevated
                            >
                                Danger
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="dark"
                                elevated
                            >
                                Dark
                            </x-base.button>
                        </div>
                        <div class="mt-5">
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="primary"
                                elevated
                                rounded
                            >
                                Primary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="secondary"
                                elevated
                                rounded
                            >
                                Secondary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="success"
                                elevated
                                rounded
                            >
                                Success
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="warning"
                                elevated
                                rounded
                            >
                                Warning
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="pending"
                                elevated
                                rounded
                            >
                                Pending
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="danger"
                                elevated
                                rounded
                            >
                                Danger
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="dark"
                                elevated
                                rounded
                            >
                                Dark
                            </x-base.button>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="primary"
                                    elevated
                                >
                                    Primary
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="secondary"
                                    elevated
                                >
                                    Secondary
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="success"
                                    elevated
                                >
                                    Success
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="warning"
                                    elevated
                                >
                                    Warning
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="pending"
                                    elevated
                                >
                                    Pending
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="danger"
                                    elevated
                                >
                                    Danger
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="dark"
                                    elevated
                                >
                                    Dark
                                </x-base.button>
                            </div>
                            <div class="mt-5">
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="primary"
                                    elevated
                                    rounded
                                >
                                    Primary
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="secondary"
                                    elevated
                                    rounded
                                >
                                    Secondary
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="success"
                                    elevated
                                    rounded
                                >
                                    Success
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="warning"
                                    elevated
                                    rounded
                                >
                                    Warning
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="pending"
                                    elevated
                                    rounded
                                >
                                    Pending
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="danger"
                                    elevated
                                    rounded
                                >
                                    Danger
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-1 w-24"
                                    variant="dark"
                                    elevated
                                    rounded
                                >
                                    Dark
                                </x-base.button>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Elevated Button -->
            <!-- BEGIN: Social Media Button -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Social Media Buttons
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
                        <div class="flex flex-wrap">
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="facebook"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Facebook"
                                />
                                Facebook
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="twitter"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Twitter"
                                />
                                Twitter
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="instagram"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Instagram"
                                />
                                Instagram
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="linkedin"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Linkedin"
                                />
                                Linkedin
                            </x-base.button>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="flex flex-wrap">
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="facebook"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Facebook"
                                    />
                                    Facebook
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="twitter"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Twitter"
                                    />
                                    Twitter
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="instagram"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Instagram"
                                    />
                                    Instagram
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="linkedin"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Linkedin"
                                    />
                                    Linkedin
                                </x-base.button>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Social Media Button -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Outline Button -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Outline Buttons
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
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            variant="outline-primary"
                        >
                            Primary
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            variant="outline-secondary"
                        >
                            Secondary
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            variant="outline-success"
                        >
                            Success
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            variant="outline-warning"
                        >
                            Warning
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            variant="outline-pending"
                        >
                            Pending
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            variant="outline-danger"
                        >
                            Danger
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 inline-block w-24"
                            variant="outline-dark"
                        >
                            Dark
                        </x-base.button>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                variant="outline-primary"
                            >
                                Primary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                variant="outline-secondary"
                            >
                                Secondary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                variant="outline-success"
                            >
                                Success
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                variant="outline-warning"
                            >
                                Warning
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                variant="outline-pending"
                            >
                                Pending
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                variant="outline-danger"
                            >
                                Danger
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 inline-block w-24"
                                variant="outline-dark"
                            >
                                Dark
                            </x-base.button>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Outline Button -->
            <!-- BEGIN: Loading Button -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Loading State Buttons
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
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="primary"
                        >
                            Saving
                            <x-base.loading-icon
                                class="ml-2 h-4 w-4"
                                icon="oval"
                                color="white"
                            />
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="success"
                        >
                            Adding
                            <x-base.loading-icon
                                class="ml-2 h-4 w-4"
                                icon="spinning-circles"
                                color="white"
                            />
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="warning"
                        >
                            Loading
                            <x-base.loading-icon
                                class="ml-2 h-4 w-4"
                                icon="three-dots"
                                color="1a202c"
                            />
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="danger"
                        >
                            Deleting
                            <x-base.loading-icon
                                class="ml-2 h-4 w-4"
                                icon="puff"
                                color="white"
                            />
                        </x-base.button>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="primary"
                            >
                                Saving
                                <x-base.loading-icon
                                    class="ml-2 h-4 w-4"
                                    icon="oval"
                                    color="white"
                                />
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="success"
                            >
                                Adding
                                <x-base.loading-icon
                                    class="ml-2 h-4 w-4"
                                    icon="spinning-circles"
                                    color="white"
                                />
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="warning"
                            >
                                Loading
                                <x-base.loading-icon
                                    class="ml-2 h-4 w-4"
                                    icon="three-dots"
                                    color="1a202c"
                                />
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="danger"
                            >
                                Deleting
                                <x-base.loading-icon
                                    class="ml-2 h-4 w-4"
                                    icon="puff"
                                    color="white"
                                />
                            </x-base.button>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Loading Button -->
            <!-- BEGIN: Rounded Button -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Rounded Buttons
                    </h2>
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
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="primary"
                            rounded
                        >
                            Primary
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="secondary"
                            rounded
                        >
                            Secondary
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="success"
                            rounded
                        >
                            Success
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="warning"
                            rounded
                        >
                            Warning
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="pending"
                            rounded
                        >
                            Pending
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="danger"
                            rounded
                        >
                            Danger
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="dark"
                            rounded
                        >
                            Dark
                        </x-base.button>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="primary"
                                rounded
                            >
                                Primary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="secondary"
                                rounded
                            >
                                Secondary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="success"
                                rounded
                            >
                                Success
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="warning"
                                rounded
                            >
                                Warning
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="pending"
                                rounded
                            >
                                Pending
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="danger"
                                rounded
                            >
                                Danger
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="dark"
                                rounded
                            >
                                Dark
                            </x-base.button>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Rounded Button -->
            <!-- BEGIN: Soft Color Button -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Soft Color Buttons
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
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="soft-primary"
                            rounded
                        >
                            Primary
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="soft-secondary"
                            rounded
                        >
                            Secondary
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="soft-success"
                            rounded
                        >
                            Success
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="soft-warning"
                            rounded
                        >
                            Warning
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="soft-pending"
                            rounded
                        >
                            Pending
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="soft-danger"
                            rounded
                        >
                            Danger
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1 w-24"
                            variant="soft-dark"
                            rounded
                        >
                            Dark
                        </x-base.button>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="soft-primary"
                                rounded
                            >
                                Primary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="soft-secondary"
                                rounded
                            >
                                Secondary
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="soft-success"
                                rounded
                            >
                                Success
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="soft-warning"
                                rounded
                            >
                                Warning
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="soft-pending"
                                rounded
                            >
                                Pending
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="soft-danger"
                                rounded
                            >
                                Danger
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1 w-24"
                                variant="soft-dark"
                                rounded
                            >
                                Dark
                            </x-base.button>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Soft Color Button -->
            <!-- BEGIN: Icon Button -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Icon Buttons
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
                        <div class="flex flex-wrap">
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="primary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Activity"
                                />
                                Activity
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="secondary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="HardDrive"
                                />
                                Hard Drive
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="success"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Calendar"
                                />
                                Calendar
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="warning"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Share"
                                /> Share
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="pending"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Download"
                                />
                                Pending
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="danger"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Trash"
                                /> Trash
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-2 w-32"
                                variant="dark"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Image"
                                /> Image
                            </x-base.button>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="flex flex-wrap">
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="primary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Activity"
                                    />
                                    Activity
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="secondary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="HardDrive"
                                    />
                                    Hard Drive
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="success"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Calendar"
                                    />
                                    Calendar
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="warning"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Share"
                                    /> Share
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="pending"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Download"
                                    />
                                    Pending
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="danger"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Trash"
                                    /> Trash
                                </x-base.button>
                                <x-base.button
                                    class="mb-2 mr-2 w-32"
                                    variant="dark"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Image"
                                    /> Image
                                </x-base.button>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Icon Button -->
            <!-- BEGIN: Icon Only Button -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Icon Only Buttons
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
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="primary"
                        >
                            <x-base.lucide
                                class="h-5 w-5"
                                icon="Activity"
                            />
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="secondary"
                        >
                            <x-base.lucide
                                class="h-5 w-5"
                                icon="HardDrive"
                            />
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="success"
                        >
                            <x-base.lucide
                                class="h-5 w-5"
                                icon="Calendar"
                            />
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="warning"
                        >
                            <x-base.lucide
                                class="h-5 w-5"
                                icon="Share"
                            />
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="pending"
                        >
                            <x-base.lucide
                                class="h-5 w-5"
                                icon="Download"
                            />
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="danger"
                        >
                            <x-base.lucide
                                class="h-5 w-5"
                                icon="Trash"
                            />
                        </x-base.button>
                        <x-base.button
                            class="mb-2 mr-1"
                            variant="dark"
                        >
                            <x-base.lucide
                                class="h-5 w-5"
                                icon="Image"
                            />
                        </x-base.button>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="primary"
                            >
                                <x-base.lucide
                                    class="h-5 w-5"
                                    icon="Activity"
                                />
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="secondary"
                            >
                                <x-base.lucide
                                    class="h-5 w-5"
                                    icon="HardDrive"
                                />
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="success"
                            >
                                <x-base.lucide
                                    class="h-5 w-5"
                                    icon="Calendar"
                                />
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="warning"
                            >
                                <x-base.lucide
                                    class="h-5 w-5"
                                    icon="Share"
                                />
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="pending"
                            >
                                <x-base.lucide
                                    class="h-5 w-5"
                                    icon="Download"
                                />
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="danger"
                            >
                                <x-base.lucide
                                    class="h-5 w-5"
                                    icon="Trash"
                                />
                            </x-base.button>
                            <x-base.button
                                class="mb-2 mr-1"
                                variant="dark"
                            >
                                <x-base.lucide
                                    class="h-5 w-5"
                                    icon="Image"
                                />
                            </x-base.button>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Icon Only Button -->
        </div>
    </div>
@endsection
