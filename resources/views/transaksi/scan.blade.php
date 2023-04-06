<x-adminlte title="{{ $title }}" navactive="{{ $navactive }}">

    <div class="uk-position-center">
        <div class="uk-postion-center" style="width: 500px" id="reader"></div>
        <h2 class="uk-margin-small">
            <div id="txt"></div>
        </h2>

        <form id="transaksiEngine" action="/transaksi/engine" method="POST">
            @csrf
            <input type="text" class="input" name="pembeli" style="outline: 0ch" id="pembeli" autofocus autocomplete="off" required>
            <input id="submitButton" class="button" type="submit" hidden>
        </form>
    </div>
    @if (session()->has('success'))
        <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @if (session()->has('fail'))
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{{ session('fail') }}</p>
        </div>
    @endif

    <script>
        function onScanSuccess(decodedText) {
            //Handle on success condition with the decoded text or result.
            const inputan = document.getElementById('pembeli')
            inputan.setAttribute('value', decodedText)
            const form = document.getElementById('transaksiEngine')
            form.submit()
            form.remove()
        }

        let html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 120, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
</x-adminlte>