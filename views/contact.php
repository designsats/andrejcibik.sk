
<script type="text/javascript">
	$(function(){

		// Title change
			document.title = 'About & Contact' + ' ' + defaultTitle;

		// Link back Href
			$('.link-back-cont')
				.removeClass('hidden')
				.addClass('showing');

		// MAIN CTA +
			function mainCtaInit() {
				var mainCta = $('.main-cta');

				title = 'Let\'s create something awesome';
				text = 'hello@andrejcibik.sk';
				link = "mailto:hello@andrejcibik.sk";

				mainCta.find('.title').html(title);
				mainCta.find('.text').html(text);
				mainCta.attr('href', link);
			}
			mainCtaInit();
		// MAIN CTA -

	});
</script>

<div class="separator"></div>

<h1 class="centered">About me
	<span class="ghost-title">Who am I</span>
</h1>

<div class="boxed">
	<p class="about-text">
		Hey, Thanks for stopping by. My name’s Andrej Cibík and I’m a designer and front-end developer at <a href="http://www.lemonlion.sk/" class="subtle-link" target="_blank">LemonLion</a> - a digital agency from Púchov, Slovakia.
		I’m at war against default grey and I love clean, striking design.
		My goal is to be as good designer as I can, while not neglecting my front-end skills. 
		Do you have a killer project which needs a kick-start?
	</p>
</div>

<div class="separator"></div>

