<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/css/uikit.min.css" />
</head>
<body>
    <div class="uk-container uk-container-xsmall">
        <h3 class="uk-margin-top">Keranjang</h3>
        <hr>

        <div class="uk-align-center">
            <div id="content" class="uk-child-width-1-3@m" uk-grid>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit-icons.min.js"></script>
    <script>
        const data = JSON.parse(localStorage.getItem('cart'))
                        
        const fetchData = (item) => {
            return `
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <div class="uk-inline">
                                <img class="uk-height-medium" src="/storage/foto/${item.foto}" width="1200" height="1200" alt="">
                                <div class="uk-overlay uk-light uk-position-top-right uk-padding-small">
                                    <a href="" uk-icon="icon: trash"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title uk-margin-small">${item.nama_barang}</h3>
                            <p class="uk-text-success uk-margin-small">Rp. ${item.harga}</p>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <a class="uk-form-icon uk-form-icon" href="#" uk-icon="icon: minus" onclick="jumlahPesanan('${item.id_barang}', 'min')"></a>
                                    <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: plus" onclick="jumlahPesanan('${item.id_barang}', 'plus')"></a>
                                    <input id="jumlahOrder-${item.id_barang}" class="uk-input uk-text-center" type="number" value="1" aria-label="Clickable icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`
        }

        document.getElementById('content').innerHTML = data.map(fetchData)

        const jumlahPesanan = (idBarang, act) => {
            const jumlahOrder = document.getElementById('jumlahOrder-'+idBarang)
            if (act == 'plus') {
                const nilaiBaru = parseInt(jumlahOrder.value) + 1
                jumlahOrder.setAttribute('value', nilaiBaru)
            }else{
                const nilaiBaru = parseInt(jumlahOrder.value) - 1
                jumlahOrder.setAttribute('value', nilaiBaru)
            }
        }
    </script>
</body>
</html>