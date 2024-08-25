@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Tab - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Tab</h2>
    </div>
    <div class="intro-y mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Tab -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Tab</h2>
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
                        <x-base.tab.group>
                            <x-base.tab.list variant="tabs">
                                <x-base.tab
                                    id="example-1-tab"
                                    selected
                                >
                                    <x-base.tab.button
                                        class="w-full py-2"
                                        as="button"
                                    >
                                        Example Tab 1
                                    </x-base.tab.button>
                                </x-base.tab>
                                <x-base.tab id="example-2-tab">
                                    <x-base.tab.button
                                        class="w-full py-2"
                                        as="button"
                                    >
                                        Example Tab 2
                                    </x-base.tab.button>
                                </x-base.tab>
                            </x-base.tab.list>
                            <x-base.tab.panels class="border-b border-l border-r">
                                <x-base.tab.panel
                                    class="p-5 leading-relaxed"
                                    id="example-1"
                                    selected
                                >
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap
                                    into electronic typesetting, remaining essentially
                                    unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum
                                    passages, and more recently with desktop publishing
                                    software like Aldus PageMaker including versions of
                                    Lorem Ipsum.
                                </x-base.tab.panel>
                                <x-base.tab.panel
                                    class="p-5 leading-relaxed"
                                    id="example-2"
                                >
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page when
                                    looking at its layout. The point of using Lorem Ipsum
                                    is that it has a more-or-less normal distribution of
                                    letters, as opposed to using 'Content here, content
                                    here', making it look like readable English. Many
                                    desktop publishing packages and web page editors now
                                    use Lorem Ipsum as their default model text, and a
                                    search for 'lorem ipsum' will uncover many web sites
                                    still in their infancy. Various versions have evolved
                                    over the years, sometimes by accident, sometimes on
                                    purpose (injected humour and the like).
                                </x-base.tab.panel>
                            </x-base.tab.panels>
                        </x-base.tab.group>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.tab.group>
                                <x-base.tab.list variant="tabs">
                                    <x-base.tab
                                        id="example-1-tab"
                                        selected
                                    >
                                        <x-base.tab.button
                                            class="w-full py-2"
                                            as="button"
                                        >
                                            Example Tab 1
                                        </x-base.tab.button>
                                    </x-base.tab>
                                    <x-base.tab id="example-2-tab">
                                        <x-base.tab.button
                                            class="w-full py-2"
                                            as="button"
                                        >
                                            Example Tab 2
                                        </x-base.tab.button>
                                    </x-base.tab>
                                </x-base.tab.list>
                                <x-base.tab.panels class="border-b border-l border-r">
                                    <x-base.tab.panel
                                        class="p-5 leading-relaxed"
                                        id="example-1"
                                        selected
                                    >
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap
                                        into electronic typesetting, remaining essentially
                                        unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing Lorem Ipsum
                                        passages, and more recently with desktop publishing
                                        software like Aldus PageMaker including versions of
                                        Lorem Ipsum.
                                    </x-base.tab.panel>
                                    <x-base.tab.panel
                                        class="p-5 leading-relaxed"
                                        id="example-2"
                                    >
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when
                                        looking at its layout. The point of using Lorem Ipsum
                                        is that it has a more-or-less normal distribution of
                                        letters, as opposed to using 'Content here, content
                                        here', making it look like readable English. Many
                                        desktop publishing packages and web page editors now
                                        use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum' will uncover many web sites
                                        still in their infancy. Various versions have evolved
                                        over the years, sometimes by accident, sometimes on
                                        purpose (injected humour and the like).
                                    </x-base.tab.panel>
                                </x-base.tab.panels>
                            </x-base.tab.group>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Basic Tab -->
            <!-- BEGIN: Boxed Tab -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Boxed Tab</h2>
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
                        <x-base.tab.group>
                            <x-base.tab.list variant="boxed-tabs">
                                <x-base.tab
                                    id="example-3-tab"
                                    selected
                                >
                                    <x-base.tab.button
                                        class="w-full py-2"
                                        as="button"
                                    >
                                        Example Tab 1
                                    </x-base.tab.button>
                                </x-base.tab>
                                <x-base.tab id="example-4-tab">
                                    <x-base.tab.button
                                        class="w-full py-2"
                                        as="button"
                                    >
                                        Example Tab 2
                                    </x-base.tab.button>
                                </x-base.tab>
                            </x-base.tab.list>
                            <x-base.tab.panels class="mt-5">
                                <x-base.tab.panel
                                    class="leading-relaxed"
                                    id="example-3"
                                    selected
                                >
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap
                                    into electronic typesetting, remaining essentially
                                    unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum
                                    passages, and more recently with desktop publishing
                                    software like Aldus PageMaker including versions of
                                    Lorem Ipsum.
                                </x-base.tab.panel>
                                <x-base.tab.panel
                                    class="leading-relaxed"
                                    id="example-4"
                                >
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page when
                                    looking at its layout. The point of using Lorem Ipsum
                                    is that it has a more-or-less normal distribution of
                                    letters, as opposed to using 'Content here, content
                                    here', making it look like readable English. Many
                                    desktop publishing packages and web page editors now
                                    use Lorem Ipsum as their default model text, and a
                                    search for 'lorem ipsum' will uncover many web sites
                                    still in their infancy. Various versions have evolved
                                    over the years, sometimes by accident, sometimes on
                                    purpose (injected humour and the like).
                                </x-base.tab.panel>
                            </x-base.tab.panels>
                        </x-base.tab.group>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.tab.group>
                                <x-base.tab.list variant="boxed-tabs">
                                    <x-base.tab
                                        id="example-3-tab"
                                        selected
                                    >
                                        <x-base.tab.button
                                            class="w-full py-2"
                                            as="button"
                                        >
                                            Example Tab 1
                                        </x-base.tab.button>
                                    </x-base.tab>
                                    <x-base.tab id="example-4-tab">
                                        <x-base.tab.button
                                            class="w-full py-2"
                                            as="button"
                                        >
                                            Example Tab 2
                                        </x-base.tab.button>
                                    </x-base.tab>
                                </x-base.tab.list>
                                <x-base.tab.panels class="mt-5">
                                    <x-base.tab.panel
                                        class="leading-relaxed"
                                        id="example-3"
                                        selected
                                    >
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap
                                        into electronic typesetting, remaining essentially
                                        unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing Lorem Ipsum
                                        passages, and more recently with desktop publishing
                                        software like Aldus PageMaker including versions of
                                        Lorem Ipsum.
                                    </x-base.tab.panel>
                                    <x-base.tab.panel
                                        class="leading-relaxed"
                                        id="example-4"
                                    >
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when
                                        looking at its layout. The point of using Lorem Ipsum
                                        is that it has a more-or-less normal distribution of
                                        letters, as opposed to using 'Content here, content
                                        here', making it look like readable English. Many
                                        desktop publishing packages and web page editors now
                                        use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum' will uncover many web sites
                                        still in their infancy. Various versions have evolved
                                        over the years, sometimes by accident, sometimes on
                                        purpose (injected humour and the like).
                                    </x-base.tab.panel>
                                </x-base.tab.panels>
                            </x-base.tab.group>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Boxed Tab -->
            <!-- BEGIN: Link Tab -->
            <x-base.preview-component class="intro-y box mt-5">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Link Tab</h2>
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
                        <x-base.tab.group>
                            <x-base.tab.list variant="link-tabs">
                                <x-base.tab
                                    id="example-5-tab"
                                    selected
                                >
                                    <x-base.tab.button
                                        class="w-full py-2"
                                        as="button"
                                    >
                                        Example Tab 1
                                    </x-base.tab.button>
                                </x-base.tab>
                                <x-base.tab id="example-6-tab">
                                    <x-base.tab.button
                                        class="w-full py-2"
                                        as="button"
                                    >
                                        Example Tab 2
                                    </x-base.tab.button>
                                </x-base.tab>
                            </x-base.tab.list>
                            <x-base.tab.panels class="mt-5">
                                <x-base.tab.panel
                                    class="leading-relaxed"
                                    id="example-5"
                                    selected
                                >
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has
                                    survived not only five centuries, but also the leap
                                    into electronic typesetting, remaining essentially
                                    unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum
                                    passages, and more recently with desktop publishing
                                    software like Aldus PageMaker including versions of
                                    Lorem Ipsum.
                                </x-base.tab.panel>
                                <x-base.tab.panel
                                    class="leading-relaxed"
                                    id="example-6"
                                >
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page when
                                    looking at its layout. The point of using Lorem Ipsum
                                    is that it has a more-or-less normal distribution of
                                    letters, as opposed to using 'Content here, content
                                    here', making it look like readable English. Many
                                    desktop publishing packages and web page editors now
                                    use Lorem Ipsum as their default model text, and a
                                    search for 'lorem ipsum' will uncover many web sites
                                    still in their infancy. Various versions have evolved
                                    over the years, sometimes by accident, sometimes on
                                    purpose (injected humour and the like).
                                </x-base.tab.panel>
                            </x-base.tab.panels>
                        </x-base.tab.group>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.tab.group>
                                <x-base.tab.list variant="link-tabs">
                                    <x-base.tab
                                        id="example-5-tab"
                                        selected
                                    >
                                        <x-base.tab.button
                                            class="w-full py-2"
                                            as="button"
                                        >
                                            Example Tab 1
                                        </x-base.tab.button>
                                    </x-base.tab>
                                    <x-base.tab id="example-6-tab">
                                        <x-base.tab.button
                                            class="w-full py-2"
                                            as="button"
                                        >
                                            Example Tab 2
                                        </x-base.tab.button>
                                    </x-base.tab>
                                </x-base.tab.list>
                                <x-base.tab.panels class="mt-5">
                                    <x-base.tab.panel
                                        class="leading-relaxed"
                                        id="example-5"
                                        selected
                                    >
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap
                                        into electronic typesetting, remaining essentially
                                        unchanged. It was popularised in the 1960s with the
                                        release of Letraset sheets containing Lorem Ipsum
                                        passages, and more recently with desktop publishing
                                        software like Aldus PageMaker including versions of
                                        Lorem Ipsum.
                                    </x-base.tab.panel>
                                    <x-base.tab.panel
                                        class="leading-relaxed"
                                        id="example-6"
                                    >
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when
                                        looking at its layout. The point of using Lorem Ipsum
                                        is that it has a more-or-less normal distribution of
                                        letters, as opposed to using 'Content here, content
                                        here', making it look like readable English. Many
                                        desktop publishing packages and web page editors now
                                        use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum' will uncover many web sites
                                        still in their infancy. Various versions have evolved
                                        over the years, sometimes by accident, sometimes on
                                        purpose (injected humour and the like).
                                    </x-base.tab.panel>
                                </x-base.tab.panels>
                            </x-base.tab.group>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Basic Tab -->
        </div>
    </div>
@endsection
