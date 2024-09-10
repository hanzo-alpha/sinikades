<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.app')]
class extends Component {
    //
}; ?>

<div>
    <x-pages.section.hero/>
    <x-pages.section.service-about/>
    <x-pages.section.about/>
    <x-pages.section.services/>
    <x-pages.section.cta/>
    <x-pages.section.feature/>
    <x-pages.section.counter/>
    <x-pages.section.team/>
    <x-pages.section.project/>
    <x-pages.section.testimonial/>
    <x-pages.section.contact/>
    <x-pages.section.blog/>
</div>
