document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var options = {
        edge: 'left',
        draggable: true,
    };
    var instances = M.Sidenav.init(elems, options);

    var optionScroll = {
        scrollOffset: 300,
    };
    var scrollSpy = document.querySelectorAll('.scrollspy');
    var scroll = M.ScrollSpy.init(scrollSpy, optionScroll);
});