<?php

use function Livewire\Volt\{state, mount};

state(['word']);

mount(function () {
    $this->word_reverse = strrev($this->word);
});

?>

<div>
    <h1>元の値</h1>
    <p>{{ $word }}</p>
    <p>文字列を反転した値</p>
    <p>{{ $this->word_reverse }}</p>
</div>
