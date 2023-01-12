chrome.storage.sync.get(["disabled"], function (result) {
  if (!result["disabled"]) {
    chrome.runtime.onMessage.addListener(function (
      request,
      sender,
      sendResponse
    ) {
      if (request.type == "changeColor") {
        $(
          "div, label, p, button, textarea, img, ul, li, ol, tr, th, td, thead, tbody, span, article, section, main, dl, datalist, output, legend"
        ).each(function () {
          $(this).css("color", request.color);
        });
      } else if (request.type == "changeFont") {
        var font = new FontFace(request.family, `url(${request.fontURL})`);
        document.fonts.add(font);
        if (request.fontStyle === "standard") {
          if (!$("body").css("font-family").includes(request.family)) {
            if (!$("body").css("font-family").includes(request.last)) {
              $("body").css(
                "font-family",
                request.family + "," + $("body").css("font-family")
              );
            } else {
              $("body").css(
                "font-family",
                request.family +
                  "," +
                  $("body")
                    .css("font-family")
                    .replace(/^[^,]+, */, "")
              );
            }
          }
          $("body *").each(function () {
            {
              if (!$(this).css("font-family").includes(request.family)) {
                if (!$(this).css("font-family").includes(request.last)) {
                  $(this).css(
                    "font-family",
                    request.family + "," + $(this).css("font-family")
                  );
                } else {
                  $(this).css(
                    "font-family",
                    request.family +
                      "," +
                      $(this)
                        .css("font-family")
                        .replace(/^[^,]+, */, "")
                  );
                }
              }
            }
          });
        }
      } else if (request.type == "removeFont") {
        if (request.fontStyle === "standard") {
          if ($("body").css("font-family").includes(request.last)) {
            $("body").css(
              "font-family",
              $("body")
                .css("font-family")
                .replace(/^[^,]+, */, "")
            );
          }
          $("body *").each(function () {
            {
              if ($(this).css("font-family").includes(request.last)) {
                $(this).css(
                  "font-family",
                  $(this)
                    .css("font-family")
                    .replace(/^[^,]+, */, "")
                );
              }
            }
          });
        }
      }
      //added by Zico
      else if (request.type == "restoreImage") {
        var images = document.querySelectorAll("img");
        for (const image of images) {
          image.src = image.getAttribute("someabstractname");
        }
        alert("All images are loaded");
      }

      //added by Sailesh
      else if (request.type == "reduceColor") {
        var imgs = document.querySelectorAll("img");
        for (img of imgs) {
          img.style.filter = img.style.filter =
            "contrast(80%) grayscale(80%) opacity(90%) saturate(18%)";
        }
      }

      //added by Zico (animation stopper)
      else if (request.type == "stopAnimation") {
        let elements = document.querySelectorAll("img, source, a");

        function isGif(url) {
          return /\.(gif|webp)/.test(url);
        }

        for (let item of elements) {
          if (isGif(item.src) == true) {
            item.removeAttribute("srcset");
            item.src =
              "https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/A_black_image.jpg/640px-A_black_image.jpg";
          }
        }
      }

      //added by Zico (edit text)
      else if (request.type == "editText") {
        if (!document.pictureInPictureEnabled) {
          alert({ title: "Edit Mode NOT supported" });
        } else {
          const html = document.documentElement;

          if (html.hasAttribute("__editMode__")) {
            alert("Text Editor turned off");
            html.removeAttribute("__editMode__");
            document.designMode = "off";
            chrome.runtime.sendMessage({ message: "leave" });
          } else {
            alert("Text Editor turned on");
            document.designMode = "on";
            html.setAttribute("__editMode__", true);
            chrome.runtime.sendMessage({ message: "enter" });
          }
        }
      }

      sendResponse({});
    });
  }
});
