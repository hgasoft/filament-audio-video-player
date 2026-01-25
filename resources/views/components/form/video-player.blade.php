<x-dynamic-component wire:ignore
    x-data="plyr"
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :hint="$getHint()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()">

    <video style="{{ $getCssAsString() }}"
        data-plyr-config='{
            {{ $getConfigAsString() }}
        }'
        controls
        class="js-plyr"
        crossorigin
        playsinline>
        <source src="{{ $getState() }}"
            type="video/mp4">
    </video>
</x-dynamic-component>
