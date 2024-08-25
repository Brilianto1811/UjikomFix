@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Dashboard - Enigma - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8 xl:col-span-9">
                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">General Report</h2>
                        <a
                            class="ml-auto truncate text-primary"
                            href=""
                        > Show More </a>
                    </div>
                    <div @class([
                        'relative mt-5 intro-y',
                        "before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']",
                    ])>
                        <div class="box grid grid-cols-12">
                            <div class="col-span-12 flex flex-col justify-center px-8 py-12 lg:col-span-4">
                                <x-base.lucide
                                    class="h-10 w-10 text-pending"
                                    icon="PieChart"
                                />
                                <div class="mt-12 flex items-center justify-start text-slate-600 dark:text-slate-300">
                                    My Total Assets
                                    <x-base.tippy content="Total value of your sales: $158.409.416">
                                        <x-base.lucide
                                            class="ml-1.5 h-4 w-4"
                                            icon="AlertCircle"
                                        />
                                    </x-base.tippy>
                                </div>
                                <div class="mt-4 flex items-center justify-start">
                                    <div class="relative ml-0.5 pl-3 text-2xl font-medium">
                                        <span class="absolute left-0 top-0 -ml-0.5 text-xl font-medium">
                                            $
                                        </span>
                                        1,413,102.02
                                    </div>
                                    <a
                                        class="ml-4 text-slate-500"
                                        href=""
                                    >
                                        <x-base.lucide
                                            class="h-4 w-4"
                                            icon="RefreshCcw"
                                        />
                                    </a>
                                </div>
                                <div class="mt-4 text-xs text-slate-500">
                                    Last updated 1 hour ago
                                </div>
                                <x-base.button
                                    class="relative mt-12 justify-start rounded-full"
                                    variant="outline-secondary"
                                >
                                    Download Reports
                                    <span
                                        class="absolute bottom-0 right-0 top-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white"
                                    >
                                        <x-base.lucide
                                            class="h-4 w-4"
                                            icon="ArrowRight"
                                        />
                                    </span>
                                </x-base.button>
                            </div>
                            <div
                                class="col-span-12 border-t border-dashed border-slate-200 p-8 dark:border-darkmode-300 lg:col-span-8 lg:border-l lg:border-t-0">
                                <x-base.tab.group>
                                    <x-base.tab.list
                                        class="mx-auto mb-8 w-60 rounded-md border border-dashed border-slate-300 p-1 dark:border-darkmode-300"
                                        role="tablist"
                                        variant="pills"
                                    >
                                        <x-base.tab
                                            id="weekly-report-tab"
                                            selected
                                        >
                                            <x-base.tab.button
                                                class="w-full px-2 py-1.5"
                                                as="button"
                                            >
                                                Weekly
                                            </x-base.tab.button>
                                        </x-base.tab>
                                        <x-base.tab id="monthly-report-tab">
                                            <x-base.tab.button
                                                class="w-full px-2 py-1.5"
                                                as="button"
                                            >
                                                Monthly
                                            </x-base.tab.button>
                                        </x-base.tab>
                                    </x-base.tab.list>
                                    <x-base.tab.panels class="px-5 pb-5">
                                        <x-base.tab.panel
                                            class="grid grid-cols-12 gap-x-10 gap-y-8"
                                            id="weekly-report"
                                            selected
                                        >
                                            <div class="col-span-6 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Unpaid Loan</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">4.501</div>
                                                    <x-base.tippy
                                                        class="ml-2 flex cursor-pointer text-xs font-medium text-danger"
                                                        content="2% Lower than last month"
                                                    >
                                                        2%
                                                        <x-base.lucide
                                                            class="ml-0.5 h-4 w-4"
                                                            icon="ChevronDown"
                                                        />
                                                    </x-base.tippy>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Active Partner</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">2</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Paid Installment</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$72.000</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Disbursement</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$54.000</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Success Payment</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">2.500</div>
                                                    <x-base.tippy
                                                        class="ml-2 flex cursor-pointer text-xs font-medium text-success"
                                                        content="52% Higher than last month"
                                                    >
                                                        52%
                                                        <x-base.lucide
                                                            class="ml-0.5 h-4 w-4"
                                                            icon="ChevronUp"
                                                        />
                                                    </x-base.tippy>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Unpaid Loan</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$72.000</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Posted Campaign</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">4.501</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Social Media</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">2</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Net Margin</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$72.000</div>
                                                    <x-base.tippy
                                                        class="ml-2 flex cursor-pointer text-xs font-medium text-success"
                                                        content="49% Higher than last month"
                                                    >
                                                        49%
                                                        <x-base.lucide
                                                            class="ml-0.5 h-4 w-4"
                                                            icon="ChevronUp"
                                                        />
                                                    </x-base.tippy>
                                                </div>
                                            </div>
                                        </x-base.tab.panel>
                                    </x-base.tab.panels>
                                </x-base.tab.group>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div
                    class="col-span-12 row-start-4 mt-6 md:col-span-6 lg:col-span-4 lg:row-start-3 xl:col-span-3 xl:row-start-auto xl:mt-8">
                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">Sales Report</h2>
                        <a
                            class="ml-auto truncate text-primary"
                            href=""
                        > Show More </a>
                    </div>
                    <div @class([
                        'relative mt-5 intro-y',
                        "before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-[''] before:hidden xl:before:block",
                    ])>
                        <div class="box p-5">
                            <div class="mt-3">
                                <x-report-donut-chart height="h-[196px]" />
                            </div>
                            <div class="mx-auto mt-8 w-52 sm:w-auto">
                                <div class="flex items-center">
                                    <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                    <span class="truncate">17 - 30 Years old</span>
                                    <span class="ml-auto font-medium">62%</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                    <span class="truncate">31 - 50 Years old</span>
                                    <span class="ml-auto font-medium">33%</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                                    <span class="truncate">&gt;= 50 Years old</span>
                                    <span class="ml-auto font-medium">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 mt-6 xl:col-span-8">
                    <div class="intro-y block h-10 items-center sm:flex">
                        <h2 class="mr-5 truncate text-lg font-medium">Official Store</h2>
                        <div class="relative mt-3 text-slate-500 sm:ml-auto sm:mt-0">
                            <x-base.lucide
                                class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4"
                                icon="MapPin"
                            />
                            <x-base.form-input
                                class="!box pl-10 sm:w-56"
                                type="text"
                                placeholder="Filter by city"
                            />
                        </div>
                    </div>
                    <div class="intro-y box mt-12 p-5 sm:mt-5">
                        <div>
                            250 Official stores in 21 countries, click the marker to see
                            location details.
                        </div>
                        <x-leaflet-map class="mt-5 h-[310px] rounded-md bg-slate-200" />
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 mt-6 lg:col-span-8 xl:col-span-4">
                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">
                            Weekly Best Sellers
                        </h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <div class="intro-y">
                                <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                        <img
                                            src="{{ Vite::asset($faker['photos'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="mt-0.5 text-xs text-slate-500">
                                            {{ $faker['dates'][0] }}
                                        </div>
                                    </div>
                                    <div
                                        class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                        137 Sales
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <a
                            class="intro-y block w-full rounded-md border border-dotted border-slate-400 py-4 text-center text-slate-500 dark:border-darkmode-300"
                            href=""
                        >
                            View More
                        </a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: Visitors -->
                <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
                    <div class="intro-y block h-10 items-center sm:flex">
                        <h2 class="mr-5 truncate text-lg font-medium">Visitors</h2>
                        <x-base.form-select class="!box mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </x-base.form-select>
                    </div>
                    <div class="intro-y box mt-12 p-5 sm:mt-5">
                        <div
                            class="mb-3 flex border-b border-dashed border-slate-200 pb-3 text-slate-500 dark:border-darkmode-300">
                            <div>Parameters</div>
                            <div class="ml-auto">Report Values</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div class="flex items-center">
                                <div>Site Visits</div>
                                <x-base.tippy
                                    class="ml-2 flex cursor-pointer text-xs font-medium text-danger"
                                    content="49% Higher than last month"
                                >
                                    -2%
                                    <x-base.lucide
                                        class="ml-0.5 h-4 w-4"
                                        icon="ChevronDown"
                                    />
                                </x-base.tippy>
                            </div>
                            <div class="ml-auto">4.500</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div class="flex items-center">
                                <div>Unique Visitors</div>
                            </div>
                            <div class="ml-auto">21</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div class="flex items-center">
                                <div>Page Views</div>
                                <x-base.tippy
                                    class="ml-2 flex cursor-pointer text-xs font-medium text-success"
                                    content="49% Higher than last month"
                                >
                                    5%
                                    <x-base.lucide
                                        class="ml-0.5 h-4 w-4"
                                        icon="ChevronUp"
                                    />
                                </x-base.tippy>
                            </div>
                            <div class="ml-auto">500</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div class="flex items-center">
                                <div>Bounce Rate</div>
                            </div>
                            <div class="ml-auto">3.420</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div class="flex items-center">
                                <div>% New Visits</div>
                                <x-base.tippy
                                    class="ml-2 flex cursor-pointer text-xs font-medium text-danger"
                                    content="49% Higher than last month"
                                >
                                    -9%
                                    <x-base.lucide
                                        class="ml-0.5 h-4 w-4"
                                        icon="ChevronDown"
                                    />
                                </x-base.tippy>
                            </div>
                            <div class="ml-auto">32%</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div class="flex items-center">
                                <div>Average Tim On Site</div>
                            </div>
                            <div class="ml-auto">1.5M</div>
                        </div>
                        <x-base.button
                            class="relative mb-2 w-full justify-start border-dashed border-slate-300 dark:border-darkmode-300"
                            variant="outline-secondary"
                        >
                            <span class="mr-5 truncate">View Full Report</span>
                            <span
                                class="absolute bottom-0 right-0 top-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="ArrowRight"
                                />
                            </span>
                        </x-base.button>
                    </div>
                </div>
                <!-- END: Visitors -->
                <!-- BEGIN: Most Viewed Pages -->
                <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
                    <div class="intro-y block h-10 items-center sm:flex">
                        <h2 class="mr-5 truncate text-lg font-medium">Most Viewed Pages</h2>
                        <x-base.form-select class="!box mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </x-base.form-select>
                    </div>
                    <div class="intro-y box mt-12 p-5 sm:mt-5">
                        <div
                            class="mb-3 flex border-b border-dashed border-slate-200 pb-3 text-slate-500 dark:border-darkmode-300">
                            <div>Page Names</div>
                            <div class="ml-auto">Page Views</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>/letz-lara…review/2653</div>
                            <div class="ml-auto">472</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>/midone…review/1674</div>
                            <div class="ml-auto">294</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>/profile…review/46789</div>
                            <div class="ml-auto">500</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>/profile…review/24357</div>
                            <div class="ml-auto">3.420</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>/letz-lara…review/2653</div>
                            <div class="ml-auto">83</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>/icewall…review/1674</div>
                            <div class="ml-auto">21</div>
                        </div>
                        <x-base.button
                            class="relative mb-2 w-full justify-start border-dashed border-slate-300 dark:border-darkmode-300"
                            variant="outline-secondary"
                        >
                            <span class="mr-5 truncate">View Full Report</span>
                            <span
                                class="absolute bottom-0 right-0 top-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="ArrowRight"
                                />
                            </span>
                        </x-base.button>
                    </div>
                </div>
                <!-- END: Most Viewed Pages -->
                <!-- BEGIN: Top Search Items -->
                <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
                    <div class="intro-y block h-10 items-center sm:flex">
                        <h2 class="mr-5 truncate text-lg font-medium">Top Search Items</h2>
                        <x-base.form-select class="!box mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </x-base.form-select>
                    </div>
                    <div class="intro-y box mt-12 p-5 sm:mt-5">
                        <div
                            class="mb-3 flex border-b border-dashed border-slate-200 pb-3 text-slate-500 dark:border-darkmode-300">
                            <div>Keywords</div>
                            <div class="ml-auto">Searched</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>Laravel 8</div>
                            <div class="ml-auto">200</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>Eloquent</div>
                            <div class="ml-auto">50</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>CKEditor Source Build</div>
                            <div class="ml-auto">31</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>Midone Docs</div>
                            <div class="ml-auto">405</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>Vue 3 Release Date</div>
                            <div class="ml-auto">201</div>
                        </div>
                        <div class="mb-5 flex items-center">
                            <div>Install Vite Vue</div>
                            <div class="ml-auto">42</div>
                        </div>
                        <x-base.button
                            class="relative mb-2 w-full justify-start border-dashed border-slate-300 dark:border-darkmode-300"
                            variant="outline-secondary"
                        >
                            <span class="mr-5 truncate">View Full Report</span>
                            <span
                                class="absolute bottom-0 right-0 top-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="ArrowRight"
                                />
                            </span>
                        </x-base.button>
                    </div>
                </div>
                <!-- END: Top Search Items -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block h-10 items-center sm:flex">
                        <h2 class="mr-5 truncate text-lg font-medium">
                            Weekly Top Products
                        </h2>
                        <div class="mt-3 flex items-center sm:ml-auto sm:mt-0">
                            <x-base.button class="!box flex items-center text-slate-600 dark:text-slate-300">
                                <x-base.lucide
                                    class="mr-2 hidden h-4 w-4 sm:block"
                                    icon="FileText"
                                />
                                Export to Excel
                            </x-base.button>
                            <x-base.button class="!box ml-3 flex items-center text-slate-600 dark:text-slate-300">
                                <x-base.lucide
                                    class="mr-2 hidden h-4 w-4 sm:block"
                                    icon="FileText"
                                />
                                Export to PDF
                            </x-base.button>
                        </div>
                    </div>
                    <div class="intro-y mt-8 overflow-auto sm:mt-0 lg:overflow-visible">
                        <x-base.table class="border-separate border-spacing-y-[10px] sm:mt-2">
                            <x-base.table.thead>
                                <x-base.table.tr>
                                    <x-base.table.th class="whitespace-nowrap border-b-0">
                                        IMAGES
                                    </x-base.table.th>
                                    <x-base.table.th class="whitespace-nowrap border-b-0">
                                        PRODUCT NAME
                                    </x-base.table.th>
                                    <x-base.table.th class="whitespace-nowrap border-b-0 text-center">
                                        STOCK
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
                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                    <x-base.table.tr class="intro-x">
                                        <x-base.table.td
                                            class="box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                                        >
                                            <div class="flex">
                                                <div class="image-fit zoom-in h-10 w-10">
                                                    <x-base.tippy
                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                        src="{{ Vite::asset($faker['images'][0]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                        as="img"
                                                        content="{{ 'Uploaded at ' . $faker['dates'][0] }}"
                                                    />
                                                </div>
                                                <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                    <x-base.tippy
                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                        src="{{ Vite::asset($faker['photos'][1]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                        as="img"
                                                        content="{{ 'Uploaded at ' . $faker['dates'][1] }}"
                                                    />
                                                </div>
                                                <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                    <x-base.tippy
                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                        src="{{ Vite::asset($faker['photos'][2]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                        as="img"
                                                        content="{{ 'Uploaded at ' . $faker['dates'][2] }}"
                                                    />
                                                </div>
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                                        >
                                            <a
                                                class="whitespace-nowrap font-medium"
                                                href=""
                                            >
                                                {{ $faker['products'][0]['name'] }}
                                            </a>
                                            <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                {{ $faker['products'][0]['category'] }}
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                                        >
                                            {{ $faker['stocks'][0] }}
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
                                                {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td @class([
                                            'box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600',
                                            'before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400',
                                        ])>
                                            <div class="flex items-center justify-center">
                                                <a
                                                    class="mr-3 flex items-center"
                                                    href=""
                                                >
                                                    <x-base.lucide
                                                        class="mr-1 h-4 w-4"
                                                        icon="CheckSquare"
                                                    />
                                                    Edit
                                                </a>
                                                <a
                                                    class="flex items-center text-danger"
                                                    href=""
                                                >
                                                    <x-base.lucide
                                                        class="mr-1 h-4 w-4"
                                                        icon="Trash"
                                                    />
                                                    Delete
                                                </a>
                                            </div>
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                @endforeach
                            </x-base.table.tbody>
                        </x-base.table>
                    </div>
                    <div class="intro-y mt-3 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
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
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="-mb-10 pb-10 2xl:border-l">
                <div class="grid grid-cols-12 gap-x-6 gap-y-6 2xl:gap-x-0 2xl:pl-6">
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-12 2xl:mt-8">
                        <div class="intro-x flex h-10 items-center">
                            <h2 class="mr-auto truncate text-lg font-medium">
                                Important Notes
                            </h2>
                            <x-base.button
                                class="tiny-slider-navigator mr-2 border-slate-300 px-2 text-slate-600 dark:text-slate-300"
                                data-carousel="important-notes"
                                data-target="prev"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="ChevronLeft"
                                />
                            </x-base.button>
                            <x-base.button
                                class="tiny-slider-navigator mr-2 border-slate-300 px-2 text-slate-600 dark:text-slate-300"
                                data-carousel="important-notes"
                                data-target="next"
                            >
                                <x-base.lucide
                                    class="h-4 w-4"
                                    icon="ChevronRight"
                                />
                            </x-base.button>
                        </div>
                        <div class="intro-x mt-5">
                            <div class="box zoom-in">
                                <x-base.tiny-slider id="important-notes">
                                    <div class="p-5">
                                        <div class="truncate text-base font-medium">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="mt-5 flex font-medium">
                                            <x-base.button
                                                class="px-2 py-1"
                                                type="button"
                                                variant="secondary"
                                            >
                                                View Notes
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-auto px-2 py-1"
                                                type="button"
                                                variant="outline-secondary"
                                            >
                                                Dismiss
                                            </x-base.button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="truncate text-base font-medium">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="mt-5 flex font-medium">
                                            <x-base.button
                                                class="px-2 py-1"
                                                type="button"
                                                variant="secondary"
                                            >
                                                View Notes
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-auto px-2 py-1"
                                                type="button"
                                                variant="outline-secondary"
                                            >
                                                Dismiss
                                            </x-base.button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="truncate text-base font-medium">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="mt-5 flex font-medium">
                                            <x-base.button
                                                class="px-2 py-1"
                                                type="button"
                                                variant="secondary"
                                            >
                                                View Notes
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-auto px-2 py-1"
                                                type="button"
                                                variant="outline-secondary"
                                            >
                                                Dismiss
                                            </x-base.button>
                                        </div>
                                    </div>
                                </x-base.tiny-slider>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12">
                        <div class="intro-x flex h-10 items-center">
                            <h2 class="mr-5 truncate text-lg font-medium">
                                Recent Activities
                            </h2>
                            <a
                                class="ml-auto truncate text-primary"
                                href=""
                            > Show More </a>
                        </div>
                        <div
                            class="relative mt-5 before:absolute before:ml-5 before:mt-5 before:block before:h-[85%] before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                            <div class="intro-x relative mb-3 flex items-center">
                                <div
                                    class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img
                                            src="{{ Vite::asset($fakers[9]['photos'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                </div>
                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[9]['users'][0]['name'] }}
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative mb-3 flex items-center">
                                <div
                                    class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img
                                            src="{{ Vite::asset($fakers[8]['photos'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                </div>
                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[8]['users'][0]['name'] }}
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="mt-2 flex">
                                            <x-base.tippy
                                                class="image-fit zoom-in mr-1 h-8 w-8"
                                                as="div"
                                                content="{{ $fakers[0]['products'][0]['name'] }}"
                                            >
                                                <img
                                                    class="rounded-md border border-white"
                                                    src="{{ Vite::asset($fakers[8]['photos'][0]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </x-base.tippy>
                                            <x-base.tippy
                                                class="image-fit zoom-in mr-1 h-8 w-8"
                                                as="div"
                                                content="{{ $fakers[1]['products'][0]['name'] }}"
                                            >
                                                <img
                                                    class="rounded-md border border-white"
                                                    src="{{ Vite::asset($fakers[8]['photos'][1]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </x-base.tippy>
                                            <x-base.tippy
                                                class="image-fit zoom-in mr-1 h-8 w-8"
                                                as="div"
                                                content="{{ $fakers[2]['products'][0]['name'] }}"
                                            >
                                                <img
                                                    class="rounded-md border border-white"
                                                    src="{{ Vite::asset($fakers[8]['photos'][2]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </x-base.tippy>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x my-4 text-center text-xs text-slate-500">
                                12 November
                            </div>
                            <div class="intro-x relative mb-3 flex items-center">
                                <div
                                    class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img
                                            src="{{ Vite::asset($fakers[7]['photos'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                </div>
                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[7]['users'][0]['name'] }}
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Has changed
                                        <a
                                            class="text-primary"
                                            href=""
                                        >
                                            {{ $fakers[7]['products'][0]['name'] }}
                                        </a>
                                        price and description
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x relative mb-3 flex items-center">
                                <div
                                    class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img
                                            src="{{ Vite::asset($fakers[6]['photos'][0]) }}"
                                            alt="Midone - Tailwind Admin Dashboard Template"
                                        />
                                    </div>
                                </div>
                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[6]['users'][0]['name'] }}
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Has changed
                                        <a
                                            class="text-primary"
                                            href=""
                                        >
                                            {{ $fakers[6]['products'][0]['name'] }}
                                        </a>
                                        description
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12">
                        <div class="intro-x flex h-10 items-center">
                            <h2 class="mr-5 truncate text-lg font-medium">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="intro-x">
                                    <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                        <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                            <img
                                                src="{{ Vite::asset($faker['photos'][0]) }}"
                                                alt="Midone - Tailwind Admin Dashboard Template"
                                            />
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                            <div class="mt-0.5 text-xs text-slate-500">
                                                {{ $faker['dates'][0] }}
                                            </div>
                                        </div>
                                        <div @class([
                                            'text-success' => $faker['true_false'][0],
                                            'text-danger' => !$faker['true_false'][0],
                                        ])>
                                            {{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <a
                                class="intro-x block w-full rounded-md border border-dotted border-slate-400 py-3 text-center text-slate-500 dark:border-darkmode-300"
                                href=""
                            >
                                View More
                            </a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Schedules -->
                    <div
                        class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 xl:col-start-1 xl:row-start-2 2xl:col-span-12 2xl:col-start-auto 2xl:row-start-auto">
                        <div class="intro-x flex h-10 items-center">
                            <h2 class="mr-5 truncate text-lg font-medium">Schedules</h2>
                            <a
                                class="ml-auto flex items-center truncate text-primary"
                                href=""
                            >
                                <x-base.lucide
                                    class="mr-1 h-4 w-4"
                                    icon="Plus"
                                /> Add New Schedules
                            </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <x-base.lucide
                                            class="h-5 w-5 text-slate-500"
                                            icon="ChevronLeft"
                                        />
                                        <div class="mx-auto text-base font-medium">April</div>
                                        <x-base.lucide
                                            class="h-5 w-5 text-slate-500"
                                            icon="ChevronRight"
                                        />
                                    </div>
                                    <div class="mt-5 grid grid-cols-7 gap-4 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="relative rounded py-0.5 text-slate-500">29</div>
                                        <div class="relative rounded py-0.5 text-slate-500">30</div>
                                        <div class="relative rounded py-0.5 text-slate-500">31</div>
                                        <div class="relative rounded py-0.5">1</div>
                                        <div class="relative rounded py-0.5">2</div>
                                        <div class="relative rounded py-0.5">3</div>
                                        <div class="relative rounded py-0.5">4</div>
                                        <div class="relative rounded py-0.5">5</div>
                                        <div class="relative rounded bg-success/20 py-0.5 dark:bg-success/30">
                                            6
                                        </div>
                                        <div class="relative rounded py-0.5">7</div>
                                        <div class="relative rounded bg-primary py-0.5 text-white">
                                            8
                                        </div>
                                        <div class="relative rounded py-0.5">9</div>
                                        <div class="relative rounded py-0.5">10</div>
                                        <div class="relative rounded py-0.5">11</div>
                                        <div class="relative rounded py-0.5">12</div>
                                        <div class="relative rounded py-0.5">13</div>
                                        <div class="relative rounded py-0.5">14</div>
                                        <div class="relative rounded py-0.5">15</div>
                                        <div class="relative rounded py-0.5">16</div>
                                        <div class="relative rounded py-0.5">17</div>
                                        <div class="relative rounded py-0.5">18</div>
                                        <div class="relative rounded py-0.5">19</div>
                                        <div class="relative rounded py-0.5">20</div>
                                        <div class="relative rounded py-0.5">21</div>
                                        <div class="relative rounded py-0.5">22</div>
                                        <div class="relative rounded bg-pending/20 py-0.5 dark:bg-pending/30">
                                            23
                                        </div>
                                        <div class="relative rounded py-0.5">24</div>
                                        <div class="relative rounded py-0.5">25</div>
                                        <div class="relative rounded py-0.5">26</div>
                                        <div class="relative rounded bg-primary/10 py-0.5 dark:bg-primary/50">
                                            27
                                        </div>
                                        <div class="relative rounded py-0.5">28</div>
                                        <div class="relative rounded py-0.5">29</div>
                                        <div class="relative rounded py-0.5">30</div>
                                        <div class="relative rounded py-0.5 text-slate-500">1</div>
                                        <div class="relative rounded py-0.5 text-slate-500">2</div>
                                        <div class="relative rounded py-0.5 text-slate-500">3</div>
                                        <div class="relative rounded py-0.5 text-slate-500">4</div>
                                        <div class="relative rounded py-0.5 text-slate-500">5</div>
                                        <div class="relative rounded py-0.5 text-slate-500">6</div>
                                        <div class="relative rounded py-0.5 text-slate-500">7</div>
                                        <div class="relative rounded py-0.5 text-slate-500">8</div>
                                        <div class="relative rounded py-0.5 text-slate-500">9</div>
                                    </div>
                                </div>
                                <div class="border-t border-slate-200/60 p-5">
                                    <div class="flex items-center">
                                        <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="mt-4 flex items-center">
                                        <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                        <span class="truncate"> VueJs Frontend Development </span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="mt-4 flex items-center">
                                        <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>
@endsection
