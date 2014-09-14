$(document).ready(function() {
	$(window).scroll(function() {
		var fromTop = $(window).scrollTop();
		var navTop = $(window).height() - $('#landing_nav').height();
		if (fromTop >= navTop) {
			$('#landing_nav').css({'position': 'fixed', 'bottom' : 'auto'});
		} else {
			$('#landing_nav').css({'position': 'absolute', 'bottom' : 0});
		}
	}); 

	$('.com_item_container').hover(function(){
		$(".modal", this).css({'top':'0'});

	}, function(){
	$(".modal", this).css({'top':'-45px'});
	
});
		$('.sec_item_container').hover(function(){
		$(".modal", this).css({'top':'0'});
	
	}, function(){
	$(".modal", this).css({'top':'-45px'});
	});


		$('.sec_item_container').click(function() {
				var id = this.id;
				$('#overlay').show();
				if (id == 'akash_item') {
					$('#akash_modal').show();
				} else if (id == 'rajit_item') {
					$('#rajit_modal').show();
				} else if (id == 'varsha_item') {
					$('#varsha_modal').show();
				} else if (id == 'samed_item') {
					$('#samed_modal').show();
				} else if (id == 'alizeh_item') {
					$('#alizeh_modal').show();
				} else if (id == 'rashi_item') {
					$('#rashi_modal').show();
				} else if (id == 'miriam_item') {
					$('#miriam_modal').show();
				//} else if (id == 'lynn_item') {
					//$('#lynn_modal').show();
				} else if (id == 'alice_item') {
					$('#alice_modal').show();
				} else if (id == 'sarah_item') {
					$('#sarah_modal').show();
				} else if (id == 'lana_item') {
					$('#lana_modal').show();
				} else if (id == 'beckett_item') {
					$('#beckett_modal').show();
				} else if (id == 'fei_item') {
					$('#fei_modal').show();
				} else if (id == 'luke_item') {
					$('#luke_modal').show();
				} else if (id == 'ramit_item') {
					$('#ramit_modal').show();
				} else if (id == 'timothy_item') {
					$('#timothy_modal').show();
				}
		});

		$('#conference_nav').click(function() {
			  event.stopPropagation();
			if ($('#conference_drop_container').is(':visible')) {
				$('#conference_drop_container').hide();
			} else {
				$('#conference_drop_container').show();
			}
		});


		$('body').click(function() {

				$('#conference_drop_container').hide();
		
		});
		
		$('.event_container').click(function() {
			if ($('.event_desc', this).is(':visible')) {
				$('.event_desc', this).hide();
			$('.view', this).addClass('fa-angle-down');
			$('.view', this).removeClass('fa-angle-up');
			} else {
				$('.event_desc', this).show();
				$('.view', this).addClass('fa-angle-up');
			$('.view', this).removeClass('fa-angle-down');
			}
		});

		$('#terms_container').click(function() {
			if ($('#terms_content').is(':visible')) {
				$('#terms_content').hide();
			$('#angle').addClass('fa-angle-down');
			$('#angle').removeClass('fa-angle-up');
			} else {
				$('#terms_content').show();
				$('#angle').addClass('fa-angle-up');
			$('#angle').removeClass('fa-angle-down');
			}
		});



		$('.close, #overlay').click(function() {
			$('.sec_desc').hide();
			$('#overlay').hide();

		});
		
		$('.sidebar_item').click(function() {
			var id = this.id;
			if(id == "setOne")
				window.location.href = "committees.php#setOne";	
			else if(id == "setTwo")
				window.location.href = "committees.php#setTwo";
			else
				window.location.href = "committees.php#setThree";
		});
		
		$('.com_item_container').click(function() {
			$('#overlay').show();
			var id = this.id;
			id = '#' + id;
			$(id).show();	
		});
});