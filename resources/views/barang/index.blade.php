<x-adminlte title="{{ $title }}" navactive="{{ $navactive }}">
    <div class="uk-margin-top">
        <a href="#add-barang" uk-toggle uk-icon="plus"></a>
        @include('barang.add-barang')
    </div>
    <div class="uk-margin-top">
        <form class="uk-search uk-search-default uk-width-1-1 uk-background-default">
            <span uk-search-icon></span>
            <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
    <div class="uk-child-width-1-3@m uk-margin-top" uk-grid>
        @foreach ($dataBarang as $barang)
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img class="uk-align-center" src="storage/foto/{{ $barang->foto }}" width="180" height="120">
                        <hr class="uk-margin-remove">
                    </div>
                    <div class="uk-card-body uk-padding-small">
                        <h3 class="uk-card-title">{{ $barang->nama_barang }}</h3>
                        <p class="uk-text-success">Rp. {{ $barang->harga }}</p>
                        <a href="" uk-icon="settings"></a>
                        <a href="" uk-icon="trash"></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-adminlte>