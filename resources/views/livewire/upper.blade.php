<?php

use function Livewire\Volt\{state};

state(['upper' => 'ABC']);

?>

<div>
    <h1>{{ $upper }}</h1>
</div>
