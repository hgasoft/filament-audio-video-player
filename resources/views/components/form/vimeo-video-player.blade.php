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

    <div style="{{ $getCssAsString() }}"
        data-plyr-config='{
            {{ $getConfigAsString() }}
        }'
        class="plyr__video-embed js-plyr">
        <iframe style="position: unset;"
            src="{{ $getState() }}"
            allowfullscreen
            allowtransparency
            allow="autoplay"></iframe>
    </div>
</x-dynamic-component>
