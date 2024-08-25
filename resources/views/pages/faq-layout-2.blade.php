@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>FAQ - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
            <div class="box mt-5">
                <div class="p-5">
                    <a
                        class="flex items-center font-medium text-primary"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Activity"
                        /> About Our
                        Products
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Box"
                        /> Related License
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Lock"
                        /> Single
                        Application License
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Settings"
                        /> Multi
                        Application License
                    </a>
                </div>
                <div class="border-t border-slate-200/60 p-5 dark:border-darkmode-400">
                    <a
                        class="flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Activity"
                        /> Term of Use
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Box"
                        /> Author Fees
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Lock"
                        /> Product Review
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Settings"
                        /> Privacy
                        Policy
                    </a>
                </div>
                <div class="border-t border-slate-200/60 p-5 dark:border-darkmode-400">
                    <a
                        class="flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Activity"
                        /> About Our
                        Products
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Box"
                        /> Related License
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Lock"
                        /> Single
                        Application License
                    </a>
                    <a
                        class="mt-5 flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4"
                            icon="Settings"
                        /> Multi
                        Application License
                    </a>
                </div>
            </div>
        </div>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        About Our Products
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
            <div class="intro-y box mt-5">
                <div class="flex items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">Related License</h2>
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
            <div class="intro-y box mt-5">
                <div class="flex items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Single Application License
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
        </div>
        <!-- END: FAQ Content -->
    </div>
@endsection
