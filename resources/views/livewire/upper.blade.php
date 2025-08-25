<?php

use function Livewire\Volt\{state, mount};

state(['page']);
state(['word']);

mount(function () {
    if ($this->page == 'upper') {
        $this->word_changed = strtoupper($this->word);
    } elseif ($this->page == 'lower') {
        $this->word_changed = strtolower($this->word);
    }
});

?>

<div>
    <p>{{ $this->word_changed }}</p>
</div>
