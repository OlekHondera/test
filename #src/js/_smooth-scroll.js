// smooth-scroll v16.1.3
// https://www.npmjs.com/package/smooth-scroll
// If you want all of your animations to take exactly the same amount of time (the value you set for speed), set the speedAsDuration option to true.

// <a data-scroll href="#bazinga">Anchor Link</a>
// ...
// <div id="bazinga">Bazinga!</div>

// All animations will take exactly 500ms

let scroll = new SmoothScroll('a[href*="#bazinga"]', {
    speed: 500,
    speedAsDuration: true
});