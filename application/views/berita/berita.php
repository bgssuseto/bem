<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form Berita</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Buat Postingan Berita Sekarang</h6>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group col-md-6" style="margin-bottom: 30px;">
                    <label for="nama">Judul Berita</label>
                    <input type="text" name="judul_berita" class="form-control" required placeholder="Judul Berita...">

                </div>

                <div class="form-group col-md">
                    <label for="nama">Isi Berita</label>
                    <textarea name="berita" id="editor" cols="30" rows="90"></textarea>
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .then(editor => {
                                console.log(editor);
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                </div>


                <div class="form-group col-md-6" style="margin-top: 30px;">
                    <label for="nama">Tag Berita</label>
                    <input type="text" name="tag" class="form-control" required placeholder="Tag Berita...">

                </div>

                <div class="form-group col-md-6">
                    <button class="btn btn-primary">Posting</button>
                </div>
        </div>
        </form>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->