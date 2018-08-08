function showToast(text) {
    let el = $('div#snackbar');
    el.html(text);

    el.addClass('show');
    setTimeout(function(){ el.removeClass('show'); }, 3000);
}
