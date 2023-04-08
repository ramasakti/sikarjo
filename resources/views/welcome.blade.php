
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="template/css/templatemo-style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/css/uikit.min.css" />
</head>
<body> 
	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="template/img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="template/img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title uk-text-success">Sikarjo</h1>
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="/" class="tm-nav-link active" uk-icon="icon: bag; ratio: 1.5"></a></li>
								<li class="tm-nav-li"><a href="/transaksi/cart" class="tm-nav-link" uk-icon="icon: cart; ratio: 1.5"></a><span class="uk-badge"></span></li>
								<li class="tm-nav-li"><a href="/transaksi/pending" class="tm-nav-link" uk-icon="icon: warning; ratio: 1.5"></a></li>
								<li class="tm-nav-li"><a href="/login" class="tm-nav-link">Login</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to Sikarjo</h2>
				<p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Makanan</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Minuman</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">ATK</a></li>
					</ul>
				</nav>
			</div>

			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-makanan" class="tm-gallery-page">
					<div class="uk-child-width-1-3@m" uk-grid>
						@foreach ($dataMakanan as $makanan)
							<div>
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img class="uk-height-medium" src="{{ $makanan->foto }}" width="1200" height="1200" alt="">
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title uk-margin-small">{{ $makanan->nama_barang }}</h3>
										<p class="uk-text-success uk-margin-small">Rp. {{ number_format($makanan->harga,0,'','.') }}</p>
										<div id="cart-contain-{{ $makanan->id_barang }}">
											<a id="cart-makan-{{ $makanan->id_barang }}" onclick="saveToCart({ id_barang:{{ $makanan->id_barang }}, nama_barang: '{{ $makanan->nama_barang }}', foto: '{{ $makanan->foto }}', harga: {{ $makanan->harga }}, jumlah: 1 })" uk-icon="cart"></a>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div> <!-- gallery page 1 -->
				
				<!-- gallery page 2 -->
				<div id="tm-gallery-page-minuman" class="tm-gallery-page hidden">
					@foreach ($dataMinuman as $minuman)
						<div>
							<div class="uk-card uk-card-default">
								<div class="uk-card-media-top">
									<img class="uk-height-medium" src="{{ $minuman->foto }}" width="1200" height="1200" alt="">
								</div>
								<div class="uk-card-body">
									<h3 class="uk-card-title uk-margin-small">{{ $minuman->nama_barang }}</h3>
									<p class="uk-text-success uk-margin-small">Rp. {{ number_format($minuman->harga,0,'','.') }}</p>
									<div id="cart-contain-{{ $minuman->id_barang }}">
										<a id="cart-makan-{{ $minuman->id_barang }}" onclick="saveToCart({ id_barang:{{ $minuman->id_barang }}, nama_barang: '{{ $minuman->nama_barang }}', foto: '{{ $minuman->foto }}', harga: {{ $minuman->harga }}, jumlah: 1 })" uk-icon="cart"></a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div> <!-- gallery page 2 -->
				
				<!-- gallery page 3 -->
				<div id="tm-gallery-page-atk" class="tm-gallery-page hidden">
					@foreach ($dataAtk as $atk)
						<div>
							<div class="uk-card uk-card-default">
								<div class="uk-card-media-top">
									<img class="uk-height-medium" src="{{ $atk->foto }}" width="1200" height="1200" alt="">
								</div>
								<div class="uk-card-body">
									<h3 class="uk-card-title uk-margin-small">{{ $atk->nama_barang }}</h3>
									<p class="uk-text-success uk-margin-small">Rp. {{ number_format($atk->harga,0,'','.') }}</p>
									<div id="cart-contain-{{ $atk->id_barang }}">
										<a id="cart-makan-{{ $atk->id_barang }}" onclick="saveToCart({ id_barang:{{ $atk->id_barang }}, nama_barang: '{{ $atk->nama_barang }}', foto: '{{ $atk->foto }}', harga: {{ $atk->harga }}, jumlah: 1 })" uk-icon="cart"></a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div> <!-- gallery page 3 -->
			</div>
		</main>

		<a href="#" uk-totop uk-scroll class="uk-text-success uk-icon-button uk-margin-left"></a>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 Simple House | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
		</footer>
	</div>
	<script src="template/js/jquery.min.js"></script>
	<script src="template/js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.13/dist/js/uikit-icons.min.js"></script>
	<script>
		if (localStorage.getItem('cart') == null) localStorage.setItem('cart', '[]')

		const itemToCart = []
		const cart = JSON.parse(localStorage.getItem('cart'))
		const badge = document.querySelector('#uk-badge')
		const spinner = `<div id="spinner" uk-spinner="ratio: 0.6"></div>`
		const ceklis = `<span uk-icon="check" class="uk-text-primary"></span>`

		const saveToCart = (barang) => {
			const filter = cart.find((cartFiltered) => cartFiltered.id_barang == barang.id_barang)
			const cartIcon = document.getElementById('cart-makan-' + barang.id_barang)
			cartIcon.innerHTML = spinner

			setInterval(() => {
				document.getElementById('spinner').remove()
				cartIcon.remove()
				document.getElementById('cart-contain-' + barang.id_barang).innerHTML = ceklis
			}, 1000);

			if (filter == undefined) {
				itemToCart.push(barang)
				localStorage.setItem('cart', JSON.stringify(itemToCart))
				localStorage.setItem('total', )
			}else{
				console.log(filter)
			}
		}
	</script>
</body>
</html>