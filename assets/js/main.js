$(document).ready(function() {

// RESPONSIVE +
	if (typeof $.responsive == 'function') {
		$.responsive({
						width: [400, 640, 980, 1280],
						prefix: 'width',
						viewport: 'width=device-width',
			afterResize: function(opt) {
			}
			});
		};
// RESPONSIVE -

});
