

    <x-master>

            <main class="t-main f as ">
                @include('_nav')

                    {{ $slot }}

                    @include('_friends')

            </main>


</x-master>

