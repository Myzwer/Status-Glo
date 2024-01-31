/*
* Glide JS controls
* This project uses Glide JS.
* https://glidejs.com/docs/options/
* Each time s slider is used it must be initialized and set up here.
*/

// Import from Node_modules (only one time)
import Glide from "@glidejs/glide";

// Wait for window to load before executing code
window.onload = function () {

  // Define options as an object
  const glideOptions = {
    type: "carousel",
    gap: 30,
    perView: 1,
    autoplay: 5000,
  };

  // Initialize Glide with both the selector and options
  new Glide(".glide", glideOptions).mount();
};