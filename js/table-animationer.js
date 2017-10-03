$('details summary').each(function(){
    $(this).nextAll().wrapAll('<div id="wrap"></div>');
});
$('details summary').click(function(e) {
    e.preventDefault();
    $(this).siblings('div#wrap').slideToggle(function(){
        $(this).parent('details').toggleClass('open');
    });
});
