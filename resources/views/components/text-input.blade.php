@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control border-dark focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>