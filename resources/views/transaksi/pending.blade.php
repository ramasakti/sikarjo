<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Pending</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/css/uikit.min.css" />
</head>
<body>
    <div class="uk-container uk-container-xsmall">
        @if (count($trx) > 0)
            <div class="uk-card uk-card-primary uk-card-body uk-width-1-1@m uk-margin-top">
                <h3 class="uk-card-title">Transaksi Belum Terbayar</h3>
                <p class="uk-text-center">
                    {{ QrCode::size(200)->generate($trx[0]->id_transaksi) }}
                </p>
                <p>Scan QR Code di koperasi untuk melakukan pembayaran</p>
            </div>
        @else
        
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit-icons.min.js"></script>
</body>
</html>