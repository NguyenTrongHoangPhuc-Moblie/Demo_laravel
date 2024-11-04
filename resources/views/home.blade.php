<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('change.language') }}">
        @csrf
        <select name="language" onchange="this.form.submit()">
            <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English</option>
            <option value="vi" {{ session('locale') == 'vi' ? 'selected' : '' }}>Tiếng Việt</option>
            <option value="af" {{ session('locale') == 'af' ? 'selected' : '' }}>Afrikaans</option>
        </select>
    </form>

    <h1>{{ translateText('Hello, welcome to my website!') }}</h1>
    <p>{{ translateText('This is a sample paragraph to demonstrate multilingual functionality.') }}</p>
</x-app-layout>