<div class="section">
	<div class="growImg awards-section" style="background-image: url(data/me03.jpg);">

		<div class="separator"></div>

		<div class="row ease-item ease-left">
			<div class="small-6 medium-4 large-3 large-offset-1">
				<h2>Awards and <br>mentions</h2>
				<br>
				<a href="http://cssdesignawards.com/sites/andrej-cibik-personal-portfolio/29846/" class="item" target="_blank"><strong>CSS Design Awards </strong> - nominee</a>
				<br>
				<a href="http://www.csswinner.com/details/personal-portfolio-andrejcibiksk/11160" class="item" target="_blank"><strong>CSS winner</strong> - star</a>
				<br>
				<a href="http://www.designnominees.com/sites/andrejcibiksk-personal-portfolio" class="item" target="_blank"><strong>Design nominees</strong> - site of the day</a>
				<br>
				<a href="http://cssfox.co/personal-portfolio---andrej-cibik" class="item" target="_blank"><strong>CSSfox</strong> - nominee</a>
				<br>
				<a href="http://www.cssawds.com/nominee/andrej-cibik/" class="item" target="_blank"><strong>CSS Awards</strong> - nominee</a>
				<br>
			</div>
		</div>

		<a href="http://cssdesignawards.com/sites/andrej-cibik-personal-portfolio/29846/" class="cssda" target="_blank"><img src="data/cssda.png" alt=""></a>

		<!--Cssfox nominee badge white left-->
			<a href="http://cssfox.co/personal-portfolio---andrej-cibik" class="cssfox" target="_blank"><svg id="cssfox-nominee-badge-official-colors-left" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="126.991 38.972 18.863 43.007"><g><path fill="#478AC9" d="M126.991,65.421l7.056-4.944l10.389,7.28c1.356,0.95-0.223,2.153-0.465,2.326c-0.011,0.007-0.019,0.015-0.03,0.022l-16.95,11.875V65.421z"/><g><path fill="#D32028" d="M144.436,67.757l-17.445-12.225v-16.56l17.511,12.27c0,0,1.351,0.966,1.351,2.685c0,1.719,0,13.171,0,13.171s0.141,1.774-1.881,2.985C144.213,69.91,145.792,68.708,144.436,67.757z"/><path opacity="0.8" fill="#D32028" d="M143.971,70.083c-0.019,0.014-0.033,0.023-0.033,0.023C143.951,70.099,143.959,70.09,143.971,70.083z"/></g><path fill="#F8D515" d="M134.026,60.492l0.021-0.015l10.389,7.28c1.356,0.95-0.223,2.153-0.465,2.326c-0.004,0.003-0.008,0.005-0.012,0.008l-1.716,1.202L134.026,60.492z"/><g><path fill="#FFFFFF" d="M131.075,68.459l-0.202,0.252c-0.149-0.161-0.363-0.26-0.57-0.26c-0.409,0-0.731,0.316-0.731,0.719c0,0.404,0.322,0.722,0.731,0.722c0.205,0,0.415-0.094,0.57-0.243l0.205,0.228c-0.208,0.205-0.503,0.336-0.793,0.336c-0.6,0-1.065-0.453-1.065-1.041c0-0.582,0.471-1.029,1.076-1.029C130.586,68.143,130.876,68.263,131.075,68.459z"/><path fill="#FFFFFF" d="M132.417,68.787l-0.123,0.249c-0.138-0.085-0.31-0.137-0.447-0.137c-0.132,0-0.228,0.044-0.228,0.155c0,0.287,0.828,0.132,0.825,0.696c0,0.319-0.284,0.462-0.597,0.462c-0.228,0-0.471-0.076-0.626-0.216l0.12-0.24c0.135,0.12,0.351,0.193,0.521,0.193c0.143,0,0.254-0.05,0.254-0.167c0-0.319-0.819-0.14-0.816-0.702c0-0.316,0.275-0.45,0.573-0.45C132.069,68.629,132.277,68.687,132.417,68.787z"/><path fill="#FFFFFF" d="M133.792,68.787l-0.123,0.249c-0.138-0.085-0.31-0.137-0.447-0.137c-0.132,0-0.228,0.044-0.228,0.155c0,0.287,0.828,0.132,0.825,0.696c0,0.319-0.284,0.462-0.597,0.462c-0.228,0-0.471-0.076-0.626-0.216l0.12-0.24c0.135,0.12,0.351,0.193,0.521,0.193c0.143,0,0.254-0.05,0.254-0.167c0-0.319-0.819-0.14-0.816-0.702c0-0.316,0.275-0.45,0.573-0.45C133.444,68.629,133.651,68.687,133.792,68.787z"/><path fill="#FFFFFF" d="M136.608,69.421c0,0.468-0.33,0.79-0.81,0.79c-0.482,0-0.813-0.322-0.813-0.79c0-0.471,0.33-0.79,0.813-0.79C136.278,68.632,136.608,68.95,136.608,69.421z M135.321,69.424c0,0.301,0.196,0.506,0.477,0.506c0.278,0,0.474-0.205,0.474-0.506c0-0.298-0.196-0.503-0.474-0.503C135.517,68.921,135.321,69.126,135.321,69.424z"/><path fill="#FFFFFF" d="M137.79,68.643h0.368l-0.5,0.758l0.535,0.798h-0.386l-0.371-0.57l-0.398,0.57h-0.374l0.55-0.798l-0.512-0.758h0.386l0.348,0.532L137.79,68.643z"/><path fill="#FFFFFF" d="M138.193,70.525h-3.638v-2.007c0-0.146,0.097-0.211,0.211-0.211c0.07,0,0.149,0.026,0.214,0.073l0.129-0.257c-0.099-0.073-0.225-0.108-0.351-0.108c-0.269,0-0.535,0.173-0.535,0.535v1.975h-0.404v0.252h0.404v0.403h0.333v-0.403h3.638V70.525z"/><path fill="#FFFFFF" stroke="#231F20" stroke-width="0.25" stroke-miterlimit="10" d="M133.804,69.705"/><path fill="#FFFFFF" d="M138.375,68.398c0.002,0.001,0.003,0.003,0.004,0.005l0.016,0.087c0.001,0.005,0.008,0.007,0.011,0.003l0.059-0.065c0.001-0.002,0.004-0.002,0.006-0.002l0.087,0.012c0.005,0.001,0.009-0.005,0.007-0.01l-0.044-0.076c-0.001-0.002-0.001-0.004,0-0.006l0.038-0.079c0.002-0.005-0.002-0.01-0.007-0.009l-0.086,0.018c-0.002,0-0.004,0-0.006-0.002l-0.064-0.061c-0.004-0.004-0.01-0.001-0.011,0.004l-0.01,0.087c0,0.002-0.002,0.004-0.003,0.005l-0.077,0.042c-0.005,0.003-0.005,0.01,0,0.012L138.375,68.398z"/></g><g><path fill="#FFFFFF" d="M130.815,54.941l-1.161-1.563v1.563h-0.367v-2.179h0.361l1.167,1.565v-1.565h0.361v2.179H130.815z"/><path fill="#FFFFFF" d="M133.297,54.113c0,0.498-0.352,0.841-0.862,0.841c-0.513,0-0.865-0.343-0.865-0.841c0-0.501,0.352-0.841,0.865-0.841C132.945,53.272,133.297,53.612,133.297,54.113z M131.927,54.116c0,0.321,0.208,0.539,0.507,0.539c0.296,0,0.504-0.218,0.504-0.539c0-0.317-0.208-0.535-0.504-0.535C132.136,53.581,131.927,53.798,131.927,54.116z"/><path fill="#FFFFFF" d="M136.434,53.911v1.03h-0.358V54.01c0-0.252-0.149-0.404-0.392-0.404c-0.283,0.009-0.455,0.227-0.455,0.517v0.818h-0.358V54.01c0-0.252-0.146-0.404-0.389-0.404c-0.286,0.009-0.46,0.227-0.46,0.517v0.818h-0.355v-1.656h0.355v0.321c0.115-0.234,0.327-0.334,0.601-0.334c0.296,0,0.498,0.146,0.576,0.398c0.106-0.276,0.327-0.398,0.629-0.398C136.207,53.272,136.434,53.515,136.434,53.911z"/><path fill="#FFFFFF" d="M137.292,52.812c0,0.124-0.09,0.214-0.208,0.214c-0.118,0-0.208-0.09-0.208-0.214c0-0.128,0.09-0.218,0.208-0.218C137.203,52.594,137.292,52.684,137.292,52.812z M136.907,54.941v-1.656h0.355v1.656H136.907z"/><path fill="#FFFFFF" d="M139.374,53.911v1.03h-0.358V54.01c0-0.249-0.149-0.401-0.398-0.401c-0.274,0.003-0.445,0.192-0.47,0.451v0.881h-0.358v-1.656h0.358v0.317c0.118-0.23,0.33-0.33,0.61-0.33C139.143,53.272,139.374,53.515,139.374,53.911z"/><path fill="#FFFFFF" d="M141.305,54.25h-1.251c0.056,0.256,0.252,0.414,0.514,0.414c0.18,0,0.345-0.068,0.467-0.192l0.19,0.202c-0.162,0.178-0.398,0.28-0.685,0.28c-0.51,0-0.847-0.34-0.847-0.838c0-0.501,0.346-0.84,0.837-0.844C141.112,53.272,141.349,53.652,141.305,54.25z M140.994,53.989c-0.013-0.268-0.19-0.43-0.461-0.43c-0.261,0-0.445,0.165-0.485,0.43H140.994z"/><path fill="#FFFFFF" d="M143.132,54.25h-1.251c0.056,0.256,0.252,0.414,0.513,0.414c0.181,0,0.346-0.068,0.467-0.192l0.19,0.202c-0.162,0.178-0.398,0.28-0.685,0.28c-0.51,0-0.847-0.34-0.847-0.838c0-0.501,0.346-0.84,0.837-0.844C142.939,53.272,143.176,53.652,143.132,54.25z M142.821,53.989c-0.013-0.268-0.19-0.43-0.461-0.43c-0.261,0-0.445,0.165-0.485,0.43H142.821z"/></g></g></svg></a>
		<!--Cssfox nominee badge white left END-->

		<a href="http://www.cssawds.com/nominee/andrej-cibik/" class="cssa" target="_blank"></a>

		<div class="growSide growSide-left"></div>
		<div class="growSide growSide-right"></div>
	</div>
