<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer\Table;

use AymanAlhattami\FilamentAudioVideoPlayer\WithAudioVideoPlayer;
use Filament\Tables\Columns\Column;

abstract class BaseAudioVideoPlayerColumn extends Column
{
    use WithAudioVideoPlayer;

    public static function make(?string $name = null): static
    {
        return parent::make($name)->disabledClick();
    }
}
