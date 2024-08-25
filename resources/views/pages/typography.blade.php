@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Typography - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Typography</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Heading -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Heading</h2>
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
                            <h1 class="text-4xl font-medium leading-none">
                                h1. Heading 1
                            </h1>
                            <h2 class="mt-3 text-3xl font-medium leading-none">
                                h2. Heading 2
                            </h2>
                            <h3 class="mt-3 text-2xl font-medium leading-none">
                                h3. Heading 3
                            </h3>
                            <h4 class="mt-3 text-xl font-medium leading-none">
                                h4. Heading 4
                            </h4>
                            <h5 class="mt-3 text-lg font-medium leading-none">
                                h5. Heading 5
                            </h5>
                            <h6 class="mt-3 font-medium leading-none">
                                h6. Heading 6
                            </h6>
                        </div>
                        <div class="mt-5">
                            <h1 class="text-4xl font-medium leading-none text-primary">
                                h1. Heading 1
                            </h1>
                            <h2 class="mt-3 text-3xl font-medium leading-none text-slate-600 dark:text-slate-500">
                                h2. Heading 2
                            </h2>
                            <h3 class="mt-3 text-2xl font-medium leading-none text-success">
                                h3. Heading 3
                            </h3>
                            <h4 class="mt-3 text-xl font-medium leading-none text-warning">
                                h4. Heading 4
                            </h4>
                            <h5 class="mt-3 text-lg font-medium leading-none text-danger">
                                h5. Heading 5
                            </h5>
                            <h6 class="mt-3 font-medium leading-none text-slate-500">
                                h6. Heading 6
                            </h6>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <h1 class="text-4xl font-medium leading-none">h1. Heading 1</h1>
                                <h2 class="mt-3 text-3xl font-medium leading-none">
                                    h2. Heading 2
                                </h2>
                                <h3 class="mt-3 text-2xl font-medium leading-none">
                                    h3. Heading 3
                                </h3>
                                <h4 class="mt-3 text-xl font-medium leading-none">
                                    h4. Heading 4
                                </h4>
                                <h5 class="mt-3 text-lg font-medium leading-none">
                                    h5. Heading 5
                                </h5>
                                <h6 class="mt-3 font-medium leading-none">h6. Heading 6</h6>
                            </div>
                            <div class="mt-5">
                                <h1 class="text-4xl font-medium leading-none text-primary">
                                    h1. Heading 1
                                </h1>
                                <h2 class="mt-3 text-3xl font-medium leading-none text-slate-600 dark:text-slate-500">
                                    h2. Heading 2
                                </h2>
                                <h3 class="mt-3 text-2xl font-medium leading-none text-success">
                                    h3. Heading 3
                                </h3>
                                <h4 class="mt-3 text-xl font-medium leading-none text-warning">
                                    h4. Heading 4
                                </h4>
                                <h5 class="mt-3 text-lg font-medium leading-none text-danger">
                                    h5. Heading 5
                                </h5>
                                <h6 class="mt-3 font-medium leading-none text-slate-500">
                                    h6. Heading 6
                                </h6>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Heading -->
            <!-- BEGIN: Text Settings -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Text Settings
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
                            <div class="font-normal">Example text</div>
                            <div class="font-medium">Example medium text</div>
                            <div class="font-semibold">Example semibold text</div>
                            <div class="font-bold">Example bolder text</div>
                            <div class="font-extrabold">Example boldest text</div>
                        </div>
                        <div class="mt-5">
                            <div class="uppercase">Example uppercase text</div>
                            <div class="lowercase">Example lowercase text</div>
                            <div class="capitalize">Example capitalized text</div>
                            <div class="normal-case">Example cursive text</div>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <div class="font-normal">Example text</div>
                                <div class="font-medium">Example medium text</div>
                                <div class="font-semibold">Example semibold text</div>
                                <div class="font-bold">Example bolder text</div>
                                <div class="font-extrabold">Example boldest text</div>
                            </div>
                            <div class="mt-5">
                                <div class="uppercase">Example uppercase text</div>
                                <div class="lowercase">Example lowercase text</div>
                                <div class="capitalize">Example capitalized text</div>
                                <div class="normal-case">Example cursive text</div>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Text Settings -->
            <!-- BEGIN: Common Elements -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Common Elements
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
                        <div>
                            You can use the mark tag to
                            <mark class="bg-yellow-200 p-1">highlight</mark> text.
                        </div>
                        <del class="mt-1 block">
                            This line of text is meant to be treated as deleted text.
                        </del>
                        <s class="mt-1 block">
                            This line of text is meant to be treated as no longer
                            accurate.
                        </s>
                        <ins class="mt-1 block">
                            This line of text is meant to be treated as an addition to
                            the document.
                        </ins>
                        <u class="mt-1 block">
                            This line of text will render as underlined
                        </u>
                        <small class="mt-1 block">
                            This line of text is meant to be treated as fine print.
                        </small>
                        <strong class="mt-1 block">
                            This line rendered as bold text.
                        </strong>
                        <em class="mt-1 block">
                            This line rendered as italicized text.
                        </em>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                You can use the mark tag to
                                <mark class="bg-yellow-200 p-1">highlight</mark> text.
                            </div>
                            <del class="mt-1 block">This line of text is meant to be treated as deleted text.</del>
                            <s class="mt-1 block">This line of text is meant to be treated as no longer
                                accurate.</s>
                            <ins class="mt-1 block">This line of text is meant to be treated as an addition to the
                                document.</ins>
                            <u class="mt-1 block">This line of text will render as underlined</u>
                            <small class="mt-1 block">This line of text is meant to be treated as fine print.</small>
                            <strong class="mt-1 block">This line rendered as bold text.</strong>
                            <em class="mt-1 block">This line rendered as italicized text.</em>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Common Elements -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: BADGES -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Badges</h2>
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
                        <div class="font-medium">Basic Badge</div>
                        <div class="mt-2">
                            <span class="mr-1 rounded-full bg-primary px-1 text-xs text-white">
                                1
                            </span>
                            <span
                                class="mr-1 rounded-full border px-1 text-xs text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                            >
                                2
                            </span>
                            <span class="mr-1 rounded-full bg-success px-1 text-xs text-white">
                                3
                            </span>
                            <span class="mr-1 rounded-full bg-warning px-1 text-xs text-white">
                                4
                            </span>
                            <span class="mr-1 rounded-full bg-danger px-1 text-xs text-white">
                                5
                            </span>
                            <span
                                class="mr-1 rounded-full bg-slate-100 px-1 text-xs text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                            >
                                6
                            </span>
                        </div>
                        <div class="mt-6 font-medium">Badge Sizes</div>
                        <div class="mt-3">
                            <span class="mr-1 rounded-full bg-primary px-2 py-1 text-white">
                                1
                            </span>
                            <span
                                class="mr-1 rounded-full border px-2 py-1 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                            >
                                2
                            </span>
                            <span class="mr-1 rounded-full bg-success px-2 py-1 text-white">
                                3
                            </span>
                            <span class="mr-1 rounded-full bg-warning px-2 py-1 text-white">
                                4
                            </span>
                            <span class="mr-1 rounded-full bg-danger px-2 py-1 text-white">
                                5
                            </span>
                            <span
                                class="mr-1 rounded-full bg-slate-100 px-2 py-1 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                            >
                                6
                            </span>
                        </div>
                        <div class="mt-4">
                            <span class="mr-1 rounded-full bg-primary px-3 py-2 text-white">
                                1
                            </span>
                            <span
                                class="mr-1 rounded-full border px-3 py-2 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                            >
                                2
                            </span>
                            <span class="mr-1 rounded-full bg-success px-3 py-2 text-white">
                                3
                            </span>
                            <span class="mr-1 rounded-full bg-warning px-3 py-2 text-white">
                                4
                            </span>
                            <span class="mr-1 rounded-full bg-danger px-3 py-2 text-white">
                                5
                            </span>
                            <span
                                class="mr-1 rounded-full bg-slate-100 px-3 py-2 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                            >
                                6
                            </span>
                        </div>
                        <div class="mt-6">
                            <span class="mr-1 rounded-full bg-primary px-4 py-3 text-white">
                                1
                            </span>
                            <span
                                class="mr-1 rounded-full border px-4 py-3 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                            >
                                2
                            </span>
                            <span class="mr-1 rounded-full bg-success px-4 py-3 text-white">
                                3
                            </span>
                            <span class="mr-1 rounded-full bg-warning px-4 py-3 text-white">
                                4
                            </span>
                            <span class="mr-1 rounded-full bg-danger px-4 py-3 text-white">
                                5
                            </span>
                            <span
                                class="mr-1 rounded-full bg-slate-100 px-4 py-3 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                            >
                                6
                            </span>
                        </div>
                        <div class="mt-10 font-medium">Square Badge</div>
                        <div class="mt-2">
                            <span class="mr-1 bg-primary px-1 text-xs text-white">
                                1
                            </span>
                            <span
                                class="mr-1 border px-1 text-xs text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                            >
                                2
                            </span>
                            <span class="mr-1 bg-success px-1 text-xs text-white">
                                3
                            </span>
                            <span class="mr-1 bg-warning px-1 text-xs text-white">
                                4
                            </span>
                            <span class="mr-1 bg-danger px-1 text-xs text-white">
                                5
                            </span>
                            <span
                                class="mr-1 bg-slate-100 px-1 text-xs text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                            >
                                6
                            </span>
                        </div>
                        <div class="mt-6 font-medium">Outline Badge</div>
                        <div class="mt-4">
                            <span
                                class="mr-1 rounded-full border border-primary px-3 py-2 text-primary dark:border-primary"
                            >
                                1
                            </span>
                            <span
                                class="mr-1 rounded-full border px-3 py-2 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                            >
                                2
                            </span>
                            <span
                                class="mr-1 rounded-full border border-success px-3 py-2 text-success dark:border-success"
                            >
                                3
                            </span>
                            <span
                                class="mr-1 rounded-full border border-warning px-3 py-2 text-warning dark:border-warning"
                            >
                                4
                            </span>
                            <span class="mr-1 rounded-full border border-danger px-3 py-2 text-danger dark:border-danger">
                                5
                            </span>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="font-medium">Basic Badge</div>
                            <div class="mt-2">
                                <span class="mr-1 rounded-full bg-primary px-1 text-xs text-white">1</span>
                                <span
                                    class="mr-1 rounded-full border px-1 text-xs text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                >2</span>
                                <span class="mr-1 rounded-full bg-success px-1 text-xs text-white">3</span>
                                <span class="mr-1 rounded-full bg-warning px-1 text-xs text-white">4</span>
                                <span class="mr-1 rounded-full bg-danger px-1 text-xs text-white">5</span>
                                <span
                                    class="mr-1 rounded-full bg-slate-100 px-1 text-xs text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                >6</span>
                            </div>
                            <div class="mt-6 font-medium">Badge Sizes</div>
                            <div class="mt-3">
                                <span class="mr-1 rounded-full bg-primary px-2 py-1 text-white">1</span>
                                <span
                                    class="mr-1 rounded-full border px-2 py-1 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                >2</span>
                                <span class="mr-1 rounded-full bg-success px-2 py-1 text-white">3</span>
                                <span class="mr-1 rounded-full bg-warning px-2 py-1 text-white">4</span>
                                <span class="mr-1 rounded-full bg-danger px-2 py-1 text-white">5</span>
                                <span
                                    class="mr-1 rounded-full bg-slate-100 px-2 py-1 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                >6</span>
                            </div>
                            <div class="mt-4">
                                <span class="mr-1 rounded-full bg-primary px-3 py-2 text-white">1</span>
                                <span
                                    class="mr-1 rounded-full border px-3 py-2 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                >2</span>
                                <span class="mr-1 rounded-full bg-success px-3 py-2 text-white">3</span>
                                <span class="mr-1 rounded-full bg-warning px-3 py-2 text-white">4</span>
                                <span class="mr-1 rounded-full bg-danger px-3 py-2 text-white">5</span>
                                <span
                                    class="mr-1 rounded-full bg-slate-100 px-3 py-2 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                >6</span>
                            </div>
                            <div class="mt-6">
                                <span class="mr-1 rounded-full bg-primary px-4 py-3 text-white">1</span>
                                <span
                                    class="mr-1 rounded-full border px-4 py-3 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                >2</span>
                                <span class="mr-1 rounded-full bg-success px-4 py-3 text-white">3</span>
                                <span class="mr-1 rounded-full bg-warning px-4 py-3 text-white">4</span>
                                <span class="mr-1 rounded-full bg-danger px-4 py-3 text-white">5</span>
                                <span
                                    class="mr-1 rounded-full bg-slate-100 px-4 py-3 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                >6</span>
                            </div>
                            <div class="mt-10 font-medium">Square Badge</div>
                            <div class="mt-2">
                                <span class="mr-1 bg-primary px-1 text-xs text-white">1</span>
                                <span
                                    class="mr-1 border px-1 text-xs text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                >2</span>
                                <span class="mr-1 bg-success px-1 text-xs text-white">3</span>
                                <span class="mr-1 bg-warning px-1 text-xs text-white">4</span>
                                <span class="mr-1 bg-danger px-1 text-xs text-white">5</span>
                                <span
                                    class="mr-1 bg-slate-100 px-1 text-xs text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                                >6</span>
                            </div>
                            <div class="mt-6 font-medium">Outline Badge</div>
                            <div class="mt-4">
                                <span
                                    class="mr-1 rounded-full border border-primary px-3 py-2 text-primary dark:border-primary"
                                >1</span>
                                <span
                                    class="mr-1 rounded-full border px-3 py-2 text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                                >2</span>
                                <span
                                    class="mr-1 rounded-full border border-success px-3 py-2 text-success dark:border-success"
                                >3</span>
                                <span
                                    class="mr-1 rounded-full border border-warning px-3 py-2 text-warning dark:border-warning"
                                >4</span>
                                <span
                                    class="mr-1 rounded-full border border-danger px-3 py-2 text-danger dark:border-danger"
                                >5</span>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: BADGES -->
            <!-- BEGIN: SEPARATOR -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Separator</h2>
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
                        <div class="w-full border-t border-dashed border-slate-200/60 dark:border-darkmode-400"></div>
                        <div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400"></div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="w-full border-t border-dashed border-slate-200/60 dark:border-darkmode-400"></div>
                            <div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400"></div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: SEPARATOR -->
            <!-- BEGIN: Divider -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Divider</h2>
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
                        <div class="mt-2 flex w-full justify-center border-t border-slate-200/60 dark:border-darkmode-400">
                            <div class="-mt-3 bg-white px-5 text-slate-500 dark:bg-darkmode-600">
                                or
                            </div>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div
                                class="mt-2 flex w-full justify-center border-t border-slate-200/60 dark:border-darkmode-400">
                                <div class="-mt-3 bg-white px-5 text-slate-500 dark:bg-darkmode-600">
                                    or
                                </div>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Divider -->
            <!-- BEGIN: Links -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Links</h2>
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
                        <div>
                            <a
                                class="block font-normal text-primary"
                                href=""
                            >
                                Example text
                            </a>
                            <a
                                class="block font-medium text-primary"
                                href=""
                            >
                                Example medium text
                            </a>
                            <a
                                class="block font-semibold text-primary"
                                href=""
                            >
                                Example semibold text
                            </a>
                            <a
                                class="block font-bold text-primary"
                                href=""
                            >
                                Example bolder text
                            </a>
                            <a
                                class="block font-extrabold text-primary"
                                href=""
                            >
                                Example boldest text
                            </a>
                        </div>
                        <div class="mt-5">
                            <a
                                class="block text-primary"
                                href=""
                            >
                                Primary state
                            </a>
                            <a
                                class="block text-slate-600 dark:text-slate-500"
                                href=""
                            >
                                Secondary state
                            </a>
                            <a
                                class="block text-success"
                                href=""
                            >
                                Success state
                            </a>
                            <a
                                class="block text-warning"
                                href=""
                            >
                                Warning state
                            </a>
                            <a
                                class="block text-danger"
                                href=""
                            >
                                Danger state
                            </a>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div>
                                <a
                                    class="block font-normal text-primary"
                                    href=""
                                >Example text</a>
                                <a
                                    class="block font-medium text-primary"
                                    href=""
                                >Example medium text</a>
                                <a
                                    class="block font-semibold text-primary"
                                    href=""
                                >Example semibold text</a>
                                <a
                                    class="block font-bold text-primary"
                                    href=""
                                >Example bolder text</a>
                                <a
                                    class="block font-extrabold text-primary"
                                    href=""
                                >Example boldest text</a>
                            </div>
                            <div class="mt-5">
                                <a
                                    class="block text-primary"
                                    href=""
                                >Primary state</a>
                                <a
                                    class="block text-slate-600 dark:text-slate-500"
                                    href=""
                                >Secondary state</a>
                                <a
                                    class="block text-success"
                                    href=""
                                >Success state</a>
                                <a
                                    class="block text-warning"
                                    href=""
                                >Warning state</a>
                                <a
                                    class="block text-danger"
                                    href=""
                                >Danger state</a>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Links -->
        </div>
    </div>
@endsection
