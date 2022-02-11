<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <img src="{{URL::asset('../../img/Logo 2.png')}}" width="56" alt="no jala">
    <x-jet-welcome/>
</x-app-layout>