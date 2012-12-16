/* Your JS goes here */
$(document).ready(function() {
	// Bootstrap
	$('.dropdown-toggle').dropdown();
	$('a.tooltip-top').tooltip({
		'placement' : 'top'
	});
	$('a.tooltip-right').tooltip({
		'placement' : 'right'
	});
	$('a.tooltip-bottom').tooltip({
		'placement' : 'bottom'
	});
	$('a.tooltip-left').tooltip({
		'placement' : 'left'
	});
	$('#globalmodal').modal('hide')
	// Fancybox
	$("#fancybox-trigger").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic'
	})
	
	$('a[rel="external"]').attr('target', '_blank');
});