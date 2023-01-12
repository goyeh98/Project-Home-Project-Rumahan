chrome.storage.sync.get(['disabled'], function(result) {
	if (!result['disabled']) {
        chrome.runtime.onMessage.addListener(
            function(request, sender, sendResponse) {
                if (request.type == "changeColor") {
                    $("div, label, p, button, textarea, img, ul, li, ol, tr, th, td, thead, tbody, span, article, section, main, dl, datalist, output, legend").each(function() {
                        $(this).css('color', request.color);
                    });
                } else if (request.type == "changeFont") {
                    var font = new FontFace(request.family, `url(${request.fontURL})`);
                    document.fonts.add(font);
                    if (request.fontStyle === "standard") {
                        if (!$("body").css("font-family").includes(request.family)) {
                            if (!$("body").css("font-family").includes(request.last)) {
                                $("body").css("font-family", request.family + "," + $("body").css("font-family"));
                            } else {
                                $("body").css("font-family", request.family + "," + $("body").css("font-family").replace(/^[^,]+, */, ''));
                            }
                        }
                        $("body *").each(function() {
                            {
                                if (!$(this).css('font-family').includes(request.family)) {
                                    if (!$(this).css('font-family').includes(request.last)) {
                                        $(this).css("font-family",  request.family + "," + $(this).css("font-family"));
                                    } else {
                                        $(this).css("font-family", request.family + "," + $(this).css("font-family").replace(/^[^,]+, */, ''));
                                    }
                                }
                            }
                        });
                    } 
                   
                } else if (request.type == "removeFont") {
                    if (request.fontStyle === "standard") {
                        if ($("body").css("font-family").includes(request.last)) {
                            $("body").css("font-family", $("body").css("font-family").replace(/^[^,]+, */, ''));
                        }
                        $("body *").each(function() {
                            {
                                if ($(this).css('font-family').includes(request.last)) {
                                    $(this).css("font-family", $(this).css("font-family").replace(/^[^,]+, */, ''));
                                }
                            }
                        });
                    }
                }
                sendResponse({});
            });
	}
});