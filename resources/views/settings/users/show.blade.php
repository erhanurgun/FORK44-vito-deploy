<x-settings-layout>
    <x-slot name="pageTitle">{{ __('Users') }}</x-slot>

    <x-container>
        @include("settings.users.partials.update-projects")

        @include("settings.users.partials.update-user-info")
    </x-container>
</x-settings-layout>
