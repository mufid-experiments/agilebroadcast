<x-layout>
    <x-slot name="title">
        SangPemberitahu - Kirim Baru
    </x-slot>
    
    <div class="page-body">
        <div class="container-xl">
            <div class="row gx-lg-4">
                <x-broadcasts.menu activeMenu="create" />

                <div class="col-lg-9">
                    <div class="card card-lg">
                        <div class="card-body">
                            <div class=markdown>
                                @if ($errors->any())
                                    <div class=row>
                                        <div class="alert alert-danger">
                                            <p>Terdapat kesalahan dalam form.</p>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <form method="POST" action="/broadcasts">
                                @csrf
                            
                                <div class="form-group mb-3 row">
                                    <label class="form-label col-3 col-form-label">Penerima</label>
                                    <div class="col">
                                        <input class="form-control" type=text name=destination value="{{ old('destination') }}" />
                                        <small class="form-hint">
                                            Alamat atau nomor ponsel penerima pesan
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label class="form-label col-3 col-form-label">Isi Pesan</label>
                                    <div class="col">
                                        <textarea class="form-control" name="content">{{ old('content') }}</textarea>
                                        <small class="form-hint">
                                            Pesan yang ingin disampaikan
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label class="form-label col-3 col-form-label">Saluran</label>
                                    <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column col">
                                      <label class="form-selectgroup-item flex-fill">
                                        <input type="radio" name="channel" value="sms" class="form-selectgroup-input" {{ old('channel') == 'email' ? "checked=checked" : "" }} >
                                        <div class="form-selectgroup-label d-flex align-items-center p-3">
                                          <div class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                          </div>
                                          <div>Email</div>
                                        </div>
                                      </label>
                                      <label class="form-selectgroup-item flex-fill">
                                        <input type="radio" name="channel" value="email" class="form-selectgroup-input" {{ old('channel') == 'sms' ? "checked=checked" : "" }} >
                                        <div class="form-selectgroup-label d-flex align-items-center p-3">
                                          <div class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                          </div>
                                          <div>
                                            SMS
                                          </div>
                                        </div>
                                      </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
