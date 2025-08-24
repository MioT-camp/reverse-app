<?php

use function Livewire\Volt\{state};

state(['lower' => 'abc']);

?>

<div>
    <h1>{{ $lower }}</h1>
</div>
