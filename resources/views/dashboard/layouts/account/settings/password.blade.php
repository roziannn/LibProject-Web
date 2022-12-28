<div class="container ">
    <div class="row my-5">
        @include('dashboard.layouts.account.settings.sidemenu')
        <div class="col-md-9 pl-md-0">
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
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" required
                                autocomplete="current_password">
                            @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="password">Password Baru</label>
                            <input type="password" class="form-control" id="password" name="password" required autocomplete="new-passwod">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="password-confirm">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
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
