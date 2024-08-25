@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Wysiwyg Editor - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">CKEditor</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <!-- BEGIN: Classic Editor -->
        <div class="col-span-12">
            <x-base.preview-component class="box">
                <div
                    class="flex flex-col items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Classic Editor
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
                        <x-base.classic-editor>
                            <p>Content of the editor.</p>
                        </x-base.classic-editor>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.classic-editor>
                                <p>Content of the editor.</p>
                            </x-base.classic-editor>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
        </div>
        <!-- END: Classic Editor -->
    </div>
@endsection
