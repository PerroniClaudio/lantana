<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('dashboard.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4">
            <div class="card bg-secondary">
                <div class="card-body justify-center items-center">
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="card bg-base-100">
                            <div class="card-body justify-center items-center text-center">
                                <h2 class="card-title">{{ __('dashboard.total_visitors') }}</h2>
                                <h1 class="text-3xl lg:text-4xl">
                                    15.432
                                </h1>
                            </div>
                        </div>
                        <div class="card bg-base-100">
                            <div class="card-body justify-center items-center text-center">
                                <h2 class="card-title">{{ __('dashboard.unique_visitors') }}</h2>
                                <h1 class="text-3xl lg:text-4xl">
                                    11.871
                                </h1>
                            </div>
                        </div>
                        <div class="card bg-base-100">
                            <div class="card-body justify-center items-center text-center">
                                <h2 class="card-title">{{ __('dashboard.page_views') }}</h2>
                                <h1 class="text-3xl lg:text-4xl">
                                    23.871
                                </h1>
                            </div>
                        </div>
                        <div class="card bg-base-100">
                            <div class="card-body justify-center items-center text-center">
                                <h2 class="card-title">{{ __('dashboard.avg_time') }}</h2>
                                <h1 class="text-3xl lg:text-4xl">
                                    03m 45s
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-secondary">
                <div class="card-body">
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                        <div class="lg:col-span-3 flex flex-col">
                            <div class="card bg-base-100 flex-grow">
                                <div class="card-body ">
                                    <h2 class="card-title">{{ __('dashboard.geo_distribution') }}</h2>
                                    <x-dashboard.chart-map />
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="card bg-base-100 flex-grow">
                                <div class="card-body min-h-96">
                                    <h2 class="card-title">{{ __('dashboard.traffic_sources') }}</h2>
                                    <x-dashboard.chart-sources />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-secondary">
                <div class="card-body">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="card bg-base-100">
                            <div class="card-body">
                                <h2 class="card-title">{{ __('dashboard.devices') }}</h2>
                            </div>
                        </div>
                        <div class="card bg-base-100">
                            <div class="card-body">
                                <h2 class="card-title">{{ __('dashboard.browsers') }}</h2>
                            </div>
                        </div>
                        <div class="card bg-base-100">
                            <div class="card-body">
                                <h2 class="card-title">{{ __('dashboard.top_pages') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
