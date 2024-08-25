@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Invoice Layout - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Invoice Layout</h2>
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
                        /> Export PDF
                    </x-base.menu.item>
                </x-base.menu.items>
            </x-base.menu>
        </div>
    </div>
    <!-- BEGIN: Invoice -->
    <div class="intro-y box mt-5 overflow-hidden">
        <div class="border-b border-slate-200/60 text-center dark:border-darkmode-400 sm:text-left">
            <div class="px-5 py-10 sm:px-20 sm:py-20">
                <div class="text-3xl font-semibold text-primary">INVOICE</div>
                <div class="mt-2">
                    Receipt <span class="font-medium">#1923195</span>
                </div>
                <div class="mt-1">Jan 02, 2021</div>
            </div>
            <div class="flex flex-col px-5 pb-10 pt-10 sm:px-20 sm:pb-20 lg:flex-row">
                <div>
                    <div class="text-base text-slate-500">Client Details</div>
                    <div class="mt-2 text-lg font-medium text-primary">
                        Arnold Schwarzenegger
                    </div>
                    <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
                    <div class="mt-1">
                        260 W. Storm Street New York, NY 10025.
                    </div>
                </div>
                <div class="mt-10 lg:ml-auto lg:mt-0 lg:text-right">
                    <div class="text-base text-slate-500">Payment to</div>
                    <div class="mt-2 text-lg font-medium text-primary">
                        Left4code
                    </div>
                    <div class="mt-1">left4code@gmail.com</div>
                </div>
            </div>
        </div>
        <div class="px-5 py-10 sm:px-16 sm:py-20">
            <div class="overflow-x-auto">
                <x-base.table>
                    <x-base.table.thead>
                        <x-base.table.tr>
                            <x-base.table.th class="whitespace-nowrap border-b-2 dark:border-darkmode-400">
                                DESCRIPTION
                            </x-base.table.th>
                            <x-base.table.th class="whitespace-nowrap border-b-2 text-right dark:border-darkmode-400">
                                QTY
                            </x-base.table.th>
                            <x-base.table.th class="whitespace-nowrap border-b-2 text-right dark:border-darkmode-400">
                                PRICE
                            </x-base.table.th>
                            <x-base.table.th class="whitespace-nowrap border-b-2 text-right dark:border-darkmode-400">
                                SUBTOTAL
                            </x-base.table.th>
                        </x-base.table.tr>
                    </x-base.table.thead>
                    <x-base.table.tbody>
                        <x-base.table.tr>
                            <x-base.table.td class="border-b dark:border-darkmode-400">
                                <div class="whitespace-nowrap font-medium">
                                    Midone - Tailwind Admin Dashboard Template
                                </div>
                                <div class="mt-0.5 whitespace-nowrap text-sm text-slate-500">
                                    Regular License
                                </div>
                            </x-base.table.td>
                            <x-base.table.td class="w-32 border-b text-right dark:border-darkmode-400">
                                2
                            </x-base.table.td>
                            <x-base.table.td class="w-32 border-b text-right dark:border-darkmode-400">
                                $25
                            </x-base.table.td>
                            <x-base.table.td class="w-32 border-b text-right font-medium dark:border-darkmode-400">
                                $50
                            </x-base.table.td>
                        </x-base.table.tr>
                        <x-base.table.tr>
                            <x-base.table.td class="border-b dark:border-darkmode-400">
                                <div class="whitespace-nowrap font-medium">
                                    Vuejs Admin Template
                                </div>
                                <div class="mt-0.5 whitespace-nowrap text-sm text-slate-500">
                                    Regular License
                                </div>
                            </x-base.table.td>
                            <x-base.table.td class="w-32 border-b text-right dark:border-darkmode-400">
                                1
                            </x-base.table.td>
                            <x-base.table.td class="w-32 border-b text-right dark:border-darkmode-400">
                                $25
                            </x-base.table.td>
                            <x-base.table.td class="w-32 border-b text-right font-medium dark:border-darkmode-400">
                                $25
                            </x-base.table.td>
                        </x-base.table.tr>
                        <x-base.table.tr>
                            <x-base.table.td class="border-b dark:border-darkmode-400">
                                <div class="whitespace-nowrap font-medium">
                                    React Admin Template
                                </div>
                                <div class="mt-0.5 whitespace-nowrap text-sm text-slate-500">
                                    Regular License
                                </div>
                            </x-base.table.td>
                            <x-base.table.td class="w-32 border-b text-right dark:border-darkmode-400">
                                1
                            </x-base.table.td>
                            <x-base.table.td class="w-32 border-b text-right dark:border-darkmode-400">
                                $25
                            </x-base.table.td>
                            <x-base.table.td class="w-32 border-b text-right font-medium dark:border-darkmode-400">
                                $25
                            </x-base.table.td>
                        </x-base.table.tr>
                        <x-base.table.tr>
                            <x-base.table.td>
                                <div class="whitespace-nowrap font-medium">
                                    Laravel Admin Template
                                </div>
                                <div class="mt-0.5 whitespace-nowrap text-sm text-slate-500">
                                    Regular License
                                </div>
                            </x-base.table.td>
                            <x-base.table.td class="w-32 text-right">3</x-base.table.td>
                            <x-base.table.td class="w-32 text-right">$25</x-base.table.td>
                            <x-base.table.td class="w-32 text-right font-medium">
                                $75
                            </x-base.table.td>
                        </x-base.table.tr>
                    </x-base.table.tbody>
                </x-base.table>
            </div>
        </div>
        <div class="flex flex-col-reverse px-5 pb-10 sm:flex-row sm:px-20 sm:pb-20">
            <div class="mt-10 text-center sm:mt-0 sm:text-left">
                <div class="text-base text-slate-500">Bank Transfer</div>
                <div class="mt-2 text-lg font-medium text-primary">
                    Elon Musk
                </div>
                <div class="mt-1">Bank Account : 098347234832</div>
                <div class="mt-1">Code : LFT133243</div>
            </div>
            <div class="text-center sm:ml-auto sm:text-right">
                <div class="text-base text-slate-500">Total Amount</div>
                <div class="mt-2 text-xl font-medium text-primary">
                    $20.600.00
                </div>
                <div class="mt-1">Taxes included</div>
            </div>
        </div>
    </div>
    <!-- END: Invoice -->
@endsection
