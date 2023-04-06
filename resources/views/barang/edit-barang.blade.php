<div id="edit-barang-{{ $barang->id_barang }}" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <h5 class="uk-margin-small">Edit Barang</h5>
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <form action="/barang/update" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_barang" value="{{ $barang->id_barang }}">
            <div class="uk-margin">
                <input name="nama_barang" class="uk-input" type="text" value="{{ $barang->nama_barang }}" aria-label="{{ $barang->nama_barang }}" required>
            </div>
            <div class="input-group mb-3">
                <label for="foto" class="uk-form-label">Foto Barang</label>
                <input name="foto" type="file" class="uk-input uk-margin-small-top" id="foto-{{ $barang->foto }}" accept="image/*" onchange="previewImage()">
            </div>  
            <div class="uk-margin">
                <select name="jenis" class="uk-select" aria-label="Select" required>
                    <option @selected($barang->jenis == 'makanan') value="makanan">Makanan</option>
                    <option @selected($barang->jenis == 'minuman')  value="minuman">Minuman</option>
                    <option @selected($barang->jenis == 'atk') value="atk">ATK</option>
                </select>
            </div>
            <div class="uk-margin">
                <input name="harga" class="uk-input" type="number" value="{{ $barang->harga }}" aria-label="{{ $barang->harga }}" required>
            </div>
            <div class="uk-margin">
                <input name="stok" class="uk-input" type="number" value="{{ $barang->stok }}" aria-label="{{ $barang->harga }}" required>
            </div>

            <button class="uk-button uk-button-primary uk-button-small">SIMPAN</button>
        </form>
    </div>
</div>
