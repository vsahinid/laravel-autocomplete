{{-- https://tailwindcomponents.com/component/search-results --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">
<br />

<div style="width: 90%">
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="flex">
            <input
                class="@error('country') border-red-500 @enderror mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                type="search" name="country" id="country" placeholder="Search for your country" autocomplete="off"
                value="{{ old('country') }}" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;" />

            <button style="border-top-left-radius: 0px; border-bottom-left-radius: 0px; border-left: none;"
                class="@error('country') border-red-500 @enderror flex items-center justify-center px-4 mt-1 py-2 px-3 border border-blue-600 bg-white rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 text-base font-medium"
                name=" query" value="{{ isset($query) ? $query : '' }}">
                <svg class=" h-4 w-4 text-grey-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                </svg>
            </button>
        </div>
        @error('country')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </form>
    <div id="country_list" style="position: absolute;"></div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#country').on('keyup', function() {
            var query = $(this).val();
            $.ajax({
                url: "{{ route('autocomplete-countrys') }}",
                type: "GET",
                data: {
                    'country': query
                },
                success: function(data) {
                    $('#country_list').html(data);
                }
            })
        });
        $(document).on('click', 'li', function() {
            var value = $(this).text();
            $('#country').val(value);
            $('#country_list').html("");
        });
    });

</script>
