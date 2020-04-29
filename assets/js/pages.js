// Materialize
document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.sidenav')
    let instances = M.Sidenav.init(elems)
});

document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.materialboxed');
    let instances = M.Materialbox.init(elems);
});

document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.carousel');
    let instances = M.Carousel.init(elems, {
        indicators: true,
        onCycleTo: function () {
            let elemsBox = document.querySelectorAll('.materialboxed');
            let instancesBox = M.Materialbox.init(elemsBox).close();
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.fixed-action-btn');
    let instances = M.FloatingActionButton.init(elems, {
        hoverEnabled: false
    });
});

