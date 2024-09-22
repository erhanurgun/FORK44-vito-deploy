@php
    $sortOptions = [
        'created_at' => __("Date"),
        'domain' => __("Domain"),
        'status' => __("Status"),
    ];

    $currentSort = request()->query('sort', 'default');
    $currentDirection = request()->query('direction', 'asc');
    $currentSortLabel = $sortOptions[$currentSort] ?? __("Sort By");
@endphp

<div>
    <x-card-header>
        <x-slot name="title">{{ __('Sites') }}</x-slot>
        <x-slot name="description">{{ __('Your sites will appear here. You can see the details and manage them') }}</x-slot>
        <x-slot name="aside">
            <div class="flex space-x-2">
                <x-dropdown>
                    <x-slot name="trigger">
                        <x-secondary-button>
                            {{ $currentSortLabel }}
                            <x-heroicon name="o-chevron-down" class="h-4 w-4" />
                        </x-secondary-button>
                    </x-slot>
                    <x-slot name="content">
                        @foreach ($sortOptions as $sortKey => $sortLabel)
                            <x-dropdown-link
                                    :href="route('servers.sites', [
                                    'server' => $server,
                                    'sort' => $sortKey,
                                    'direction' => $currentDirection
                                ])"
                                    :active="request()->query('sort') === $sortKey"
                            >
                                {{ $sortLabel }}
                            </x-dropdown-link>
                        @endforeach
                    </x-slot>
                </x-dropdown>
                <x-primary-button :href="route('servers.sites.create', ['server' => $server])">
                    {{ __("Create Site") }}
                </x-primary-button>
            </div>
        </x-slot>
    </x-card-header>

    <x-live id="live-sites">
        @if (count($sites) > 0)
            <div class="space-y-3">
                <x-table>
                    <x-thead>
                        <x-tr>
                            <x-th>#</x-th>
                            <x-th>{{ __("Date") }}</x-th>
                            <x-th>{{ __("Domain") }}</x-th>
                            <x-th>{{ __("Tags") }}</x-th>
                            <x-th>{{ __("Status") }}</x-th>
                            <x-th></x-th>
                        </x-tr>
                    </x-thead>
                    <x-tbody>
                        @foreach ($sites as $site)
                            <x-tr>
                                <x-td>{{ $loop->iteration < 10 ? "0" : "" }}{{ $loop->iteration }}</x-td>
                                <x-td>
                                    <x-datetime :value="$site->created_at" />
                                </x-td>
                                <x-td>
                                    <div class="flex items-center">
                                        <img
                                                src="{{ asset("static/images/" . $site->type . ".svg") }}"
                                                class="mr-1 h-5 w-5"
                                                alt=""
                                        />
                                        <a
                                                href="{{ route("servers.sites.show", ["server" => $server, "site" => $site]) }}"
                                                class="hover:underline"
                                        >
                                            {{ $site->domain }}
                                        </a>
                                    </div>
                                </x-td>
                                <x-td>
                                    @include("settings.tags.tags", ["taggable" => $site, "oobOff" => true])
                                </x-td>
                                <x-td>
                                    @include("sites.partials.status", ["status" => $site->status])
                                </x-td>
                                <x-td>
                                    <div class="flex items-center justify-end">
                                        <x-icon-button
                                                :href="route('servers.sites.show', ['server' => $server, 'site' => $site])"
                                                data-tooltip="{{ __('Show Site') }}"
                                        >
                                            <x-heroicon name="o-eye" class="h-5 w-5" />
                                        </x-icon-button>
                                        <x-icon-button
                                                :href="route('servers.sites.settings', ['server' => $server, 'site' => $site])"
                                                data-tooltip="{{ __('Settings') }}"
                                        >
                                            <x-heroicon name="o-wrench-screwdriver" class="h-5 w-5" />
                                        </x-icon-button>
                                    </div>
                                </x-td>
                            </x-tr>
                        @endforeach
                    </x-tbody>
                </x-table>

                <div class="mt-4">
                    {{ $sites->withQueryString()->links() }}
                </div>
            </div>
        @else
            <x-simple-card>
                <div class="text-center">
                    {{ __("You don't have any sites yet!") }}
                </div>
            </x-simple-card>
        @endif
    </x-live>
</div>
