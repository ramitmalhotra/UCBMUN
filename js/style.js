$(document).ready(function() {
	function hoverOnImage() {
		var base = ($(this).attr('id')).slice(0,-5);
		$(this).css("opacity",".55");
		var title = "#"+base+"Title";
		$(title).css("display","block");
	}

	function hoverOffImage() {
		var base = ($(this).attr('id')).slice(0,-5);
		$(this).css("opacity","0");
		var title = "#"+base+"Title";
		$(title).css("display","none");

	}
	function hoverOnText() {
		$(this).css("display","block");
		var base = ($(this).attr('id')).slice(0,-5);
		var image = "#"+base+"Image";
		$(image).css("opacity",".55");
	}
	function hoverOffText() {
		$(this).css("display","none");
		var base = ($(this).attr('id')).slice(0,-5);
		var image = "#"+base+"Image";
		$(image).css("opacity","0");
	}
	$("#alcatrazImage").hover(hoverOnImage, hoverOffImage);
	$("#alcatrazTitle").hover(hoverOnText, hoverOffText);

	$("#angelIslandImage").hover(hoverOnImage, hoverOffImage);
	$("#angelIslandTitle").hover(hoverOnText, hoverOffText);

	$("#goldenGateParkImage").hover(hoverOnImage, hoverOffImage);
	$("#goldenGateParkTitle").hover(hoverOnText, hoverOffText);

	$("#exploratoriumImage").hover(hoverOnImage, hoverOffImage);
	$("#exploratoriumTitle").hover(hoverOnText, hoverOffText);

	$("#deyoungmuseumImage").hover(hoverOnImage, hoverOffImage);
	$("#deyoungmuseumTitle").hover(hoverOnText, hoverOffText);

	$("#fishermanswharfImage").hover(hoverOnImage, hoverOffImage);
	$("#fishermanswharfTitle").hover(hoverOnText, hoverOffText);

	$("#calacademyImage").hover(hoverOnImage, hoverOffImage);
	$("#calacademyTitle").hover(hoverOnText, hoverOffText);

	$("#goldengateImage").hover(hoverOnImage, hoverOffImage);
	$("#goldengateTitle").hover(hoverOnText, hoverOffText);

	$("#lombardstreetImage").hover(hoverOnImage, hoverOffImage);
	$("#lombardstreetTitle").hover(hoverOnText, hoverOffText);

	$("#cablecarsImage").hover(hoverOnImage, hoverOffImage);
	$("#cablecarsTitle").hover(hoverOnText, hoverOffText);

	$("#ghiradelliImage").hover(hoverOnImage, hoverOffImage);
	$("#ghiradelliTitle").hover(hoverOnText, hoverOffText);

	$("#coittowerImage").hover(hoverOnImage, hoverOffImage);
	$("#coittowerTitle").hover(hoverOnText, hoverOffText);

	$("#twinpeaksImage").hover(hoverOnImage, hoverOffImage);
	$("#twinpeaksTitle").hover(hoverOnText, hoverOffText);

	$("#presidioImage").hover(hoverOnImage, hoverOffImage);
	$("#presidioTitle").hover(hoverOnText, hoverOffText);

	$("#aquariumImage").hover(hoverOnImage, hoverOffImage);
	$("#aquariumTitle").hover(hoverOnText, hoverOffText);

	$("#ferryImage").hover(hoverOnImage, hoverOffImage);
	$("#ferryTitle").hover(hoverOnText, hoverOffText);

});
