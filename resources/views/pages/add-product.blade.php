@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Add Product</h2>
    </div>
    <div class="mt-5 grid grid-cols-11 gap-x-6 pb-20">
        <!-- BEGIN: Notification -->
        <x-base.alert
            class="intro-y box col-span-11 mb-6 dark:border-darkmode-600"
            variant="primary"
            dismissible
        >
            <div class="flex items-center">
                <span>
                    <x-base.lucide
                        class="mr-2 h-4 w-4"
                        icon="Info"
                    />
                </span>
                <span>
                    Starting May 10, 2021, there will be changes to the Terms & Conditions
                    regarding the number of products that may be added by the Seller.
                    <a
                        class="ml-1 underline"
                        href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                        target="blank"
                    >
                        Learn More
                    </a>
                </span>
                <x-base.alert.dismiss-button class="text-white">
                    <x-base.lucide
                        class="h-4 w-4"
                        icon="X"
                    />
                </x-base.alert.dismiss-button>
            </div>
        </x-base.alert>
        <!-- BEGIN: Notification -->
        <div class="intro-y col-span-11 2xl:col-span-9">
            <!-- BEGIN: Uplaod Product -->
            <div class="intro-y box p-5">
                <div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                    <div
                        class="flex items-center border-b border-slate-200/60 pb-5 text-base font-medium dark:border-darkmode-400">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="ChevronDown"
                        /> Upload Product
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center text-slate-500">
                            <span>
                                <x-base.lucide
                                    class="h-5 w-5 text-warning"
                                    icon="Lightbulb"
                                />
                            </span>
                            <div class="ml-2">
                                <span class="mr-1">
                                    Avoid selling counterfeit products / violating Intellectual
                                    Property Rights, so that your products are not deleted.
                                </span>
                                <a
                                    class="font-medium text-primary"
                                    href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                    target="blank"
                                >
                                    Learn More
                                </a>
                            </div>
                        </div>
                        <x-base.form-inline
                            class="mt-10 flex-col items-start xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="w-full xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Photos</div>
                                        <div
                                            class="ml-2 rounded-md bg-slate-200 px-2 py-0.5 text-xs text-slate-600 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        <div>
                                            The image format is .jpg .jpeg .png and a minimum size of
                                            300 x 300 pixels (For optimal images use a minimum size of
                                            700 x 700 pixels).
                                        </div>
                                        <div class="mt-2">
                                            Select product photos or drag and drop up to 5 photos at
                                            once here. Include min. 3 attractive photos to make the
                                            product more attractive to buyers.
                                        </div>
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div
                                class="mt-3 w-full flex-1 rounded-md border-2 border-dashed pt-4 dark:border-darkmode-400 xl:mt-0">
                                <div class="grid grid-cols-10 gap-5 pl-4 pr-5">
                                    @foreach (array_slice($fakers, 0, 5) as $faker)
                                        <div
                                            class="image-fit zoom-in relative col-span-5 h-28 cursor-pointer md:col-span-2"
                                            v-for="(faker, fakerKey) in _.take(fakerData, 5)"
                                            :key="fakerKey"
                                        >
                                            <img
                                                class="rounded-md"
                                                src="{{ Vite::asset($faker['photos'][0]) }}"
                                                alt="Midone - Tailwind Admin Dashboard Template"
                                            />
                                            <x-base.tippy
                                                class="absolute right-0 top-0 -mr-2 -mt-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white"
                                                content="Remove this image?"
                                            >
                                                <x-base.lucide
                                                    class="h-4 w-4"
                                                    icon="X"
                                                />
                                            </x-base.tippy>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="relative mt-5 flex cursor-pointer items-center justify-center px-4 pb-4">
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Image"
                                    />
                                    <span class="mr-1 text-primary"> Upload a file </span>
                                    or drag and drop
                                    <x-base.form-input
                                        class="absolute left-0 top-0 h-full w-full opacity-0"
                                        id="horizontal-form-1"
                                        type="file"
                                    />
                                </div>
                            </div>
                        </x-base.form-inline>
                    </div>
                </div>
            </div>
            <!-- END: Uplaod Product -->
            <!-- BEGIN: Product Information -->
            <div class="intro-y box mt-5 p-5">
                <div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                    <div
                        class="flex items-center border-b border-slate-200/60 pb-5 text-base font-medium dark:border-darkmode-400">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="ChevronDown"
                        /> Product
                        Information
                    </div>
                    <div class="mt-5">
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Name</div>
                                        <div
                                            class="ml-2 rounded-md bg-slate-200 px-2 py-0.5 text-xs text-slate-600 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Include min. 40 characters to make it more attractive and
                                        easy for buyers to find, consisting of product type, brand,
                                        and information such as color, material, or type.
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-input
                                    id="product-name"
                                    type="text"
                                    placeholder="Product name"
                                />
                                <x-base.form-help class="text-right"> Maximum character 0/70 </x-base.form-help>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Category</div>
                                        <div
                                            class="ml-2 rounded-md bg-slate-200 px-2 py-0.5 text-xs text-slate-600 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-select id="category">
                                    @foreach (array_slice($fakers, 0, 9) as $faker)
                                        <option
                                            value="{{ $faker['categories'][0]['name'] }}"
                                            selected
                                        >{{ $faker['categories'][0]['name'] }}</option>
                                    @endforeach
                                </x-base.form-select>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Subcategory</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        You can add a new subcategory or choose from the existing
                                        subcategory list.
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.tom-select
                                    class="w-full"
                                    id="subcategory"
                                    data-placeholder="Etalase"
                                    multiple
                                >
                                    @foreach (array_slice($fakers, 0, 2) as $faker)
                                        <option
                                            value="{{ $faker['categories'][0]['name'] }}"
                                            selected
                                        >{{ $faker['categories'][0]['name'] }}</option>
                                    @endforeach
                                </x-base.tom-select>
                            </div>
                        </x-base.form-inline>
                    </div>
                </div>
            </div>
            <!-- END: Product Information -->
            <!-- BEGIN: Product Detail -->
            <div class="intro-y box mt-5 p-5">
                <div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                    <div
                        class="flex items-center border-b border-slate-200/60 pb-5 text-base font-medium dark:border-darkmode-400">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="ChevronDown"
                        /> Product Detail
                    </div>
                    <div class="mt-5">
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Condition</div>
                                        <div
                                            class="ml-2 rounded-md bg-slate-200 px-2 py-0.5 text-xs text-slate-600 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col sm:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <x-base.form-check.input
                                            id="condition-new"
                                            name="horizontal_radio_button"
                                            type="radio"
                                            value="horizontal-radio-chris-evans"
                                        />
                                        <x-base.form-check.label for="condition-new">
                                            New
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4 mt-2 sm:mt-0">
                                        <x-base.form-check.input
                                            id="condition-second"
                                            name="horizontal_radio_button"
                                            type="radio"
                                            value="horizontal-radio-liam-neeson"
                                        />
                                        <x-base.form-check.label for="condition-second">
                                            Second
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Description</div>
                                        <div
                                            class="ml-2 rounded-md bg-slate-200 px-2 py-0.5 text-xs text-slate-600 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        <div>
                                            Make sure the product description provides a detailed
                                            explanation of your product so that it is easy to
                                            understand and find your product.
                                        </div>
                                        <div class="mt-2">
                                            It is recommended not to enter info on mobile numbers,
                                            e-mails, etc. into the product description to protect your
                                            personal data.
                                        </div>
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.classic-editor>
                                    <p>Content of the editor.</p>
                                </x-base.classic-editor>
                                <x-base.form-help class="text-right">
                                    Maximum character 0/2000
                                </x-base.form-help>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Video</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Add a video so that buyers are more interested in your
                                        product.
                                        <a
                                            class="font-medium text-primary"
                                            href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                            target="blank"
                                        >
                                            Learn more.
                                        </a>
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.button
                                    class="w-40"
                                    variant="outline-secondary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Plus"
                                    /> Add Video URL
                                </x-base.button>
                            </div>
                        </x-base.form-inline>
                    </div>
                </div>
            </div>
            <!-- END: Product Detail -->
            <!-- BEGIN: Product Variant -->
            <div class="intro-y box mt-5 p-5">
                <div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                    <div
                        class="flex items-center border-b border-slate-200/60 pb-5 text-base font-medium dark:border-darkmode-400">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="ChevronDown"
                        /> Product Variant
                    </div>
                    <div class="mt-5">
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="sm:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Variant</div>
                                    </div>
                                    <div class="mt-2 text-xs leading-relaxed text-slate-500">
                                        Add variants such as color, size, or more. Choose a maximum
                                        of 2 variant types.
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0 xl:text-right">
                                <x-base.button
                                    class="w-44"
                                    variant="primary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Plus"
                                    /> Add Variant
                                </x-base.button>
                            </div>
                        </x-base.form-inline>
                    </div>
                </div>
            </div>
            <!-- END: Product Variant -->
            <!-- BEGIN: Product Variant (Details) -->
            <div class="intro-y box mt-5 p-5">
                <div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                    <div
                        class="flex items-center border-b border-slate-200/60 pb-5 text-base font-medium dark:border-darkmode-400">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="ChevronDown"
                        /> Product Variant
                        (Details)
                    </div>
                    <div class="mt-5">
                        <x-base.form-inline
                            class="mt-2 flex-col items-start pt-2 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Variant 1</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Add the types of variants and options, you can add up to 5
                                        options.
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div
                                    class="relative rounded-md bg-slate-50 py-10 pl-5 pr-5 dark:border dark:bg-transparent xl:pr-10">
                                    <a
                                        class="absolute right-0 top-0 mr-4 mt-4 text-slate-500"
                                        href=""
                                    >
                                        <x-base.lucide
                                            class="h-5 w-5"
                                            icon="X"
                                        />
                                    </a>
                                    <div>
                                        <x-base.form-inline
                                            class="mt-5 first:mt-0"
                                            formInline
                                        >
                                            <x-base.form-label class="sm:w-20">Name</x-base.form-label>
                                            <div class="flex flex-1 items-center xl:pr-20">
                                                <x-base.input-group
                                                    class="flex-1"
                                                    inputGroup
                                                >
                                                    <x-base.form-input
                                                        type="text"
                                                        placeholder="Size"
                                                    />
                                                    <x-base.input-group.text>6/14</x-base.input-group.text>
                                                </x-base.input-group>
                                            </div>
                                        </x-base.form-inline>
                                        <x-base.form-inline
                                            class="mt-5 items-start first:mt-0"
                                            formInline
                                        >
                                            <x-base.form-label class="mt-2 sm:w-20"> Options
                                            </x-base.form-label>
                                            <div class="flex-1">
                                                <div class="mt-5 items-center first:mt-0 xl:flex">
                                                    <x-base.input-group
                                                        class="flex-1"
                                                        inputGroup
                                                    >
                                                        <x-base.form-input
                                                            type="text"
                                                            placeholder="Small"
                                                        />
                                                        <x-base.input-group.text>6/14
                                                        </x-base.input-group.text>
                                                    </x-base.input-group>
                                                    <div class="mt-3 flex w-20 text-slate-500 xl:mt-0">
                                                        <a
                                                            class="xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a
                                                            class="ml-3 xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mt-5 items-center first:mt-0 xl:flex">
                                                    <x-base.input-group
                                                        class="flex-1"
                                                        inputGroup
                                                    >
                                                        <x-base.form-input
                                                            type="text"
                                                            placeholder="Medium"
                                                        />
                                                        <x-base.input-group.text>6/14
                                                        </x-base.input-group.text>
                                                    </x-base.input-group>
                                                    <div class="mt-3 flex w-20 text-slate-500 xl:mt-0">
                                                        <a
                                                            class="xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a
                                                            class="ml-3 xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mt-5 items-center first:mt-0 xl:flex">
                                                    <x-base.input-group
                                                        class="flex-1"
                                                        inputGroup
                                                    >
                                                        <x-base.form-input
                                                            type="text"
                                                            placeholder="Large"
                                                        />
                                                        <x-base.input-group.text>6/14
                                                        </x-base.input-group.text>
                                                    </x-base.input-group>
                                                    <div class="mt-3 flex w-20 text-slate-500 xl:mt-0">
                                                        <a
                                                            class="xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a
                                                            class="ml-3 xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </x-base.form-inline>
                                        <div class="mt-5 first:mt-0 xl:ml-20 xl:pl-5 xl:pr-20">
                                            <x-base.button
                                                class="w-full border-dashed"
                                                variant="outline-primary"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4"
                                                    icon="Plus"
                                                /> Add New
                                                Option
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-2 flex-col items-start pt-2 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Variant 2</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Add the types of variants and options, you can add up to 5
                                        options.
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div
                                    class="relative rounded-md bg-slate-50 py-10 pl-5 pr-5 dark:border dark:bg-transparent xl:pr-10">
                                    <a
                                        class="absolute right-0 top-0 mr-4 mt-4 text-slate-500"
                                        href=""
                                    >
                                        <x-base.lucide
                                            class="h-5 w-5"
                                            icon="X"
                                        />
                                    </a>
                                    <div>
                                        <x-base.form-inline
                                            class="mt-5 first:mt-0"
                                            formInline
                                        >
                                            <x-base.form-label class="sm:w-20">Name</x-base.form-label>
                                            <div class="flex flex-1 items-center xl:pr-20">
                                                <x-base.input-group
                                                    class="flex-1"
                                                    inputGroup
                                                >
                                                    <x-base.form-input
                                                        type="text"
                                                        placeholder="Color"
                                                    />
                                                    <x-base.input-group.text>6/14</x-base.input-group.text>
                                                </x-base.input-group>
                                            </div>
                                        </x-base.form-inline>
                                        <x-base.form-inline
                                            class="mt-5 items-start first:mt-0"
                                            formInline
                                        >
                                            <x-base.form-label class="mt-2 sm:w-20"> Options
                                            </x-base.form-label>
                                            <div class="flex-1">
                                                <div class="mt-5 items-center first:mt-0 xl:flex">
                                                    <x-base.input-group
                                                        class="flex-1"
                                                        inputGroup
                                                    >
                                                        <x-base.form-input
                                                            type="text"
                                                            placeholder="Black"
                                                        />
                                                        <x-base.input-group.text>6/14
                                                        </x-base.input-group.text>
                                                    </x-base.input-group>
                                                    <div class="mt-3 flex w-20 text-slate-500 xl:mt-0">
                                                        <a
                                                            class="xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a
                                                            class="ml-3 xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mt-5 items-center first:mt-0 xl:flex">
                                                    <x-base.input-group
                                                        class="flex-1"
                                                        inputGroup
                                                    >
                                                        <x-base.form-input
                                                            type="text"
                                                            placeholder="White"
                                                        />
                                                        <x-base.input-group.text>6/14
                                                        </x-base.input-group.text>
                                                    </x-base.input-group>
                                                    <div class="mt-3 flex w-20 text-slate-500 xl:mt-0">
                                                        <a
                                                            class="xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a
                                                            class="ml-3 xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mt-5 items-center first:mt-0 xl:flex">
                                                    <x-base.input-group
                                                        class="flex-1"
                                                        inputGroup
                                                    >
                                                        <x-base.form-input
                                                            type="text"
                                                            placeholder="Gray"
                                                        />
                                                        <x-base.input-group.text>6/14
                                                        </x-base.input-group.text>
                                                    </x-base.input-group>
                                                    <div class="mt-3 flex w-20 text-slate-500 xl:mt-0">
                                                        <a
                                                            class="xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a
                                                            class="ml-3 xl:ml-5"
                                                            href=""
                                                        >
                                                            <x-base.lucide
                                                                class="h-4 w-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </x-base.form-inline>
                                        <div class="mt-5 first:mt-0 xl:ml-20 xl:pl-5 xl:pr-20">
                                            <x-base.button
                                                class="w-full border-dashed"
                                                variant="outline-primary"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4"
                                                    icon="Plus"
                                                /> Add New
                                                Option
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </x-base.form-inline>
                        <div class="mt-2 pt-2 first:mt-0 first:pt-0 xl:ml-64 xl:pl-10">
                            <x-base.button
                                class="w-full border-dashed py-3"
                                variant="outline-secondary"
                            >
                                <x-base.lucide
                                    class="mr-2 h-4 w-4"
                                    icon="Plus"
                                /> Add New Variant
                            </x-base.button>
                        </div>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Variant Information</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Apply price and stock on all variants or based on certain
                                        variant codes.
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="grid-cols-4 gap-2 sm:grid">
                                    <x-base.input-group inputGroup>
                                        <x-base.input-group.text>$</x-base.input-group.text>
                                        <x-base.form-input
                                            type="text"
                                            placeholder="Price"
                                        />
                                    </x-base.input-group>
                                    <x-base.form-input
                                        class="mt-2 sm:mt-0"
                                        type="text"
                                        placeholder="Stock"
                                    />
                                    <x-base.form-input
                                        class="mt-2 sm:mt-0"
                                        type="text"
                                        placeholder="Variant Code"
                                    />
                                    <x-base.button
                                        class="mt-2 sm:mt-0"
                                        variant="primary"
                                    >
                                        Apply To All
                                    </x-base.button>
                                </div>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Variant List</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Set the price and stock for each variant.
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="overflow-x-auto">
                                    <x-base.table class="border">
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                    Size
                                                </x-base.table.th>
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                    <div class="flex items-center">
                                                        Color
                                                        <x-base.lucide
                                                            class="ml-2 h-4 w-4"
                                                            icon="HelpCircle"
                                                        />
                                                    </div>
                                                </x-base.table.th>
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                    Price
                                                </x-base.table.th>
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                    <div class="flex items-center">
                                                        <div
                                                            class="relative -mt-0.5 mr-2 h-4 w-4 before:absolute before:h-4 before:w-4 before:rounded-full before:bg-primary/20 before:content-[''] after:absolute after:h-4 after:w-4 after:rounded-full after:border-4 after:border-white/60 after:bg-primary after:content-[''] after:dark:border-darkmode-300 lg:before:animate-ping">
                                                        </div>
                                                        Stock
                                                        <x-base.lucide
                                                            class="ml-2 h-4 w-4"
                                                            icon="HelpCircle"
                                                        />
                                                    </div>
                                                </x-base.table.th>
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 !pl-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                    Variant Code
                                                </x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            <x-base.table.tr>
                                                <x-base.table.td
                                                    class="border-r"
                                                    rowspan="3"
                                                >
                                                    Small
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    Black
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Stock"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Variant Code"
                                                    />
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>
                                                    White
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Stock"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Variant Code"
                                                    />
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>
                                                    Gray
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Stock"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Variant Code"
                                                    />
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td
                                                    class="border-r"
                                                    rowspan="3"
                                                >
                                                    Medium
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    Black
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Stock"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Variant Code"
                                                    />
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>
                                                    White
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Stock"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Variant Code"
                                                    />
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>
                                                    Gray
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Stock"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Variant Code"
                                                    />
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td
                                                    class="border-r"
                                                    rowspan="3"
                                                >
                                                    Large
                                                </x-base.table.td>
                                                <x-base.table.td>
                                                    Black
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Stock"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Variant Code"
                                                    />
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>
                                                    White
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Stock"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Variant Code"
                                                    />
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td>
                                                    Gray
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Stock"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Variant Code"
                                                    />
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-inline
                                class="xl:!mr-10 xl:w-64"
                                formInline
                            >
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Wholesale</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Add wholesale price for certain quantity
                                        purchases.
                                    </div>
                                </div>
                            </x-base.form-inline>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="overflow-x-auto">
                                    <x-base.table class="border">
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th class="bg-slate-50 !pr-2 dark:bg-darkmode-800">
                                                </x-base.table.th>
                                                <x-base.table.th class="bg-slate-50 dark:bg-darkmode-800">
                                                </x-base.table.th>
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                    Min.
                                                </x-base.table.th>
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                    Max.
                                                </x-base.table.th>
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                    Unit Price
                                                </x-base.table.th>
                                                <x-base.table.th class="bg-slate-50 !px-2 dark:bg-darkmode-800">
                                                </x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody>
                                            <x-base.table.tr>
                                                <x-base.table.td class="!pr-2">1.</x-base.table.td>
                                                <x-base.table.td class="whitespace-nowrap">
                                                    Wholesale
                                                    Price
                                                    1
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Min Qty"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Max Qty"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-4 text-slate-500">
                                                    <a href="">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="Trash"
                                                        />
                                                    </a>
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td class="!pr-2">2.</x-base.table.td>
                                                <x-base.table.td class="whitespace-nowrap">
                                                    Wholesale
                                                    Price
                                                    2
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Min Qty"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Max Qty"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-4 text-slate-500">
                                                    <a href="">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="Trash"
                                                        />
                                                    </a>
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                            <x-base.table.tr>
                                                <x-base.table.td class="!pr-2">3.</x-base.table.td>
                                                <x-base.table.td class="whitespace-nowrap">
                                                    Wholesale
                                                    Price
                                                    3
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Min Qty"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        class="min-w-[6rem]"
                                                        type="text"
                                                        placeholder="Max Qty"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.input-group inputGroup>
                                                        <x-base.input-group.text>
                                                            $
                                                        </x-base.input-group.text>
                                                        <x-base.form-input
                                                            class="min-w-[6rem]"
                                                            type="text"
                                                            placeholder="Price"
                                                        />
                                                    </x-base.input-group>
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-4 text-slate-500">
                                                    <a href="">
                                                        <x-base.lucide
                                                            class="h-4 w-4"
                                                            icon="Trash"
                                                        />
                                                    </a>
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                                <x-base.button
                                    class="mt-4 w-full border-dashed"
                                    variant="outline-primary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Plus"
                                    /> Add New Wholesale
                                    Price
                                </x-base.button>
                            </div>
                        </x-base.form-inline>
                    </div>
                </div>
            </div>
            <!-- END: Product Variant (Details) -->
            <!-- BEGIN: Product Management -->
            <div class="intro-y box mt-5 p-5">
                <div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                    <div
                        class="flex items-center border-b border-slate-200/60 pb-5 text-base font-medium dark:border-darkmode-400">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="ChevronDown"
                        /> Product
                        Management
                    </div>
                    <div class="mt-5">
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Status</div>
                                        <div
                                            class="ml-2 rounded-md bg-slate-200 px-2 py-0.5 text-xs text-slate-600 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        If the status is active, your product can be searched for by
                                        potential buyers.
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-switch>
                                    <x-base.form-switch.input
                                        id="product-status-active"
                                        type="checkbox"
                                    />
                                    <x-base.form-switch.label for="product-status-active">
                                        Active
                                    </x-base.form-switch.label>
                                </x-base.form-switch>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Stock</div>
                                        <div
                                            class="ml-2 rounded-md bg-slate-200 px-2 py-0.5 text-xs text-slate-600 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-input
                                    id="product-stock"
                                    type="text"
                                    placeholder="Input Product Stock"
                                />
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">SKU (Stock Keeping Unit)</div>
                                        <div
                                            class="ml-2 rounded-md bg-slate-200 px-2 py-0.5 text-xs text-slate-600 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Use a unique SKU code if you want to mark your product.
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-input
                                    id="sku"
                                    type="text"
                                    placeholder="Input SKU"
                                />
                            </div>
                        </x-base.form-inline>
                    </div>
                </div>
            </div>
            <!-- END: Product Management -->
            <!-- BEGIN: Weight & Shipping -->
            <div class="intro-y box mt-5 p-5">
                <div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                    <div
                        class="flex items-center border-b border-slate-200/60 pb-5 text-base font-medium dark:border-darkmode-400">
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="ChevronDown"
                        /> Weight & Shipping
                    </div>
                    <div class="mt-5">
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Weight</div>
                                        <div
                                            class="ml-2 rounded-md bg-slate-200 px-2 py-0.5 text-xs text-slate-600 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Enter the weight by weighing the product after it is
                                        <span class="font-medium text-slate-600 dark:text-slate-300">
                                            packaged
                                        </span>
                                        .
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="grid-cols-4 gap-2 sm:grid">
                                    <x-base.form-select>
                                        <option value="Gram (g)">Gram (g)</option>
                                        <option value="Kilogram (kg)">Kilogram (kg)</option>
                                    </x-base.form-select>
                                    <x-base.form-input
                                        class="mt-2 sm:mt-0"
                                        id="product-weight"
                                        type="text"
                                        placeholder="Stock"
                                    />
                                </div>
                                <x-base.alert
                                    class="mt-5 bg-warning/20 dark:border-darkmode-400 dark:bg-darkmode-400"
                                    variant="outline-warning"
                                    dismissible
                                >
                                    <div class="flex items-center">
                                        <span>
                                            <x-base.lucide
                                                class="mr-3 h-6 w-6"
                                                icon="AlertTriangle"
                                            />
                                        </span>
                                        <span class="text-slate-800 dark:text-slate-500">
                                            Pay close attention to the weight of the product so that
                                            there is no difference in data with the shipping courier.
                                            <a
                                                class="font-medium text-primary"
                                                href=""
                                            >
                                                Learn More
                                            </a>
                                        </span>
                                        <x-base.alert.dismiss-button class="dark:text-white">
                                            <x-base.lucide
                                                class="h-4 w-4"
                                                icon="X"
                                            />
                                        </x-base.alert.dismiss-button>
                                    </div>
                                </x-base.alert>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Size</div>
                                        <div
                                            class="ml-2 rounded-md bg-slate-200 px-2 py-0.5 text-xs text-slate-600 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Enter the product size after packing to calculate the volume
                                        weight.
                                        <a
                                            class="font-medium text-primary"
                                            href=""
                                        >
                                            Learn Volume Weight
                                        </a>
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="grid-cols-3 gap-2 sm:grid">
                                    <x-base.input-group inputGroup>
                                        <x-base.form-input
                                            type="text"
                                            placeholder="Width"
                                        />
                                        <x-base.input-group.text>cm</x-base.input-group.text>
                                    </x-base.input-group>
                                    <x-base.input-group
                                        class="mt-2 sm:mt-0"
                                        inputGroup
                                    >
                                        <x-base.form-input
                                            type="text"
                                            placeholder="Height"
                                        />
                                        <x-base.input-group.text>cm</x-base.input-group.text>
                                    </x-base.input-group>
                                    <x-base.input-group
                                        class="mt-2 sm:mt-0"
                                        inputGroup
                                    >
                                        <x-base.form-input
                                            type="text"
                                            placeholder="Length"
                                        />
                                        <x-base.input-group.text>cm</x-base.input-group.text>
                                    </x-base.input-group>
                                </div>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <div class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Shipping Insurance</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Refund product & postage for the seller and buyer in case of
                                        damage / loss during shipping.
                                        <a
                                            class="font-medium text-primary"
                                            href=""
                                        > Learn More </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col sm:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <x-base.form-check.input
                                            id="shipping-insurance-required"
                                            name="horizontal_radio_button"
                                            type="radio"
                                            value="horizontal-radio-chris-evans"
                                        />
                                        <x-base.form-check.label>
                                            <div>Required</div>
                                            <div class="mt-1 w-56 text-xs leading-relaxed text-slate-500">
                                                You
                                                <span class="font-medium text-slate-600 dark:text-slate-300">
                                                    require
                                                </span>
                                                the buyer to activate shipping insurance
                                            </div>
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4 mt-2 sm:mt-0">
                                        <x-base.form-check.input
                                            id="shipping-insurance-optional"
                                            name="horizontal_radio_button"
                                            type="radio"
                                            value="horizontal-radio-liam-neeson"
                                        />
                                        <x-base.form-check.label>
                                            <div>Optional</div>
                                            <div class="mt-1 w-56 text-xs leading-relaxed text-slate-500">
                                                You
                                                <span class="font-medium text-slate-600 dark:text-slate-300">
                                                    give the buyer the option
                                                </span>
                                                to activate shipping insurance
                                            </div>
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Shipping Service</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                        Configure shipping services according to your product type.
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col sm:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <x-base.form-check.input
                                            id="shipping-service-standard"
                                            name="horizontal_radio_button"
                                            type="radio"
                                            value="horizontal-radio-chris-evans"
                                        />
                                        <x-base.form-check.label for="shipping-service-standard">
                                            Standard
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4 mt-2 sm:mt-0">
                                        <x-base.form-check.input
                                            id="shipping-service-custom"
                                            name="horizontal_radio_button"
                                            type="radio"
                                            value="horizontal-radio-liam-neeson"
                                        />
                                        <x-base.form-check.label for="shipping-service-custom">
                                            Custom
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="mt-3 text-xs leading-relaxed text-slate-500">
                                    The delivery service for this product will be the same as in
                                    the
                                    <a
                                        class="font-medium text-primary"
                                        href=""
                                    >
                                        Shipping Settings.
                                    </a>
                                </div>
                            </div>
                        </x-base.form-inline>
                        <x-base.form-inline
                            class="mt-5 flex-col items-start pt-5 first:mt-0 first:pt-0 xl:flex-row"
                            formInline
                        >
                            <x-base.form-label class="xl:!mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">PreOrder</div>
                                    </div>
                                </div>
                            </x-base.form-label>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-switch>
                                    <x-base.form-switch.input
                                        id="preorder-active"
                                        type="checkbox"
                                    />
                                    <x-base.form-switch.label
                                        class="text-xs leading-relaxed text-slate-500"
                                        for="preorder-active"
                                    >
                                        Activate PreOrder if you need a longer shipping
                                        process.
                                        <a
                                            class="font-medium text-primary"
                                            href=""
                                        >
                                            Learn more.
                                        </a>
                                    </x-base.form-switch.label>
                                </x-base.form-switch>
                            </div>
                        </x-base.form-inline>
                    </div>
                </div>
            </div>
            <!-- END: Weight & Shipping -->
            <div class="mt-5 flex flex-col justify-end gap-2 md:flex-row">
                <x-base.button
                    class="w-full border-slate-300 py-3 text-slate-500 dark:border-darkmode-400 md:w-52"
                    type="button"
                >
                    Cancel
                </x-base.button>
                <x-base.button
                    class="w-full border-slate-300 py-3 text-slate-500 dark:border-darkmode-400 md:w-52"
                    type="button"
                >
                    Save & Add New Product
                </x-base.button>
                <x-base.button
                    class="w-full py-3 md:w-52"
                    type="button"
                    variant="primary"
                >
                    Save
                </x-base.button>
            </div>
        </div>
        <div class="intro-y col-span-2 hidden 2xl:block">
            <div class="sticky top-0 pt-10">
                <ul
                    class="relative text-slate-500 before:absolute before:left-0 before:z-[-1] before:h-full before:w-[2px] before:bg-slate-200 before:content-[''] before:dark:bg-darkmode-600">
                    <li class="mb-4 border-l-2 border-primary pl-5 font-medium text-primary dark:border-primary">
                        <a href="">Upload Product</a>
                    </li>
                    <li class="mb-4 border-l-2 border-transparent pl-5 dark:border-transparent">
                        <a href="">Product Information</a>
                    </li>
                    <li class="mb-4 border-l-2 border-transparent pl-5 dark:border-transparent">
                        <a href="">Product Detail</a>
                    </li>
                    <li class="mb-4 border-l-2 border-transparent pl-5 dark:border-transparent">
                        <a href="">Product Variant</a>
                    </li>
                    <li class="mb-4 border-l-2 border-transparent pl-5 dark:border-transparent">
                        <a href="">Product Variant (Details)</a>
                    </li>
                    <li class="mb-4 border-l-2 border-transparent pl-5 dark:border-transparent">
                        <a href="">Product Management</a>
                    </li>
                    <li class="mb-4 border-l-2 border-transparent pl-5 dark:border-transparent">
                        <a href="">Weight & Shipping</a>
                    </li>
                </ul>
                <div
                    class="relative mt-10 rounded-md border border-warning bg-warning/20 p-5 dark:border-0 dark:bg-darkmode-600">
                    <x-base.lucide
                        class="absolute right-0 top-0 mr-3 mt-5 h-12 w-12 text-warning/80"
                        icon="Lightbulb"
                    />
                    <h2 class="text-lg font-medium">Tips</h2>
                    <div class="mt-5 font-medium">Price</div>
                    <div class="mt-2 text-xs leading-relaxed text-slate-600 dark:text-slate-500">
                        <div>
                            The image format is .jpg .jpeg .png and a minimum size of 300 x
                            300 pixels (For optimal images use a minimum size of 700 x 700
                            pixels).
                        </div>
                        <div class="mt-2">
                            Select product photos or drag and drop up to 5 photos at once
                            here. Include min. 3 attractive photos to make the product more
                            attractive to buyers.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
