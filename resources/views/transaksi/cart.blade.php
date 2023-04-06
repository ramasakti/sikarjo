<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="/template/css/templatemo-style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/css/uikit.min.css" />
</head>
<body class="uk-background-default">

    <div class="uk-container uk-container-xsmall">
        <a class="uk-margin-top" href="/" uk-icon="icon: arrow-left; ratio: 1.3"></a>
        <h3 class="uk-margin-top">Keranjang</h3>
        <hr>

        <div class="uk-align-center">
            <form id="formCO" action="/transaksi/store" method="post">
                @csrf
                <input type="hidden" name="username" value="{{ session('username') }}">
                <div id="content" class="uk-child-width-1-3@m" uk-grid></div>
            </form>

            <a class="uk-button uk-button-primary uk-width-1-1 uk-margin" onclick="checkout()" href="#confirm-checkout" uk-toggle>Checkout</a>
            @include('transaksi.confirm')
        </div>
    </div>

    <script src="/template/js/jquery.min.js"></script>
	<script src="/template/js/parallax.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit-icons.min.js"></script>
    <script>
        const data = JSON.parse(localStorage.getItem('cart'))
                        
        const fetchData = (item) => {
            return `
                <div id="card-${item.id_barang}">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <div class="uk-inline">
                                <img class="img-fluid d-block" src="/storage/foto/${item.foto}" width="1200" height="1200" alt="">
                                <div class="uk-overlay uk-light uk-position-top-right uk-padding-small">
                                    <a onclick="removeItem('${item.id_barang}')" uk-icon="icon: trash" class="uk-icon-button uk-text-primary"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title uk-margin-small">${item.nama_barang}</h3>
                            <p class="uk-text-success uk-margin-small">Rp. ${item.harga}</p>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <div class="form" id="form-${item.id_barang}">
                                        <input min="1" name="item-${item.id_barang}" class="uk-input uk-text-center" type="number" value="1" aria-label="Clickable icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>`
        }

        document.getElementById('content').innerHTML = data.map(fetchData)

        const removeItem = (idBarang) => {
            const filter = data.findIndex((cart) => cart.id_barang == idBarang)
            data.splice(filter, 1)
            localStorage.setItem('cart', JSON.stringify(data))
            document.getElementById('card-' + idBarang).remove()
        }

        const checkout = () => {
            const total = document.querySelector('#total')
            
        }

        const submitForm = () => {
            document.getElementById('formCO').submit()
        }
    </script>
</body>
</html>