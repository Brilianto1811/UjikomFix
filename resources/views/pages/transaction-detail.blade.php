@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Transaction Detail - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Transaction Details</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.button
                class="mr-2 shadow-md"
                variant="primary"
            >
                Print
            </x-base.button>
            <x-base.menu class="ml-auto sm:ml-0">
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
                            icon="File"
                        /> Export Word
                    </x-base.menu.item>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="File"
                        /> Export to PDF
                    </x-base.menu.item>
                </x-base.menu.items>
            </x-base.menu>
        </div>
    </div>
    <!-- BEGIN: Transaction Details -->
    <div class="intro-y mt-5 grid grid-cols-11 gap-5">
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
            <div class="box rounded-md p-5">
                <div class="mb-5 flex items-center border-b border-slate-200/60 pb-5 dark:border-darkmode-400">
                    <div class="truncate text-base font-medium">
                        Transaction Details
                    </div>
                    <a
                        class="ml-auto flex items-center text-primary"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Edit"
                        /> Change Status
                    </a>
                </div>
                <div class="flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="Clipboard"
                    />
                    Invoice:
                    <a
                        class="ml-1 underline decoration-dotted"
                        href=""
                    >
                        INV/20220217/MPL/2053411933
                    </a>
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="Calendar"
                    />
                    Purchase Date: 24 March 2022
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="Clock"
                    />
                    Transaction Status:
                    <span class="ml-1 rounded bg-success/20 px-2 text-success">
                        Completed
                    </span>
                </div>
            </div>
            <div class="box mt-5 rounded-md p-5">
                <div class="mb-5 flex items-center border-b border-slate-200/60 pb-5 dark:border-darkmode-400">
                    <div class="truncate text-base font-medium">
                        Buyer Details
                    </div>
                    <a
                        class="ml-auto flex items-center text-primary"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Edit"
                        /> View Details
                    </a>
                </div>
                <div class="flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="Clipboard"
                    />
                    Name:
                    <a
                        class="ml-1 underline decoration-dotted"
                        href=""
                    >
                        {{ $fakers[0]['users'][0]['name'] }}
                    </a>
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="Calendar"
                    />
                    Phone Number: +71828273732
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="MapPin"
                    />
                    Address: 260 W. Storm Street New York, NY 10025.
                </div>
            </div>
            <div class="box mt-5 rounded-md p-5">
                <div class="mb-5 flex items-center border-b border-slate-200/60 pb-5 dark:border-darkmode-400">
                    <div class="truncate text-base font-medium">
                        Payment Details
                    </div>
                </div>
                <div class="flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="Clipboard"
                    />
                    Payment Method:
                    <div class="ml-auto">Direct bank transfer</div>
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="CreditCard"
                    />
                    Total Price (2 items):
                    <div class="ml-auto">$12,500.00</div>
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="CreditCard"
                    />
                    Total Shipping Cost (800 gr):
                    <div class="ml-auto">$1,500.00</div>
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="CreditCard"
                    />
                    Shipping Insurance:
                    <div class="ml-auto">$600.00</div>
                </div>
                <div class="mt-5 flex items-center border-t border-slate-200/60 pt-5 font-medium dark:border-darkmode-400">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="CreditCard"
                    />
                    Grand Total:
                    <div class="ml-auto">$15,000.00</div>
                </div>
            </div>
            <div class="box mt-5 rounded-md p-5">
                <div class="mb-5 flex items-center border-b border-slate-200/60 pb-5 dark:border-darkmode-400">
                    <div class="truncate text-base font-medium">
                        Shipping Information
                    </div>
                    <a
                        class="ml-auto flex items-center text-primary"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="MapPin"
                        /> Tracking Info
                    </a>
                </div>
                <div class="flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="Clipboard"
                    />
                    Courier: Left4code Express
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="Calendar"
                    />
                    Tracking Number: 003005580322
                    <x-base.lucide
                        class="ml-2 h-4 w-4 text-slate-500"
                        icon="Copy"
                    />
                </div>
                <div class="mt-3 flex items-center">
                    <x-base.lucide
                        class="mr-2 h-4 w-4 text-slate-500"
                        icon="MapPin"
                    />
                    Address: 260 W. Storm Street New York, NY 10025.
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
            <div class="box rounded-md p-5">
                <div class="mb-5 flex items-center border-b border-slate-200/60 pb-5 dark:border-darkmode-400">
                    <div class="truncate text-base font-medium">
                        Order Details
                    </div>
                    <a
                        class="ml-auto flex items-center text-primary"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Plus"
                        /> Add Notes
                    </a>
                </div>
                <div class="-mt-3 overflow-auto lg:overflow-visible">
                    <x-base.table striped>
                        <x-base.table.thead>
                            <x-base.table.tr>
                                <x-base.table.th class="whitespace-nowrap !py-5">
                                    Product
                                </x-base.table.th>
                                <x-base.table.th class="whitespace-nowrap text-right">
                                    Unit Price
                                </x-base.table.th>
                                <x-base.table.th class="whitespace-nowrap text-right">
                                    Qty
                                </x-base.table.th>
                                <x-base.table.th class="whitespace-nowrap text-right">
                                    Total
                                </x-base.table.th>
                            </x-base.table.tr>
                        </x-base.table.thead>
                        <x-base.table.tbody>
                            @foreach (array_slice($fakers, 0, 8) as $faker)
                                <x-base.table.tr>
                                    <x-base.table.td class="!py-4">
                                        <div class="flex items-center">
                                            <div class="image-fit zoom-in h-10 w-10">
                                                <x-base.tippy
                                                    class="rounded-lg border-2 border-white shadow-md"
                                                    src="{{ Vite::asset($faker['images'][0]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                    as="img"
                                                    content="{{ 'Uploaded at ' . $faker['dates'][2] }}"
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
                                    <x-base.table.td class="text-right">
                                        ${{ $faker['totals'][0] . ',000.00' }}
                                    </x-base.table.td>
                                    <x-base.table.td class="text-right">2</x-base.table.td>
                                    <x-base.table.td class="text-right">
                                        ${{ $faker['totals'][0] * 2 . ',000.00' }}
                                    </x-base.table.td>
                                </x-base.table.tr>
                            @endforeach
                        </x-base.table.tbody>
                    </x-base.table>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Transaction Details -->
@endsection
