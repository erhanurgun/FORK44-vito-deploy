@php
    $sortOptions = [
        'id' => __("ID"),
        'name' => __("Name"),
        'email' => __("Email"),
        'role' => __("Role"),
    ];

    $currentSort = request()->query('sort', 'default');
    $currentDirection = request()->query('direction', 'asc');
    $currentSortLabel = $sortOptions[$currentSort] ?? __("Sort By");
@endphp

<x-settings-layout>
    <x-slot name="pageTitle">{{ __("Users") }}</x-slot>

    <x-container>
        <x-card-header>
            <x-slot name="title">{{ __('Users') }}</x-slot>
            <x-slot name="description">{{ __('Here you can manage users') }}</x-slot>
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
                                        :href="route('settings.users.index', [
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
                    @include("settings.users.partials.create-user")
                </div>
            </x-slot>
        </x-card-header>
        <div class="space-y-3" x-data="{ deleteAction: '' }">
            <x-table>
                <x-thead>
                    <x-tr>
                        <x-th>#</x-th>
                        <x-th>{{ __('ID') }}</x-th>
                        <x-th>{{ __('Name') }}</x-th>
                        <x-th>{{ __('Email') }}</x-th>
                        <x-th>{{ __('Role') }}</x-th>
                        <x-th></x-th>
                    </x-tr>
                </x-thead>
                <x-tbody>
                    @foreach ($users as $user)
                        <x-tr>
                            <x-td>{{ $loop->iteration < 10 ? "0" : "" }}{{ $loop->iteration }}</x-td>
                            <x-td>{{ $user->id }}</x-td>
                            <x-td>{{ $user->name }}</x-td>
                            <x-td>{{ $user->email }}</x-td>
                            <x-td>
                                <div class="inline-flex">
                                    @if ($user->role === \App\Enums\UserRole::ADMIN)
                                        <x-status status="success">{{ __('ADMIN') }}</x-status>
                                    @else
                                        <x-status status="info">{{ __('USER') }}</x-status>
                                    @endif
                                </div>
                            </x-td>
                            <x-td class="text-right">
                                <x-icon-button
                                        x-on:click="deleteAction = '{{ route('settings.users.delete', ['user' => $user]) }}'; $dispatch('open-modal', 'delete-user')"
                                >
                                    <x-heroicon name="o-trash" class="h-5 w-5" />
                                </x-icon-button>
                                <x-icon-button :href="route('settings.users.show', ['user' => $user])">
                                    <x-heroicon name="o-cog-6-tooth" class="h-5 w-5" />
                                </x-icon-button>
                            </x-td>
                        </x-tr>
                    @endforeach
                </x-tbody>
            </x-table>
            <x-confirmation-modal
                    name="delete-user"
                    :title="__('Confirm')"
                    :description="__('Are you sure that you want to delete this user?')"
                    method="delete"
                    x-bind:action="deleteAction"
            />
        </div>
    </x-container>
</x-settings-layout>
