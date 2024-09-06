<x-input-label for="content" :value="__('Content')" />
<x-editor name="content" lang="sh" :value="$value" />
@error("content")
    <x-input-error class="mt-2" :messages="$message" />
@enderror

<x-input-help>{{ __('You can use variables like :var in the script', ['var' => '${VARIABLE_NAME}']) }}</x-input-help>
<x-input-help>{{ __('The variables will be asked when executing the script') }}</x-input-help>
