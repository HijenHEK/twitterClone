

    <x-master>

            <main class="t-main f as ">

                @include('_nav')
                <section class="t-feed f fc ac ">

                    {{ $slot }}
                </section>
                    @include('_friends')

            </main>


</x-master>

