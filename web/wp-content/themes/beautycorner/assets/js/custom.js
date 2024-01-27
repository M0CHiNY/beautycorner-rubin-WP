document.addEventListener("DOMContentLoaded", () => {
  "use strict";

  const body = document.body;
  const splashScreen = document.querySelector(".wpv-splash-screen");
  const progressBar = splashScreen.querySelector(".wpv-splash-screen-progress");
  console.log(hideSplashScreen);

  const hideSplashScreen = () => {
    body.dispatchEvent(new Event("wpv-hide-splash-screen"));
  };

  body.addEventListener("wpv-content-resized", () => {
    let timeoutId = setTimeout(hideSplashScreen, 1000);
    let totalImages = -1;
    let loadedImages = 0;

    const updateProgressBar = (e) => {
      if (totalImages < 0) {
        totalImages = e.images.length;
      }

      progressBar.style.width = `${(++loadedImages / totalImages) * 100}%`;

      clearTimeout(timeoutId);
      timeoutId = setTimeout(hideSplashScreen, 500);
    };

    body.imagesLoaded().progress(updateProgressBar).always(hideSplashScreen);
  });

  body.addEventListener("wpv-hide-splash-screen", () => {
    progressBar.style.width = "100%";

    setTimeout(() => {
      splashScreen.style.opacity = "0";
      setTimeout(() => {
        splashScreen.style.display = "none";
      }, 500);
    }, 250);
  });

  body.addEventListener("wpv-preview-splash-screen", () => {
    progressBar.style.transitionDuration = "0";
    progressBar.style.width = "0%";

    progressBar.style.transitionDuration = "1s";
    splashScreen.style.display = "";

    setTimeout(() => {
      requestAnimationFrame(() => {
        progressBar.style.width = "100%";
        setTimeout(() => {
          splashScreen.style.opacity = "0";
          setTimeout(() => {
            splashScreen.style.display = "none";
          }, 500);
        }, 1000);
      });
    }, 100);
  });


});


