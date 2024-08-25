@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Regular Table - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Regular Table</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Table -->
            <x-base.preview-component class="intro-y box">
                <div class="flex flex-col items-center border-b border-slate-200/60 p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Table</h2>
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
                        <div class="overflow-x-auto">
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                            <x-base.table
                                class="mt-5"
                                dark
                            >
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="overflow-x-auto">
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                                <x-base.table
                                    class="mt-5"
                                    dark
                                >
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Basic Table -->
            <!-- BEGIN: Bordered Table -->
            <x-base.preview-component class="intro-y box mt-5">
                <div class="flex flex-col items-center border-b border-slate-200/60 p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Bordered Table
                    </h2>
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
                        <div class="overflow-x-auto">
                            <x-base.table bordered>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="overflow-x-auto">
                                <x-base.table bordered>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Bordered Table -->
            <!-- BEGIN: Hoverable Table -->
            <x-base.preview-component class="intro-y box mt-5">
                <div class="flex flex-col items-center border-b border-slate-200/60 p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Hoverable Table
                    </h2>
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
                        <div class="overflow-x-auto">
                            <x-base.table
                                bordered
                                hover
                            >
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="overflow-x-auto">
                                <x-base.table
                                    bordered
                                    hover
                                >
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Hoverable Table -->
            <!-- BEGIN: Table Row States -->
            <x-base.preview-component class="intro-y box mt-5">
                <div class="flex flex-col items-center border-b border-slate-200/60 p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Table Row States
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-4">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-4"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="overflow-x-auto">
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr class="bg-primary text-white">
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr class="bg-danger text-white">
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr class="bg-warning">
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="overflow-x-auto">
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr class="bg-primary text-white">
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr class="bg-danger text-white">
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr class="bg-warning">
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Table Row States -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Table Head Options -->
            <x-base.preview-component class="intro-y box">
                <div class="flex flex-col items-center border-b border-slate-200/60 p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Table Head Options
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-5">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-5"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="overflow-x-auto">
                            <x-base.table>
                                <x-base.table.thead variant="dark">
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                            <x-base.table class="mt-5">
                                <x-base.table.thead variant="light">
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="overflow-x-auto">
                                <x-base.table>
                                    <x-base.table.thead variant="dark">
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                                <x-base.table class="mt-5">
                                    <x-base.table.thead variant="light">
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Table Head Options -->
            <!-- BEGIN: Responsive Table -->
            <x-base.preview-component class="intro-y box mt-5">
                <div class="flex flex-col items-center border-b border-slate-200/60 p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Responsive Table
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-6">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-6"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="overflow-x-auto">
                            <x-base.table>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Email
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Address
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td class="whitespace-nowrap">1</x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Angelina
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Jolie
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            @angelinajolie
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            angelinajolie@gmail.com
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            260 W. Storm Street New York, NY 10025.
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td class="whitespace-nowrap">2</x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Brad
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Pitt
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            @bradpitt
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            bradpitt@gmail.com
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            47 Division St. Buffalo, NY 14241.
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td class="whitespace-nowrap">3</x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Charlie
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            Hunnam
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            @charliehunnam
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            charliehunnam@gmail.com
                                        </x-base.table.td>
                                        <x-base.table.td class="whitespace-nowrap">
                                            8023 Amerige Street Harriman, NY 10926.
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="overflow-x-auto">
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Email
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Address
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td class="whitespace-nowrap">1</x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Angelina
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Jolie
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                @angelinajolie
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                angelinajolie@gmail.com
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                260 W. Storm Street New York, NY 10025.
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td class="whitespace-nowrap">2</x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Brad
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Pitt
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                @bradpitt
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                bradpitt@gmail.com
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                47 Division St. Buffalo, NY 14241.
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td class="whitespace-nowrap">3</x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Charlie
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Hunnam
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                @charliehunnam
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                charliehunnam@gmail.com
                                            </x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                8023 Amerige Street Harriman, NY 10926.
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Responsive Table -->
            <!-- BEGIN: Small Table -->
            <x-base.preview-component class="intro-y box mt-5">
                <div class="flex flex-col items-center border-b border-slate-200/60 p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Small Table</h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-7">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-7"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="overflow-x-auto">
                            <x-base.table sm>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="overflow-x-auto">
                                <x-base.table sm>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Small Table -->
            <!-- BEGIN: Striped Rows -->
            <x-base.preview-component class="intro-y box mt-5">
                <div class="flex flex-col items-center border-b border-slate-200/60 p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Striped Rows
                    </h2>
                    <x-base.form-switch class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-8">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-8"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="overflow-x-auto">
                            <x-base.table striped>
                                <x-base.table.thead>
                                    <x-base.table.tr>
                                        <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            First Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Last Name
                                        </x-base.table.th>
                                        <x-base.table.th class="whitespace-nowrap">
                                            Username
                                        </x-base.table.th>
                                    </x-base.table.tr>
                                </x-base.table.thead>
                                <x-base.table.tbody>
                                    <x-base.table.tr>
                                        <x-base.table.td>1</x-base.table.td>
                                        <x-base.table.td>Angelina</x-base.table.td>
                                        <x-base.table.td>Jolie</x-base.table.td>
                                        <x-base.table.td>@angelinajolie</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>2</x-base.table.td>
                                        <x-base.table.td>Brad</x-base.table.td>
                                        <x-base.table.td>Pitt</x-base.table.td>
                                        <x-base.table.td>@bradpitt</x-base.table.td>
                                    </x-base.table.tr>
                                    <x-base.table.tr>
                                        <x-base.table.td>3</x-base.table.td>
                                        <x-base.table.td>Charlie</x-base.table.td>
                                        <x-base.table.td>Hunnam</x-base.table.td>
                                        <x-base.table.td>@charliehunnam</x-base.table.td>
                                    </x-base.table.tr>
                                </x-base.table.tbody>
                            </x-base.table>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="overflow-x-auto">
                                <x-base.table striped>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th class="whitespace-nowrap">#</x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                First Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Last Name
                                            </x-base.table.th>
                                            <x-base.table.th class="whitespace-nowrap">
                                                Username
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1</x-base.table.td>
                                            <x-base.table.td>Angelina</x-base.table.td>
                                            <x-base.table.td>Jolie</x-base.table.td>
                                            <x-base.table.td>@angelinajolie</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2</x-base.table.td>
                                            <x-base.table.td>Brad</x-base.table.td>
                                            <x-base.table.td>Pitt</x-base.table.td>
                                            <x-base.table.td>@bradpitt</x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3</x-base.table.td>
                                            <x-base.table.td>Charlie</x-base.table.td>
                                            <x-base.table.td>Hunnam</x-base.table.td>
                                            <x-base.table.td>@charliehunnam</x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Striped Rows -->
        </div>
    </div>
@endsection
