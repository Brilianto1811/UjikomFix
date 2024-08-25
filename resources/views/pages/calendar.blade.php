@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Calendar - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
        <h2 class="mr-auto text-lg font-medium">Calendar</h2>
        <div class="mt-4 flex w-full sm:mt-0 sm:w-auto">
            <x-base.button
                class="mr-2 shadow-md"
                variant="primary"
            >
                Print Schedule
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
                            icon="Share"
                        /> Share
                    </x-base.menu.item>
                    <x-base.menu.item>
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Settings"
                        /> Settings
                    </x-base.menu.item>
                </x-base.menu.items>
            </x-base.menu>
        </div>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-5">
        <!-- BEGIN: Calendar Side Menu -->
        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            <div class="box intro-y p-5">
                <x-base.button
                    class="mt-2 w-full"
                    type="button"
                    variant="primary"
                >
                    <x-base.lucide
                        class="mr-2 h-4 w-4"
                        icon="Edit"
                    /> Add New Schedule
                </x-base.button>
                <x-base.calendar.draggable
                    class="mb-5 mt-6 border-b border-t border-slate-200/60 py-3 dark:border-darkmode-400"
                    id="calendar-events"
                >
                    <div class="relative">
                        <div
                            class="event -mx-3 flex cursor-pointer items-center rounded-md p-3 transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400">
                            <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">VueJS Amsterdam</div>
                                <div class="mt-0.5 text-xs text-slate-500">
                                    <span class="event__days">2</span> Days
                                    <span class="mx-1">•</span> 10:00 AM
                                </div>
                            </div>
                        </div>
                        <a
                            class="absolute bottom-0 right-0 top-0 my-auto flex items-center"
                            href=""
                        >
                            <x-base.lucide
                                class="h-4 w-4 text-slate-500"
                                icon="Edit"
                            />
                        </a>
                    </div>
                    <div class="relative">
                        <div
                            class="event -mx-3 flex cursor-pointer items-center rounded-md p-3 transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400">
                            <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">
                                    Vue Fes Japan 2019
                                </div>
                                <div class="mt-0.5 text-xs text-slate-500">
                                    <span class="event__days">3</span> Days
                                    <span class="mx-1">•</span> 07:00 AM
                                </div>
                            </div>
                        </div>
                        <a
                            class="absolute bottom-0 right-0 top-0 my-auto flex items-center"
                            href=""
                        >
                            <x-base.lucide
                                class="h-4 w-4 text-slate-500"
                                icon="Edit"
                            />
                        </a>
                    </div>
                    <div class="relative">
                        <div
                            class="event -mx-3 flex cursor-pointer items-center rounded-md p-3 transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400">
                            <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">Laracon 2021</div>
                                <div class="mt-0.5 text-xs text-slate-500">
                                    <span class="event__days">4</span> Days
                                    <span class="mx-1">•</span> 11:00 AM
                                </div>
                            </div>
                        </div>
                        <a
                            class="absolute bottom-0 right-0 top-0 my-auto flex items-center"
                            href=""
                        >
                            <x-base.lucide
                                class="h-4 w-4 text-slate-500"
                                icon="Edit"
                            />
                        </a>
                    </div>
                    <div
                        class="hidden p-3 text-center text-slate-500"
                        id="calendar-no-events"
                    >
                        No events yet
                    </div>
                </x-base.calendar.draggable>
                <x-base.form-switch class="flex">
                    <x-base.form-switch.label for="checkbox-events">
                        Remove after drop
                    </x-base.form-switch.label>
                    <x-base.form-switch.input
                        class="ml-auto"
                        id="checkbox-events"
                        type="checkbox"
                    />
                </x-base.form-switch>
            </div>
            <div class="box intro-y mt-5 p-5">
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
                <div class="mt-5 border-t border-slate-200/60 pt-5 dark:border-darkmode-400">
                    <div class="flex items-center">
                        <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                        <span class="truncate">Independence Day</span>
                        <div class="mx-3 h-px flex-1 border border-r border-dashed border-slate-200 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">23th</span>
                    </div>
                    <div class="mt-4 flex items-center">
                        <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                        <span class="truncate">Memorial Day</span>
                        <div class="mx-3 h-px flex-1 border border-r border-dashed border-slate-200 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">10th</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Calendar Side Menu -->
        <!-- BEGIN: Calendar Content -->
        <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
            <div class="box p-5">
                <x-calendar />
            </div>
        </div>
        <!-- END: Calendar Content -->
    </div>
@endsection
