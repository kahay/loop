var lastScrollPosition = document.body.scrollTop,
    sectionNo = 0;

function doScroll(scrollPosition, step, first) {
    var height = window.innerHeight,
        min = height * sectionNo,
        max = height * (sectionNo + 1);

    scrollPosition += step;

    if (min < scrollPosition && scrollPosition < max) {
        // here should be some animation control
        document.body.scrollTop = scrollPosition;
        // Call next animation frame
        window.requestAnimationFrame(doScroll.bind(null, scrollPosition, step));
    } else {
        // It fires, when scroll is done
        lastScrollPosition = scrollPosition;
        document.addEventListener("scroll", scrollListener);
    }
}
function scrollListener(e) {
    var scrollPosition = document.body.scrollTop,
        step;

    // Stop scroll listening
    document.removeEventListener("scroll", scrollListener);

    // Get direction
    step = scrollPosition >= lastScrollPosition ? 5 : -5;

    // Go back to initial position
    document.body.scrollTop = lastScrollPosition;

    // Animate
    window.requestAnimationFrame(doScroll.bind(null, lastScrollPosition, step, true));
}
document.addEventListener("scroll", scrollListener);