<div class="row">
    <div class="row-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=view" class="btn btn-large btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=guru&s=save" method="post">
                    <div class="mb-3">
                        <input type="text" name="nip" class="form-control" placeholder="NIP" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama Guru" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pob" class="form-control" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="mb-3">
                        <input type="date" name="dob" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="foto" class="form-control" placeholder="Nama Foto" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="subjek_id" class="form-control" placeholder="ID Subjects" required>
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
