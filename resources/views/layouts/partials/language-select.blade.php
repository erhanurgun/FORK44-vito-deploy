<div class="flex items-center text-gray-600 dark:text-gray-300"
     x-data="{
        language: '{{ App::getLocale() }}',
        changeLanguage(lang) {
            this.language = lang;
            localStorage.setItem('language', lang);
            this.updateDocument();
            window.location.href = '{{ route('lang', '') }}/' + lang;
        },
        updateDocument() {
            document.documentElement.lang = this.language;
        }
     }"
     x-init="
        language = localStorage.getItem('language') || '{{ App::getLocale() }}';
        updateDocument();
     "
>
    <div class="flex items-center justify-end">
        <x-dropdown>
            <x-slot name="trigger">
                <button
                    type="button"
                    class="flex items-center rounded-full p-1 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600"
                    x-bind:aria-label="{{ __('Change language') }}"
                >
                    <img x-bind:src="language === 'en'
                            ? '{{ asset('static/images/flags/en.png') }}'
                            : '{{ asset('static/images/flags/tr.png') }}'"
                         class="h-7 w-7"
                         x-bind:alt="language === 'en' ? '{{ __('English') }}' : '{{ __('Türkçe') }}'"
                    />
                </button>
            </x-slot>

            <x-slot name="content">

                @foreach(config('languages') as $code => $locale)
                    <x-dropdown-link
                        class="cursor-pointer"
                        x-on:click="changeLanguage('{{ $code }}')"
                        x-bind:class="{'text-primary-600 font-semibold': language === '{{ $code }}'}"
                    >
                        <img src="{{ asset('static/images/flags/' . $code . '.png') }}"
                             class="mr-2 h-5 w-5"
                             alt="{{ __($locale) }}"
                        />
                        {{ __($locale) }}
                    </x-dropdown-link>
                @endforeach
            </x-slot>
        </x-dropdown>
    </div>
</div>