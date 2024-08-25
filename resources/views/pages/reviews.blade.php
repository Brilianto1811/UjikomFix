@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Reviews - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <h2 class="intro-y mt-10 text-lg font-medium">Reviews</h2>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center xl:flex-nowrap">
            <div class="flex w-full sm:w-auto">
                <div class="relative w-48 text-slate-500">
                    <x-base.form-input
                        class="!box w-48 pr-10"
                        type="text"
                        placeholder="Search by name..."
                    />
                    <x-base.lucide
                        class="absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"
                        icon="Search"
                    />
                </div>
                <x-base.form-select class="!box ml-2 w-48 xl:w-auto">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Removed</option>
                </x-base.form-select>
            </div>
            <div class="mx-auto hidden text-slate-500 xl:block">
                Showing 1 to 10 of 150 entries
            </div>
            <div class="mt-3 flex w-full flex-wrap items-center gap-y-3 xl:mt-0 xl:w-auto xl:flex-nowrap">
                <x-base.button
                    class="mr-2 shadow-md"
                    variant="primary"
                >
                    <x-base.lucide
                        class="mr-2 h-4 w-4"
                        icon="FileText"
                    /> Export to
                    Excel
                </x-base.button>
                <x-base.button
                    class="mr-2 shadow-md"
                    variant="primary"
                >
                    <x-base.lucide
                        class="mr-2 h-4 w-4"
                        icon="FileText"
                    /> Export to PDF
                </x-base.button>
                <x-base.menu>
                    <x-base.menu.button
                        class="!box px-2"
                        as="x-base.button"
                    >
                        <span class="flex h-5 w-5 items-center justify-center">
                            <x-base.lucide
                                class="h-4 w-4"
                                icon="Plus"
                            />
                        </span>
                    </x-base.menu.button>
                    <x-base.menu.items class="w-40">
                        <x-base.menu.item>
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="Printer"
                            /> Print
                        </x-base.menu.item>
                        <x-base.menu.item>
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="FileText"
                            /> Export to
                            Excel
                        </x-base.menu.item>
                        <x-base.menu.item>
                            <x-base.lucide
                                class="mr-2 h-4 w-4"
                                icon="FileText"
                            /> Export to
                            PDF
                        </x-base.menu.item>
                    </x-base.menu.items>
                </x-base.menu>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <x-base.table class="-mt-2 border-separate border-spacing-y-[10px]">
                <x-base.table.thead>
                    <x-base.table.tr>
                        <x-base.table.th class="whitespace-nowrap border-b-0">
                            <x-base.form-check.input type="checkbox" />
                        </x-base.table.th>
                        <x-base.table.th class="whitespace-nowrap border-b-0">
                            PRODUCT
                        </x-base.table.th>
                        <x-base.table.th class="whitespace-nowrap border-b-0">
                            NAME
                        </x-base.table.th>
                        <x-base.table.th class="whitespace-nowrap border-b-0">
                            RATING
                        </x-base.table.th>
                        <x-base.table.th class="whitespace-nowrap border-b-0 text-center">
                            POSTED TIME
                        </x-base.table.th>
                        <x-base.table.th class="whitespace-nowrap border-b-0 text-center">
                            STATUS
                        </x-base.table.th>
                        <x-base.table.th class="whitespace-nowrap border-b-0 text-center">
                            ACTIONS
                        </x-base.table.th>
                    </x-base.table.tr>
                </x-base.table.thead>
                <x-base.table.tbody>
                    @foreach (array_slice($fakers, 0, 9) as $faker)
                        <x-base.table.tr class="intro-x">
                            <x-base.table.td
                                class="box w-10 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                            >
                                <x-base.form-check.input type="checkbox" />
                            </x-base.table.td>
                            <x-base.table.td
                                class="box rounded-l-none rounded-r-none border-x-0 !py-4 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                            >
                                <div class="flex items-center">
                                    <div class="image-fit zoom-in h-10 w-10">
                                        <x-base.tippy
                                            class="border-1 rounded-lg border-white shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                            src="{{ Vite::asset($faker['images'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                            as="img"
                                            content="{{ 'Uploaded at ' . $faker['dates'][0] }}"
                                        />
                                    </div>
                                    <a
                                        class="ml-4 whitespace-nowrap font-medium"
                                        href=""
                                    >
                                        {{ $faker['products'][0]['name'] }}
                                    </a>
                                </div>
                            </x-base.table.td>
                            <x-base.table.td
                                class="box whitespace-nowrap rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                            >
                                <a
                                    class="flex items-center underline decoration-dotted"
                                    href="#"
                                >
                                    {{ $faker['users'][0]['name'] }}
                                </a>
                            </x-base.table.td>
                            <x-base.table.td
                                class="box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                            >
                                <div class="flex items-center">
                                    <div class="flex items-center">
                                        <x-base.lucide
                                            class="mr-1 h-4 w-4 fill-pending/30 text-pending"
                                            icon="Star"
                                        />
                                        <x-base.lucide
                                            class="mr-1 h-4 w-4 fill-pending/30 text-pending"
                                            icon="Star"
                                        />
                                        <x-base.lucide
                                            class="mr-1 h-4 w-4 fill-pending/30 text-pending"
                                            icon="Star"
                                        />
                                        <x-base.lucide
                                            class="mr-1 h-4 w-4 fill-pending/30 text-pending"
                                            icon="Star"
                                        />
                                        <x-base.lucide
                                            class="fill-slate/30 mr-1 h-4 w-4 text-slate-400"
                                            icon="Star"
                                        />
                                    </div>
                                    <div class="ml-1 text-xs text-slate-500">(4.5+)</div>
                                </div>
                            </x-base.table.td>
                            <x-base.table.td
                                class="box whitespace-nowrap rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                            >
                                {{ $faker['formatted_times'][0] }}
                            </x-base.table.td>
                            <x-base.table.td
                                class="box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                            >
                                <div @class([
                                    'flex items-center justify-center',
                                    'text-success' => $faker['true_false'][0],
                                    'text-danger' => !$faker['true_false'][0],
                                ])>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="CheckSquare"
                                    />
                                    {{ $faker['true_false'][0] ? 'Active' : 'Removed' }}
                                </div>
                            </x-base.table.td>
                            <x-base.table.td @class([
                                'box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600',
                                'before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400',
                            ])>
                                <div class="flex items-center justify-center">
                                    <a
                                        class="flex items-center whitespace-nowrap text-primary"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="mr-1 h-4 w-4"
                                            icon="CheckSquare"
                                        />
                                        View Details
                                    </a>
                                </div>
                            </x-base.table.td>
                        </x-base.table.tr>
                    @endforeach
                </x-base.table.tbody>
            </x-base.table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
            <x-base.pagination class="w-full sm:mr-auto sm:w-auto">
                <x-base.pagination.link>
                    <x-base.lucide
                        class="h-4 w-4"
                        icon="ChevronsLeft"
                    />
                </x-base.pagination.link>
                <x-base.pagination.link>
                    <x-base.lucide
                        class="h-4 w-4"
                        icon="ChevronLeft"
                    />
                </x-base.pagination.link>
                <x-base.pagination.link>...</x-base.pagination.link>
                <x-base.pagination.link>1</x-base.pagination.link>
                <x-base.pagination.link active>2</x-base.pagination.link>
                <x-base.pagination.link>3</x-base.pagination.link>
                <x-base.pagination.link>...</x-base.pagination.link>
                <x-base.pagination.link>
                    <x-base.lucide
                        class="h-4 w-4"
                        icon="ChevronRight"
                    />
                </x-base.pagination.link>
                <x-base.pagination.link>
                    <x-base.lucide
                        class="h-4 w-4"
                        icon="ChevronsRight"
                    />
                </x-base.pagination.link>
            </x-base.pagination>
            <x-base.form-select class="!box mt-3 w-20 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </x-base.form-select>
        </div>
        <!-- END: Pagination -->
    </div>
@endsection
