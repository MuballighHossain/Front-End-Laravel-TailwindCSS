<div id="main" class="flex-1 pb-24 mt-12 bg-gray-100 main-content md:mt-2 md:pb-5">

    <div class="pt-3 bg-gray-800">
        <div class="p-4 text-2xl text-white shadow rounded-tl-3xl bg-gradient-to-r from-orange-400 to-orange-600">
            <h1 class="pl-2 font-bold">Analytics</h1>
        </div>
    </div>


    <section>
        @include('admin.components.metrics')
    </section>


    <div class="flex flex-row flex-wrap flex-grow mt-2">
        @include('admin.components.graphs')
    </div>


</div>
