@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Validation - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Form Validation</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Validation -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Implementation
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
                        <!-- BEGIN: Validation Form -->
                        <form class="validate-form">
                            <div class="input-form">
                                <x-base.form-label
                                    class="flex w-full flex-col sm:flex-row"
                                    htmlFor="validation-form-1"
                                >
                                    Name
                                    <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                        Required, at least 2 characters
                                    </span>
                                </x-base.form-label>
                                <x-base.form-input
                                    class="form-control"
                                    id="validation-form-1"
                                    name="name"
                                    type="text"
                                    placeholder="John Legend"
                                    minlength="2"
                                    required
                                />
                            </div>
                            <div class="input-form mt-3">
                                <x-base.form-label
                                    class="flex w-full flex-col sm:flex-row"
                                    htmlFor="validation-form-2"
                                >
                                    Email
                                    <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                        Required, email address format
                                    </span>
                                </x-base.form-label>
                                <x-base.form-input
                                    class="form-control"
                                    id="validation-form-2"
                                    name="email"
                                    type="email"
                                    placeholder="example@gmail.com"
                                    required
                                />
                            </div>
                            <div class="input-form mt-3">
                                <x-base.form-label
                                    class="flex w-full flex-col sm:flex-row"
                                    htmlFor="validation-form-3"
                                >
                                    Password
                                    <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                        Required, at least 6 characters
                                    </span>
                                </x-base.form-label>
                                <x-base.form-input
                                    class="form-control"
                                    id="validation-form-3"
                                    name="password"
                                    type="password"
                                    placeholder="secret"
                                    minlength="6"
                                    required
                                />
                            </div>
                            <div class="input-form mt-3">
                                <x-base.form-label
                                    class="flex w-full flex-col sm:flex-row"
                                    htmlFor="validation-form-4"
                                >
                                    Age
                                    <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                        Required, integer only & maximum 3 characters
                                    </span>
                                </x-base.form-label>
                                <x-base.form-input
                                    class="form-control"
                                    id="validation-form-4"
                                    name="age"
                                    type="number"
                                    placeholder="21"
                                    required
                                />
                            </div>
                            <div class="input-form mt-3">
                                <x-base.form-label
                                    class="flex w-full flex-col sm:flex-row"
                                    htmlFor="validation-form-5"
                                >
                                    Profile URL
                                    <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                        Optional, URL format
                                    </span>
                                </x-base.form-label>
                                <x-base.form-input
                                    class="form-control"
                                    id="validation-form-5"
                                    name="url"
                                    type="url"
                                    placeholder="https://google.com"
                                />
                            </div>
                            <div class="input-form mt-3">
                                <x-base.form-label
                                    class="flex w-full flex-col sm:flex-row"
                                    htmlFor="validation-form-6"
                                >
                                    Comment
                                    <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                        Required, at least 10 characters
                                    </span>
                                </x-base.form-label>
                                <x-base.form-textarea
                                    class="form-control"
                                    id="validation-form-6"
                                    name="comment"
                                    placeholder="Type your comments"
                                    minlength="10"
                                    required
                                ></x-base.form-textarea>
                            </div>
                            <x-base.button
                                class="mt-5"
                                type="submit"
                                variant="primary"
                            >
                                Register
                            </x-base.button>
                        </form>
                        <!-- END: Validation Form -->
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <!-- BEGIN: Validation Form -->
                            <form class="validate-form">
                                <div class="input-form">
                                    <x-base.form-label
                                        class="flex w-full flex-col sm:flex-row"
                                        htmlFor="validation-form-1"
                                    >
                                        Name
                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                            Required, at least 2 characters
                                        </span>
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="form-control"
                                        id="validation-form-1"
                                        name="name"
                                        type="text"
                                        placeholder="John Legend"
                                        minlength="2"
                                        required
                                    />
                                </div>
                                <div class="input-form mt-3">
                                    <x-base.form-label
                                        class="flex w-full flex-col sm:flex-row"
                                        htmlFor="validation-form-2"
                                    >
                                        Email
                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                            Required, email address format
                                        </span>
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="form-control"
                                        id="validation-form-2"
                                        name="email"
                                        type="email"
                                        placeholder="example@gmail.com"
                                        required
                                    />
                                </div>
                                <div class="input-form mt-3">
                                    <x-base.form-label
                                        class="flex w-full flex-col sm:flex-row"
                                        htmlFor="validation-form-3"
                                    >
                                        Password
                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                            Required, at least 6 characters
                                        </span>
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="form-control"
                                        id="validation-form-3"
                                        name="password"
                                        type="password"
                                        placeholder="secret"
                                        minlength="6"
                                        required
                                    />
                                </div>
                                <div class="input-form mt-3">
                                    <x-base.form-label
                                        class="flex w-full flex-col sm:flex-row"
                                        htmlFor="validation-form-4"
                                    >
                                        Age
                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                            Required, integer only & maximum 3 characters
                                        </span>
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="form-control"
                                        id="validation-form-4"
                                        name="age"
                                        type="number"
                                        placeholder="21"
                                        required
                                    />
                                </div>
                                <div class="input-form mt-3">
                                    <x-base.form-label
                                        class="flex w-full flex-col sm:flex-row"
                                        htmlFor="validation-form-5"
                                    >
                                        Profile URL
                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                            Optional, URL format
                                        </span>
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="form-control"
                                        id="validation-form-5"
                                        name="url"
                                        type="url"
                                        placeholder="https://google.com"
                                    />
                                </div>
                                <div class="input-form mt-3">
                                    <x-base.form-label
                                        class="flex w-full flex-col sm:flex-row"
                                        htmlFor="validation-form-6"
                                    >
                                        Comment
                                        <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                                            Required, at least 10 characters
                                        </span>
                                    </x-base.form-label>
                                    <x-base.form-textarea
                                        class="form-control"
                                        id="validation-form-6"
                                        name="comment"
                                        placeholder="Type your comments"
                                        minlength="10"
                                        required
                                    ></x-base.form-textarea>
                                </div>
                                <x-base.button
                                    class="mt-5"
                                    type="submit"
                                    variant="primary"
                                >
                                    Register
                                </x-base.button>
                            </form>
                            <!-- END: Validation Form -->
                        </x-base.highlight>
                        <x-base.highlight
                            class="mt-5"
                            type="javascript"
                        >
                            function onSubmit(pristine) {
                            let valid = pristine.validate();

                            if (valid) {
                            Toastify({
                            node: $("#success-notification-content")
                            .clone()
                            .removeClass("hidden")[0],
                            duration: 3000,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            }).showToast();
                            } else {
                            Toastify({
                            node: $("#failed-notification-content")
                            .clone()
                            .removeClass("hidden")[0],
                            duration: 3000,
                            newWindow: true,
                            close: true,
                            gravity: "top",
                            position: "right",
                            stopOnFocus: true,
                            }).showToast();
                            }
                            }

                            $(".validate-form").each(function () {
                            let pristine = new Pristine(this, {
                            classTo: "input-form",
                            errorClass: "has-error",
                            errorTextParent: "input-form",
                            errorTextClass: "text-danger mt-2",
                            });

                            pristine.addValidator(
                            $(this).find('input[type="url"]')[0],
                            function (value) {
                            let expression =
                            /[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)?/gi;
                            let regex = new RegExp(expression);
                            if (!value.length || (value.length && value.match(regex))) {
                            return true;
                            }
                            return false;
                            },
                            "This field is URL format only",
                            2,
                            false
                            );

                            $(this).on("submit", function (e) {
                            e.preventDefault();
                            onSubmit(pristine);
                            });
                            });
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Form Validation -->
            <!-- BEGIN: Success Notification Content -->
            <x-base.notification
                class="flex hidden"
                id="success-notification-content"
            >
                <x-base.lucide
                    class="text-success"
                    icon="CheckCircle"
                />
                <div class="ml-4 mr-4">
                    <div class="font-medium">Registration success!</div>
                    <div class="mt-1 text-slate-500">
                        Please check your e-mail for further info!
                    </div>
                </div>
            </x-base.notification>
            <!-- END: Success Notification Content -->
            <!-- BEGIN: Failed Notification Content -->
            <x-base.notification
                class="flex hidden"
                id="failed-notification-content"
            >
                <x-base.lucide
                    class="text-danger"
                    icon="XCircle"
                />
                <div class="ml-4 mr-4">
                    <div class="font-medium">Registration failed!</div>
                    <div class="mt-1 text-slate-500">
                        Please check the fileld form.
                    </div>
                </div>
            </x-base.notification>
            <!-- END: Failed Notification Content -->
        </div>
    </div>
@endsection

@pushOnce('vendors')
    @vite('resources/js/vendors/pristine.js')
    @vite('resources/js/vendors/toastify.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/pages/validation.js')
@endPushOnce
