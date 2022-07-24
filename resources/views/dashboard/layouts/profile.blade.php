<div class="col-md-9">
    <form action="" class="form-submit" method="post" accept-charset="utf-8">
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="name" name="name" placeholder="" value= "{{ auth()->user()->name }}">
                <div class="text-danger err name"></div>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3">
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <script>document.getElementById("jenis_kelamin").value = Perempuan</script>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Bio</label>
            <div class="col-sm-8">
                <textarea name="bio" class="form-control" rows="3"></textarea>
                <div class="text-danger err bio"></div>
            </div>
        </div> 
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-sm-4 col-form-label">CV/Resume</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="resume" name="resume" placeholder="" value="">
                <div class="text-danger err resume"></div>
            </div>
        </div>  
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly="readonly">
                    <div class="text-danger err email"></div>
                </div>
            </div>  
        <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Sosial/Web</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="media_sosial" name="media_sosial" value="">
                <div class="text-danger err media_sosial"></div>
            </div>
        </div>                
        <div class="form-group row">                    
            <div class="offset-4 col-sm-6">
                <input type="submit" class="btn btn-primary" value="Simpan">                        
            </div>
        </div>     
    </form>        
</div>