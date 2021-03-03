@extends('layouts.app')

@section('content')
@section('title', 'Countries Checkboxes')
@section('description', 'Autocomplete App Countries Checkboxes')
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Countries Checkboxes
                </h2>
            </div>
            <div class="mt-10 flex flex-col justify-between">
                <dl class="space-y-10 md:space-y-0 md:grid">
                    <main class="flex-1 overflow-x-hidden overflow-y-auto">
                        <div class="container mx-auto px-6 py-8">
                            <h3 class="text-gray-700 text-3xl font-medium">Update your list of countries</h3>
                            <div class="mt-10 sm:mt-0 py-4">
                                <form action="{{ route('update-countries') }}" method="POST" class="mb-4" role="form">
                                    @csrf
                                    @include('pages.countries_checkboxes.countries_section.index')
                                </form>
                            </div>
                        </div>
                    </main>
                </dl>
            </div>
        </div>
    </div>
@endsection
