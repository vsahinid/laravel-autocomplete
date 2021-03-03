<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Countries</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Choose the countries you want to fly to in the next year.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    @error('countrys')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="w-full">
                        <div class="question-and-answer select-none border-2 my-3 px-6 py-4 rounded-lg text-sm group">
                            <dt class="question">
                                <div class="flex justify-between">
                                    <div class="text-blue-800 font-semibold">
                                        Countries I want to visit
                                    </div>
                                </div>
                            </dt>
                            <dd class="answer mt-2 leading-snug text-gray-700">
                                <div class="grid grid-cols-3 gap-4 mt-4">
                                    @foreach ($countries as $country)
                                        <div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id={{ $country->id }} name="countries[]" type="checkbox"
                                                        value={{ $country->id }}
                                                        {{ (is_array(old('countries')) and in_array($country->id, old('countries'))) ? ' checked' : '' }}
                                                        {{-- {{ $found === true ? 'checked' : '' }} {{ $found }} --}}
                                                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded cursor-pointer">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for={{ $country->id }}
                                                        class="font-medium text-gray-700 cursor-pointer">{{ $country->name }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </dd>
                        </div>
                    </div>

                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Update countries
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
