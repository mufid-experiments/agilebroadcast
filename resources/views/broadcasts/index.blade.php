<x-layout>
    <x-slot name="title">
        SangPemberitahu
    </x-slot>
    
    <x-broadcasts.pagewithsidebar activeMenu="index">
    </x-broadcasts.pagewithsidebar>

    <x-broadcasts.pagewithsidebar activeMenu="create">
        <h1>
            Ini adalah kotak ke-2 yang dibuat
            dengan design pattern Component
            milik Laravel
        </h1>
    </x-broadcasts.pagewithsidebar>
    
    <div class="page-body">
        <div class="container-xl">
            <div class="row gx-lg-4">
                <x-broadcasts.menu activeMenu="index" />

                <div class="col-lg-9">
                    <div class="card card-lg">
                        <div class="card-body">
                            <div class=markdown>
                                <h1>Halo, selamat datang.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
