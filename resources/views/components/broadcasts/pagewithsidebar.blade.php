    <div class="page-body">
        <div class="container-xl">
            <div class="row gx-lg-4">
                <x-broadcasts.menu :activeMenu="$activeMenu" />

                <div class="col-lg-9">
                    <div class="card card-lg">
                        <div class="card-body">
                            <div class=markdown>
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
