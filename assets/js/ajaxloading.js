var default_content="";

$(document).ready(function(){

	checkURL();

	$('.ajaxlink').click(function (e){

		checkURL(this.hash);

	});

	default_content = $('#body-content').html();


	setInterval("checkURL()",250);

});

var lasturl="";

function checkURL(hash) {
	if(!hash) hash=window.location.hash;

	if(hash != lasturl)
	{
		lasturl=hash;

		if(hash=="")
		$('#body-content').html(default_content);

		else
		loadPage(hash);
	}
}


function loadPage(url) {
	url=url.replace('#','');

	$('.load-cont').addClass('show');

	$.ajax({
		type: "POST",
		url: "load_page.php",
		data: 'page='+url,
		dataType: "html",

		success: function(msg){
			if(parseInt(msg)!=0)
			{
				setTimeout(function(){
					$('.load-cont').removeClass('show');
					$('#body-content').html(msg);
				}, 1000);
			}
		}

	});

}
