@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Form Layout</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <div>
                    <x-base.form-label for="crud-form-1">Product Name</x-base.form-label>
                    <x-base.form-input
                        class="w-full"
                        id="crud-form-1"
                        type="text"
                        placeholder="Input text"
                    />
                </div>
                <div class="mt-3">
                    <x-base.form-label for="crud-form-2">Category</x-base.form-label>
                    <x-base.tom-select
                        class="w-full"
                        id="crud-form-2"
                        multiple
                    >
                        <option
                            value="1"
                            selected
                        >Sport & Outdoor</option>
                        <option value="2">PC & Laptop</option>
                        <option
                            value="3"
                            selected
                        >Smartphone & Tablet</option>
                        <option value="4">Photography</option>
                    </x-base.tom-select>
                </div>
                <div class="mt-3">
                    <x-base.form-label for="crud-form-3">Quantity</x-base.form-label>
                    <x-base.input-group inputGroup>
                        <x-base.form-input
                            id="crud-form-3"
                            type="text"
                            aria-describedby="input-group-1"
                            placeholder="Quantity"
                        />
                        <x-base.input-group.text id="input-group-1">pcs</x-base.input-group.text>
                    </x-base.input-group>
                </div>
                <div class="mt-3">
                    <x-base.form-label for="crud-form-4">Weight</x-base.form-label>
                    <x-base.input-group inputGroup>
                        <x-base.form-input
                            id="crud-form-4"
                            type="text"
                            aria-describedby="input-group-2"
                            placeholder="Weight"
                        />
                        <x-base.input-group.text id="input-group-2">grams</x-base.input-group.text>
                    </x-base.input-group>
                </div>
                <div class="mt-3">
                    <x-base.form-label>Price</x-base.form-label>
                    <div class="grid-cols-3 gap-2 sm:grid">
                        <x-base.input-group inputGroup>
                            <x-base.input-group.text id="input-group-3">Unit</x-base.input-group.text>
                            <x-base.form-input
                                type="text"
                                aria-describedby="input-group-3"
                                placeholder="Unit"
                            />
                        </x-base.input-group>
                        <x-base.input-group
                            class="mt-2 sm:mt-0"
                            inputGroup
                        >
                            <x-base.input-group.text id="input-group-4">
                                Wholesale
                            </x-base.input-group.text>
                            <x-base.form-input
                                type="text"
                                aria-describedby="input-group-4"
                                placeholder="Wholesale"
                            />
                        </x-base.input-group>
                        <x-base.input-group
                            class="mt-2 sm:mt-0"
                            inputGroup
                        >
                            <x-base.input-group.text id="input-group-5">Bulk</x-base.input-group.text>
                            <x-base.form-input
                                type="text"
                                aria-describedby="input-group-5"
                                placeholder="Bulk"
                            />
                        </x-base.input-group>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Active Status</label>
                    <x-base.form-switch class="mt-2">
                        <x-base.form-switch.input type="checkbox" />
                    </x-base.form-switch>
                </div>
                <div class="mt-3">
                    <label>Description</label>
                    <div class="mt-2">
                        <x-base.classic-editor>
                            <p>Content of the editor.</p>
                        </x-base.classic-editor>
                    </div>
                </div>
                <div class="mt-5 text-right">
                    <x-base.button
                        class="mr-1 w-24"
                        type="button"
                        variant="outline-secondary"
                    >
                        Cancel
                    </x-base.button>
                    <x-base.button
                        class="w-24"
                        type="button"
                        variant="primary"
                    >
                        Save
                    </x-base.button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
