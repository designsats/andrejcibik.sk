
<script type="text/javascript">
	$(function(){

		// Title change
			document.title = 'Crypto addresses' + ' ' + defaultTitle;

		// Link back Href
			$('.link-back-cont')
				.removeClass('showing')
				.addClass('hidden');

		// MAIN CTA +
			function mainCtaInit() {
				var mainCta = $('.main-cta');

				title = 'Back to start';
				text = 'Home';
				link = "index";

				mainCta.find('.title').html(title);
				mainCta.find('.text').html(text);
				mainCta.attr('href', link);
			}
			mainCtaInit();
		// MAIN CTA -
	});
</script>

<center>

	<br><br><br>
	<h1 class="h2">Im accepting the real money</h1>
	<br><br><br>

	<div class="row">

		<div class="small-6 medium-6 large-3">
			<h3>Bitcoin</h3>
			<img src="data/btc.PNG" alt="BTC">
			<br><br>
			1KCmWmXsPAjqv72JkRzHsxURTsCpcPUxkE
			<br><br>
			<span class="button rippleHover copy" data="1KCmWmXsPAjqv72JkRzHsxURTsCpcPUxkE">Copy</span>

			<br><br><br><br><br>
		</div>

		<div class="small-6 medium-6 large-3">
			<h3>Ethereum</h3>

			<img src="data/eth.PNG" alt="ETH">
			<br><br>
			0xF828Ddf7Ab60Bbee5862c22872d28C5e0218Ee89
			<br><br>
			<span class="button rippleHover copy" data="0xF828Ddf7Ab60Bbee5862c22872d28C5e0218Ee89">Copy</span>

			<br><br><br><br><br>
		</div>

	</div>

	<div class="row">

		<div class="small-6 medium-6 large-3">
			<h3>Litecoin</h3>

			<img src="data/ltc.PNG" alt="LTC">
			<br><br>
			LRtdwiqTMXV4vmJ2bnKF1YaFjz2Sz15wsR
			<br><br>
			<span class="button rippleHover copy" data="LRtdwiqTMXV4vmJ2bnKF1YaFjz2Sz15wsR">Copy</span>

			<br><br><br><br><br>
		</div>

		<div class="small-6 medium-6 large-3">
			<h3>Dash</h3>

			<img src="data/dash.PNG" alt="DASH">
			<br><br>
			XwyCGjStmXZjAhbWdkWp5HyR78S1JYEbXe
			<br><br>
			<span class="button rippleHover copy" data="XwyCGjStmXZjAhbWdkWp5HyR78S1JYEbXe">Copy</span>

			<br><br><br><br><br>
		</div>

	</div>


</center>

<br><br><br>
