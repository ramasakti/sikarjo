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
    @if (session()->has('success'))    
        <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{{ session('success') }}</p>
        </div>
    @endif
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
                        <a href="#edit-barang-{{ $barang->id_barang }}" uk-toggle uk-icon="settings"></a>
                        @include('barang.edit-barang')
                        <a href="#delete-barang-{{ $barang->id_barang }}" uk-toggle uk-icon="trash"></a>
                        @include('barang.delete-barang')
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-adminlte>