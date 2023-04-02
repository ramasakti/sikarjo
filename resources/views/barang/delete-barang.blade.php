<div id="delete-barang-{{ $barang->id_barang }}" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <p class="uk-text-right">
            <form action="/barang/delete" method="post">
                @csrf
                <h5 class="uk-margin-small">Yakin Hapus {{ $barang->nama_barang }}?</h5>
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <input type="hidden" name="id_barang" value="{{ $barang->id_barang }}">
                <button class="uk-button uk-button-primary" type="submit">Ya</button>
            </form>
        </p>
    </div>
</div>