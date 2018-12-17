<div class="my-3 p-3 bg-white rounded shadow-sm">
    <form action="" method="POST" id="pasien">
        <h6 class="border-bottom border-gray pb-2 mb-8">Formulir Rawat Jalan</h6>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group row">
                        <label for="rm" class="col-sm-3 col-form-label"><small>No. RM</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="rm" placeholder="Auto" readonly>
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="identitas" class="col-sm-3 col-form-label"><small>No Identitas</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="identitas" placeholder="masukan no identitas">
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label"><small>Nama Lengkap</small></label>
                        <div class="col-sm-3">
                            <select class="form-control form-control-sm" id="nama1">
                                <option>Bpk</option>
                                <option>Ibu</option>
                                <option>Anak</option>
                                <!-- <option>4</option>
                                <option>5</option> -->
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-sm" id="nama" placeholder="nama lengkap">
                        </div>    
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group row">
                        <label for="kelamin" class="col-sm-3 col-form-label"><small>Jenis Kelamin</small></label>
                        <div class="col-sm-9">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="laki" name="jeniskelamin" class="custom-control-input" value="laki-laki">
                                <label class="custom-control-label" for="laki">Laki - laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="perempuan" name="jeniskelamin" class="custom-control-input" value="perempuan">
                                <label class="custom-control-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="goldarah" class="col-sm-3 col-form-label"><small>Gol Darah</small></label>
                        <div class="col-sm-3">
                            <select class="form-control form-control-sm" id="goldarah">
                                <option>A</option>
                                <option>B</option>
                                <option>AB</option>
                                <option>O</option>
                                <!-- <option>5</option> -->
                            </select>
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="tempatlahir" class="col-sm-3 col-form-label"><small>Tmpt Lahir</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="tempatlahir" placeholder="masukan tempat lahir">
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="tnggllahir" class="col-sm-3 col-form-label"><small>Tnggl Lahir</small></label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control form-control-sm" id="tnggllahir">
                        </div>    
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-3 col-form-label"><small>No. HP</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="nohp" placeholder="masukan nomor handphone">
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label"><small>Alamat</small></label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="alamat" rows="3"></textarea>
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label"><small>Pasien Jenis</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="jenis" placeholder="jenis pasien">
                        </div>    
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </div>
            </div>
        </div>
    </form>
</div>