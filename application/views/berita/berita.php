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
                    <textarea cols="80" name="isi_berita" id="editor1" name="editor1" rows="10" data-sample-short></textarea>
                </div>


                <div class="form-group col-md-6" style="margin-top: 30px;">
                    <label for="nama">Tag Berita</label>
                    <input type="text" name="tag" class="form-control" required placeholder="Tag Berita...">
                </div>

                <div class="form-group col-md" style="padding-bottom:10px;">
                    <label for="exampleFormControlFile1">Thumbnail Berita</label>
                    <input type="file" class="form-control-file" name="gambar" id="gambar" required size="30">

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
<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    CKEDITOR.addCss('.cke_editable { font-size: 15px; padding: 2em; }');

    CKEDITOR.replace('editor1', {
        toolbar: [{
                name: 'document',
                items: ['Print']
            },
            {
                name: 'clipboard',
                items: ['Undo', 'Redo']
            },
            {
                name: 'styles',
                items: ['Format', 'Font', 'FontSize']
            },
            {
                name: 'colors',
                items: ['TextColor', 'BGColor']
            },
            {
                name: 'align',
                items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
            },
            '/',
            {
                name: 'basicstyles',
                items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting']
            },
            {
                name: 'links',
                items: ['Link', 'Unlink']
            },
            {
                name: 'paragraph',
                items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
            },
            {
                name: 'insert',
                items: ['Image', 'Table']
            },
            {
                name: 'tools',
                items: ['Maximize']
            },
            {
                name: 'editing',
                items: ['Scayt']
            }
        ],

        extraAllowedContent: 'h3{clear};h2{line-height};h2 h3{margin-left,margin-top}',

        // Adding drag and drop image upload.
        extraPlugins: 'print,format,font,colorbutton,justify,uploadimage',
        uploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',



        height: 560,

        removeDialogTabs: 'image:advanced;link:advanced'
    });
    var editor = CKEDITOR.replace('ckfinder');
    CKFinder.setupCKEditor(editor);
</script>