@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>FAQ - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">FAQ Layout</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        <a
            class="intro-y box col-span-12 border-2 border-primary py-10 dark:border-primary lg:col-span-4"
            href=""
        >
            <x-base.lucide
                class="mx-auto block h-12 w-12 text-primary"
                icon="Shield"
            />
            <div class="mt-3 text-center text-base font-medium">
                Single Application
            </div>
            <div class="mx-auto mt-2 w-3/4 text-center text-slate-500">
                Lorem Ipsum is simply dummy text of the printing
            </div>
        </a>
        <a
            class="intro-y box col-span-12 py-10 lg:col-span-4"
            href=""
        >
            <x-base.lucide
                class="mx-auto block h-12 w-12 text-primary"
                icon="Send"
            />
            <div class="mt-3 text-center text-base font-medium">
                Multi Application
            </div>
            <div class="mx-auto mt-2 w-3/4 text-center text-slate-500">
                Lorem Ipsum is simply dummy text of the printing
            </div>
        </a>
        <a
            class="intro-y box col-span-12 py-10 lg:col-span-4"
            href=""
        >
            <x-base.lucide
                class="mx-auto block h-12 w-12 text-primary"
                icon="TrendingUp"
            />
            <div class="mt-3 text-center text-base font-medium">
                Custom License
            </div>
            <div class="mx-auto mt-2 w-3/4 text-center text-slate-500">
                Lorem Ipsum is simply dummy text of the printing
            </div>
        </a>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Working with Dropplets
                    </h2>
                </div>
                <x-base.disclosure.group class="p-5">
                    <x-base.disclosure
                        id="faq-accordion-1"
                        :index="0"
                    >
                        <x-base.disclosure.button>
                            OpenSSL Essentials: Working with SSL Certificates, Private
                            Keys
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-2"
                        :index="1"
                    >
                        <x-base.disclosure.button>
                            Understanding IP Addresses, Subnets, and CIDR Notation
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-3"
                        :index="2"
                    >
                        <x-base.disclosure.button>
                            How To Troubleshoot Common HTTP Error Codes
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-4"
                        :index="3"
                    >
                        <x-base.disclosure.button>
                            An Introduction to Securing your Linux VPS
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                </x-base.disclosure.group>
            </div>
            <div class="box mt-6">
                <div class="flex items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Working with Dropplets
                    </h2>
                </div>
                <x-base.disclosure.group class="p-5">
                    <x-base.disclosure
                        id="faq-accordion-5"
                        :index="0"
                    >
                        <x-base.disclosure.button>
                            OpenSSL Essentials: Working with SSL Certificates, Private
                            Keys
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-6"
                        :index="1"
                    >
                        <x-base.disclosure.button>
                            Understanding IP Addresses, Subnets, and CIDR Notation
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-7"
                        :index="2"
                    >
                        <x-base.disclosure.button>
                            How To Troubleshoot Common HTTP Error Codes
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-8"
                        :index="3"
                    >
                        <x-base.disclosure.button>
                            An Introduction to Securing your Linux VPS
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                </x-base.disclosure.group>
            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Working with Dropplets
                    </h2>
                </div>
                <x-base.disclosure.group class="p-5">
                    <x-base.disclosure
                        id="faq-accordion-9"
                        :index="0"
                    >
                        <x-base.disclosure.button>
                            OpenSSL Essentials: Working with SSL Certificates, Private
                            Keys
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-10"
                        :index="1"
                    >
                        <x-base.disclosure.button>
                            Understanding IP Addresses, Subnets, and CIDR Notation
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-11"
                        :index="2"
                    >
                        <x-base.disclosure.button>
                            How To Troubleshoot Common HTTP Error Codes
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-12"
                        :index="3"
                    >
                        <x-base.disclosure.button>
                            An Introduction to Securing your Linux VPS
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                </x-base.disclosure.group>
            </div>
            <div class="box mt-6">
                <div class="flex items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Working with Dropplets
                    </h2>
                </div>
                <x-base.disclosure.group class="p-5">
                    <x-base.disclosure
                        id="faq-accordion-13"
                        :index="0"
                    >
                        <x-base.disclosure.button>
                            OpenSSL Essentials: Working with SSL Certificates, Private
                            Keys
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-14"
                        :index="1"
                    >
                        <x-base.disclosure.button>
                            Understanding IP Addresses, Subnets, and CIDR Notation
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-15"
                        :index="2"
                    >
                        <x-base.disclosure.button>
                            How To Troubleshoot Common HTTP Error Codes
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                    <x-base.disclosure
                        id="faq-accordion-16"
                        :index="3"
                    >
                        <x-base.disclosure.button>
                            An Introduction to Securing your Linux VPS
                        </x-base.disclosure.button>
                        <x-base.disclosure.panel class="leading-relaxed text-slate-600 dark:text-slate-500">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </x-base.disclosure.panel>
                    </x-base.disclosure>
                </x-base.disclosure.group>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>
@endsection
