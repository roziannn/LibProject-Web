<div class="container ">
    <div class="row my-5">
        @include('dashboard.layouts.account.settings.sidemenu')
        <div class="col-md-9 pl-md-0">
            <div class="card user-settings__wrapper">
                <div class="user-settings__title">
                    <h4>Profile Account</h4>
                    <hr>
                </div>
                <form action="{{ route('account.update') }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="name">Nama Lengkap<span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="">
                            <div class="text-danger err name"></div>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="">
                            <div class="text-danger err name"></div>
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

