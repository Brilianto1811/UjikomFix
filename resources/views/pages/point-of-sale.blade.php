@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Point of Sale - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Point of Sale</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.button
                class="mr-2 shadow-md"
                data-tw-toggle="modal"
                data-tw-target="#new-order-modal"
                href="#"
                as="a"
                variant="primary"
            >
                New Order
            </x-base.button>
            <x-base.menu class="ml-auto sm:ml-0">
                <x-base.menu.button
                    class="!box px-2"
                    as="x-base.button"
                >
                    <span class="flex h-5 w-5 items-center justify-center">
                        <x-base.lucide
                            class="h-4 w-4"
                            icon="ChevronDown"
                        />
                    </span>
                </x-base.menu.button>
                <x-base.menu.items>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Activity"
                        />
                        <span class="truncate">
                            INV-0206020 - {{ $fakers[3]['users'][0]['name'] }}
                        </span>
                    </x-base.menu.item>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Activity"
                        />
                        <span class="truncate">
                            INV-0206022 - {{ $fakers[4]['users'][0]['name'] }}
                        </span>
                    </x-base.menu.item>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Activity"
                        />
                        <span class="truncate">
                            INV-0206021 - {{ $fakers[5]['users'][0]['name'] }}
                        </span>
                    </x-base.menu.item>
                </x-base.menu.items>
            </x-base.menu>
        </div>
    </div>
    <div class="intro-y mt-5 grid grid-cols-12 gap-5">
        <!-- BEGIN: Item List -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <div class="intro-y lg:flex">
                <div class="relative">
                    <x-base.form-input
                        class="!box w-full px-4 py-3 pr-10 lg:w-64"
                        type="text"
                        placeholder="Search item..."
                    />
                    <x-base.lucide
                        class="absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4 text-slate-500"
                        icon="Search"
                    />
                </div>
                <x-base.form-select class="!box ml-auto mt-3 w-full px-4 py-3 lg:mt-0 lg:w-auto">
                    <option>Sort By</option>
                    <option>A to Z</option>
                    <option>Z to A</option>
                    <option>Lowest Price</option>
                    <option>Highest Price</option>
                </x-base.form-select>
            </div>
            <div class="mt-5 grid grid-cols-12 gap-5">
                <div class="box zoom-in col-span-12 cursor-pointer p-5 sm:col-span-4 2xl:col-span-3">
                    <div class="text-base font-medium">Soup</div>
                    <div class="text-slate-500">5 Items</div>
                </div>
                <div class="box zoom-in col-span-12 cursor-pointer bg-primary p-5 sm:col-span-4 2xl:col-span-3">
                    <div class="text-base font-medium text-white">
                        Pancake & Toast
                    </div>
                    <div class="text-white text-opacity-80 dark:text-slate-500">
                        8 Items
                    </div>
                </div>
                <div class="box zoom-in col-span-12 cursor-pointer p-5 sm:col-span-4 2xl:col-span-3">
                    <div class="text-base font-medium">Pasta</div>
                    <div class="text-slate-500">4 Items</div>
                </div>
                <div class="box zoom-in col-span-12 cursor-pointer p-5 sm:col-span-4 2xl:col-span-3">
                    <div class="text-base font-medium">Waffle</div>
                    <div class="text-slate-500">3 Items</div>
                </div>
                <div class="box zoom-in col-span-12 cursor-pointer p-5 sm:col-span-4 2xl:col-span-3">
                    <div class="text-base font-medium">Snacks</div>
                    <div class="text-slate-500">8 Items</div>
                </div>
                <div class="box zoom-in col-span-12 cursor-pointer p-5 sm:col-span-4 2xl:col-span-3">
                    <div class="text-base font-medium">Deserts</div>
                    <div class="text-slate-500">8 Items</div>
                </div>
                <div class="box zoom-in col-span-12 cursor-pointer p-5 sm:col-span-4 2xl:col-span-3">
                    <div class="text-base font-medium">Beverage</div>
                    <div class="text-slate-500">9 Items</div>
                </div>
            </div>
            <div class="mt-5 grid grid-cols-12 gap-5 border-t pt-5">
                @foreach (array_slice($fakers, 0, 8) as $faker)
                    <a
                        class="intro-y col-span-12 block sm:col-span-4 2xl:col-span-3"
                        data-tw-toggle="modal"
                        data-tw-target="#add-item-modal"
                        href="#"
                    >
                        <div class="box zoom-in relative rounded-md p-3">
                            <div class="relative block flex-none before:block before:w-full before:pt-[100%]">
                                <div class="image-fit absolute left-0 top-0 h-full w-full">
                                    <img
                                        class="rounded-md"
                                        src="{{ Vite::asset($faker['foods'][0]['image']) }}"
                                        alt="Midone - Tailwind Admin Dashboard Template"
                                    />
                                </div>
                            </div>
                            <div class="mt-3 block truncate text-center font-medium">
                                {{ $faker['foods'][0]['name'] }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <!-- END: Item List -->
        <!-- BEGIN: Ticket -->
        <x-base.tab.group class="col-span-12 lg:col-span-4">
            <div class="intro-y pr-1">
                <div class="box p-2">
                    <x-base.tab.list variant="pills">
                        <x-base.tab
                            id="ticket-tab"
                            selected
                        >
                            <x-base.tab.button
                                class="w-full py-2"
                                as="button"
                            >
                                Ticket
                            </x-base.tab.button>
                        </x-base.tab>
                        <x-base.tab id="details-tab">
                            <x-base.tab.button
                                class="w-full py-2"
                                as="button"
                            >
                                Details
                            </x-base.tab.button>
                        </x-base.tab>
                    </x-base.tab.list>
                </div>
            </div>
            <x-base.tab.panels>
                <x-base.tab.panel
                    id="ticket"
                    selected
                >
                    <div class="box mt-5 p-2">
                        @foreach (array_slice($fakers, 0, 5) as $faker)
                            <a
                                class="flex cursor-pointer items-center rounded-md bg-white p-3 transition duration-300 ease-in-out hover:bg-slate-100 dark:bg-darkmode-600 dark:hover:bg-darkmode-400"
                                data-tw-toggle="modal"
                                data-tw-target="#add-item-modal"
                                href="#"
                            >
                                <div class="mr-1 max-w-[50%] truncate">
                                    {{ $faker['foods'][0]['name'] }}
                                </div>
                                <div class="text-slate-500">x 1</div>
                                <x-base.lucide
                                    class="ml-2 h-4 w-4 text-slate-500"
                                    icon="Edit"
                                />
                                <div class="ml-auto font-medium">
                                    ${{ $faker['totals'][0] }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="box mt-5 flex p-5">
                        <x-base.form-input
                            class="w-full border-slate-200/60 bg-slate-100 px-4 py-3 pr-10"
                            type="text"
                            placeholder="Use coupon code..."
                        />
                        <x-base.button
                            class="ml-2"
                            variant="primary"
                        >
                            Apply
                        </x-base.button>
                    </div>
                    <div class="box mt-5 p-5">
                        <div class="flex">
                            <div class="mr-auto">Subtotal</div>
                            <div class="font-medium">$250</div>
                        </div>
                        <div class="mt-4 flex">
                            <div class="mr-auto">Discount</div>
                            <div class="font-medium text-danger">-$20</div>
                        </div>
                        <div class="mt-4 flex">
                            <div class="mr-auto">Tax</div>
                            <div class="font-medium">15%</div>
                        </div>
                        <div class="mt-4 flex border-t border-slate-200/60 pt-4 dark:border-darkmode-400">
                            <div class="mr-auto text-base font-medium">
                                Total Charge
                            </div>
                            <div class="text-base font-medium">$220</div>
                        </div>
                    </div>
                    <div class="mt-5 flex">
                        <x-base.button class="w-32 border-slate-300 text-slate-500 dark:border-darkmode-400">
                            Clear Items
                        </x-base.button>
                        <x-base.button
                            class="ml-auto w-32 shadow-md"
                            variant="primary"
                        >
                            Charge
                        </x-base.button>
                    </div>
                </x-base.tab.panel>
                <x-base.tab.panel id="details">
                    <div class="box mt-5 p-5">
                        <div class="flex items-center border-b border-slate-200 pb-5 dark:border-darkmode-400">
                            <div>
                                <div class="text-slate-500">Time</div>
                                <div class="mt-1">02/06/20 02:10 PM</div>
                            </div>
                            <x-base.lucide
                                class="ml-auto h-4 w-4 text-slate-500"
                                icon="Clock"
                            />
                        </div>
                        <div class="flex items-center border-b border-slate-200 py-5 dark:border-darkmode-400">
                            <div>
                                <div class="text-slate-500">Customer</div>
                                <div class="mt-1">{{ $fakers[0]['users'][0]['name'] }}</div>
                            </div>
                            <x-base.lucide
                                class="ml-auto h-4 w-4 text-slate-500"
                                icon="User"
                            />
                        </div>
                        <div class="flex items-center border-b border-slate-200 py-5 dark:border-darkmode-400">
                            <div>
                                <div class="text-slate-500">People</div>
                                <div class="mt-1">3</div>
                            </div>
                            <x-base.lucide
                                class="ml-auto h-4 w-4 text-slate-500"
                                icon="Users"
                            />
                        </div>
                        <div class="flex items-center pt-5">
                            <div>
                                <div class="text-slate-500">Table</div>
                                <div class="mt-1">21</div>
                            </div>
                            <x-base.lucide
                                class="ml-auto h-4 w-4 text-slate-500"
                                icon="Mic"
                            />
                        </div>
                    </div>
                </x-base.tab.panel>
            </x-base.tab.panels>
        </x-base.tab.group>
        <!-- END: Ticket -->
    </div>
    <!-- BEGIN: New Order Modal -->
    <x-base.dialog id="new-order-modal">
        <x-base.dialog.panel>
            <x-base.dialog.title>
                <h2 class="mr-auto text-base font-medium">New Order</h2>
            </x-base.dialog.title>
            <x-base.dialog.description class="grid grid-cols-12 gap-4 gap-y-3">
                <div class="col-span-12">
                    <x-base.form-label for="pos-form-1">Name</x-base.form-label>
                    <x-base.form-input
                        class="flex-1"
                        id="pos-form-1"
                        type="text"
                        placeholder="Customer name"
                    />
                </div>
                <div class="col-span-12">
                    <x-base.form-label for="pos-form-2">Table</x-base.form-label>
                    <x-base.form-input
                        class="flex-1"
                        id="pos-form-2"
                        type="text"
                        placeholder="Customer table"
                    />
                </div>
                <div class="col-span-12">
                    <x-base.form-label for="pos-form-3">Number of People</x-base.form-label>
                    <x-base.form-input
                        class="flex-1"
                        id="pos-form-3"
                        type="text"
                        placeholder="People"
                    />
                </div>
            </x-base.dialog.description>
            <x-base.dialog.footer class="text-right">
                <x-base.button
                    class="mr-1 w-32"
                    data-tw-dismiss="modal"
                    type="button"
                    variant="outline-secondary"
                >
                    Cancel
                </x-base.button>
                <x-base.button
                    class="w-32"
                    type="button"
                    variant="primary"
                >
                    Create Ticket
                </x-base.button>
            </x-base.dialog.footer>
        </x-base.dialog.panel>
    </x-base.dialog>
    <!-- END: New Order Modal -->
    <!-- BEGIN: Add Item Modal -->
    <x-base.dialog id="add-item-modal">
        <x-base.dialog.panel>
            <x-base.dialog.title>
                <h2 class="mr-auto text-base font-medium">
                    {{ $fakers[0]['foods'][0]['name'] }}
                </h2>
            </x-base.dialog.title>
            <x-base.dialog.description class="grid grid-cols-12 gap-4 gap-y-3">
                <div class="col-span-12">
                    <x-base.form-label
                        class="form-label"
                        for="pos-form-4"
                    >
                        Quantity
                    </x-base.form-label>
                    <div class="flex flex-1">
                        <x-base.button
                            class="mr-1 w-12 border-slate-200 bg-slate-100 text-slate-500 dark:border-darkmode-500 dark:bg-darkmode-700"
                            type="button"
                        >
                            -
                        </x-base.button>
                        <x-base.form-input
                            class="w-24 text-center"
                            id="pos-form-4"
                            type="text"
                            value="2"
                            placeholder="Item quantity"
                        />
                        <x-base.button
                            class="ml-1 w-12 border-slate-200 bg-slate-100 text-slate-500 dark:border-darkmode-500 dark:bg-darkmode-700"
                            type="button"
                        >
                            +
                        </x-base.button>
                    </div>
                </div>
                <div class="col-span-12">
                    <x-base.form-label for="pos-form-5">Notes</x-base.form-label>
                    <x-base.form-textarea
                        id="pos-form-5"
                        placeholder="Item notes"
                    ></x-base.form-textarea>
                </div>
            </x-base.dialog.description>
            <x-base.dialog.footer class="text-right">
                <x-base.button
                    class="mr-1 w-24"
                    data-tw-dismiss="modal"
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
                    Add Item
                </x-base.button>
            </x-base.dialog.footer>
        </x-base.dialog.panel>
    </x-base.dialog>
    <!-- END: Add Item Modal -->
@endsection
