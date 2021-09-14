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

    //Imagnes de galeria 
    var imgs = document.querySelectorAll('.materialboxed');
    var optionsImgs = {
        inDuration: 250,
        
    };
    var instances = M.Materialbox.init(imgs, optionsImgs);
});