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
    let elems = document.querySelectorAll('.dropdown-trigger');
    let instances = M.Dropdown.init(elems);
});

document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('.collapsible');
    let instances = M.Collapsible.init(elems);
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


////////////////////////////////////////////////////////////////

if (document.getElementById('fakeSubmit')) {
    document.getElementById('fakeSubmit').addEventListener('click', function (event) {
        M.toast({html: '<div class="row">' +
            '<h4 class="red-text col s12 center-align text-30">HOP, à la poubelle !</h4> ' +
            '<div class="col s12 center-align"><i class="large material-icons red-text">delete</i></div> ' +
            '</div>'})
        document.getElementById('name').value = ""
        document.getElementById('textarea').value = ""
    })
}

