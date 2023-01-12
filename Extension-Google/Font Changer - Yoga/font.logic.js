String.prototype.capitalize = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
}

var lastSelectedStandard = "default";


async function getGoogleFonts() {
	let response = await fetch("https://webfonts.googleapis.com/v1/webfonts?sort=SORT_UNDEFINED&key=AIzaSyB69SADMp8KnBcOkoYAiIqnStqXj058R3M");

	if (response.ok) {
	  let json = await response.json();
	  json['items'].forEach(function(item, i, arr) {
		  if (item['files']['regular']) {
			var font = new FontFace(item['family'], `url(${item['files']['regular']})`);
			document.fonts.add(font);

			fontOption = new Option(item['family'], item['files']['regular']);
			fontOption.setAttribute("style",`font-family:${item['family']}`);
			$(".fonts-list-standard").append(fontOption);
		  }
	  });

	  chrome.storage.sync.get(['standard'], function(result) {
		if (result['standard']) {
			standardFontData = JSON.parse(result['standard']);

			$(".font-preview-standard").css('font-family', `"${standardFontData.family}", Arial`)
			$('.fonts-list-standard option:contains("' + standardFontData.family + '")').prop('selected', 'selected');

			lastSelectedStandard = standardFontData.family;
		}
	})
	}
}
getGoogleFonts();

$(".family-reset").on('click', function(e) {
	$(".font-preview-standard").css('font-family', `Arial`);
	$(".fonts-list-standard option:first").prop("selected", true);
	chrome.storage.sync.set({standard: false});
	chrome.runtime.sendMessage({type: "removeFont", fontStyle:"standard", last:lastSelectedStandard});
	lastSelectedStandard = "default";
})

$('.fonts-list-standard').change(function(event) {
	if (event.target.value !== "default") {
		var font = new FontFace(event.target.selectedOptions[0].label, `url(${event.target.value})`);
		document.fonts.add(font);
		$(".font-preview-standard").css('font-family', `"${event.target.selectedOptions[0].label}", Arial`)
		chrome.runtime.sendMessage({type: "changeFont", last:lastSelectedStandard, fontStyle:"standard", family: event.target.selectedOptions[0].label, fontURL: event.target.value.replace('http', 'https')});
		chrome.storage.sync.set({standard: JSON.stringify({family: event.target.selectedOptions[0].label, url: event.target.value.replace('http', 'https')})});
		lastSelectedStandard = event.target.selectedOptions[0].label;
	} else {
		$(".font-preview-standard").css('font-family', `Arial`)
		chrome.storage.sync.set({standard: false});
		chrome.runtime.sendMessage({type: "removeFont", fontStyle:"standard", last:lastSelectedStandard});
		lastSelectedStandard = "default";
	}
});