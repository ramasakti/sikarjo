<div id="add-barang" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <h5 class="uk-margin-small">Tambah Barang</h5>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <form action="/barang/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="uk-margin">
                <input name="nama_barang" class="uk-input" type="text" placeholder="Nama Barang" aria-label="Nama Barang">
            </div>
            <div class="input-group mb-3">
                <input name="foto" type="file" class="form-control" id="uploader" accept="image/*">
            </div>
            <div class="uk-margin">
                <select name="jenis" class="uk-select" aria-label="Select">
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                    <option value="atk">ATK</option>
                </select>
            </div>
            <div class="uk-margin">
                <input name="harga" class="uk-input" type="number" placeholder="Harga Barang" aria-label="Harga Barang">
            </div>

            <button class="uk-button uk-button-primary uk-button-small">TAMBAHKAN</button>
        </form>
    </div>
</div>