<div class="container ">
    <div class="row">
        @include('dashboard.layouts.account.settings.sidemenu')
        <div class="col-md-9 pl-md-0">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif
            <div class="card user-settings__wrapper">
                <div class="user-settings__title">
                    <h4>Update Password</h4>
                    <hr>
                </div>
                <form action="{{ route('account.password.update') }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="current_password">Password Lama<span class="text-danger">
                                    *</span></label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                id="current_password" name="current_password" required autocomplete="current_password">
                            @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="font-size:12px;">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="password">Password Baru</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required
                                    autocomplete="new-passwod">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- <div class="input-group-append">
                                    <button class="btn btn-sm btn-secondary js-password-visibility-toggle"
                                        type="button">
                                        <i class="far js-btn-password-toggle__icon fa-eye"></i>
                                    </button>
                                </div> --}}
                            </div>
                            <div class="mt-2">
                            <small style="font-size:12px; color:#9e9ea7;">Minimal 6 Karakter dengan kombinasi huruf dan angka.</small>
                        </div>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="password-confirm">Konfirmasi Password Baru</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password-confirm"
                                    name="password_confirmation" required autocomplete="new-password">
                                    
                                {{-- <div class="input-group-append">
                                    <button class="btn btn-sm btn-secondary js-password-visibility-toggle"
                                        type="button">
                                        <i class="far js-btn-password-toggle__icon fa-eye"></i>
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="text-left">
                            <input type="submit" class="btn btn-primary px-3" value="Simpan Perubahan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
