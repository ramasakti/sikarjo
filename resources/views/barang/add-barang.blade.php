<div id="add-barang" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <h5 class="uk-margin-small">Tambah Barang</h5>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <form action="/barang/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="uk-margin">
                <input name="nama_barang" class="uk-input" type="text" placeholder="Nama Barang" aria-label="Nama Barang" required>
            </div>
            <div class="input-group mb-3">
                <label for="foto" class="uk-form-label">Foto Barang</label>
                <div class="uk-margin-remove">
                    <img class="foto-preview img-fluid uk-align-center uk-height-max-medium uk-margin-remove">
                </div>
                <input name="foto" type="file" class="uk-input uk-margin-small-top" id="foto" accept="image/*" onchange="previewImage()" required>
            </div>
            <div class="uk-margin">
                <select name="jenis" class="uk-select" aria-label="Select" required>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                    <option value="atk">ATK</option>
                </select>
            </div>
            <div class="uk-margin">
                <input name="stok" class="uk-input" type="number" placeholder="Stok Barang" aria-label="Stok Barang" required>
            </div>
            <div class="uk-margin">
                <input name="harga" class="uk-input" type="number" placeholder="Harga Barang" aria-label="Harga Barang" required>
            </div>

            <button class="uk-button uk-button-primary uk-button-small">TAMBAHKAN</button>
        </form>
    </div>
</div>