</div>

<div class="separator small"></div>
<div class="separator"></div>

<h2 class="h1 centered">Contact
	<span class="ghost-title">Keep in touch</span>
</h2>

<div class="separator small"></div>

<div class="centered social-links-contact">
	<a href="https://www.facebook.com/AndrejCibikDesign/" class="button rippleHover icon-facebook" title="FB page"></a>
	<a href="https://www.behance.net/AndrejCibik" class="button rippleHover icon-behance" title="Behnace" target="_blank"></a>
	<a href="https://www.youtube.com/channel/UCwVEiFeuccoAzgwpAsSl7Tw" class="button rippleHover icon-youtube" title="Youtube" target="_blank"></a>
	<a href="https://dribbble.com/AndrejCibik" class="button rippleHover icon-dribbble" title="Dribbble" target="_blank"></a>
	<a href="mailto:hello@andrejcibik.sk" class="button rippleHover icon-mail" title="Email" ></a>
	<a href="https://www.linkedin.com/in/andrejcibik" class="button rippleHover icon-linkedin" title="LinkedIn" target="_blank"></a>

</div>

<div class="separator"></div>

<div class="author subtle-text">
	Designed & coded with passion by me. Open source on <strong><a href="https://github.com/andrejcibik/andrejcibik.sk" class="subtle-link" target="_blank">Github.</a></strong>
</div>

<div class="separator"></div>
