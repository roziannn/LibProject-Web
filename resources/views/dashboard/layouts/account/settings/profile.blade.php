<div class="container ">
    <div class="row">
        @include('dashboard.layouts.account.settings.sidemenu')
        <div class="col-md-9 pl-md-0">
            <div class="card user-settings__wrapper">
                <div class="user-settings__title">
                    <h4>Profile Account</h4>
                    <hr>
                </div>
                <form action="{{ route('account.update') }}" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    {{-- show current avatar --}}
                    <img src="{{asset('img/avatar/' . $data->avatar)}}" alt="foto profil {{ $data->username }}" width="150">
                    {{-- end --}}
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="avatar">Avatar</label>
                            <input class="form-control" type="file" id="avatar" name="avatar">
                        </div>
                        @if ($errors->has('avatar'))
                            <span class="invalid-feedback" role="alert">
                                {{ $errors->first('avatar') }}
                            </span>
                        @endif
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="name">Nama Lengkap<span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $data->name) }}">
                            <div class="text-danger err name"></div>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="{{ old('username', $data->username) }}">
                            <div class="text-danger err name"></div>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label for="bio" class="control-label">Bio</label>

                            <textarea name="bio" id="bio" class="form-control" rows="3">{{ old('bio', $data->bio) }}</textarea>
                            <div class="text-danger err bio"></div>

                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-sm-9">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ auth()->user()->email }}" readonly="disable">
                            <div class="text-danger err email"></div>
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
