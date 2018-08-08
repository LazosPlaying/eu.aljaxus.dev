$(document).ready(function() {
    $('#contacts-discord').on('click', function( event ){
        event.preventDefault();
        copyToClipboard('LazosPlaying#9695', 'Discord account tag copied to clipboard');
    });
    $('#contacts-email').on('click', function( event ){
        event.preventDefault();
        copyToClipboard('aljaxus.dev@gmail.com', 'Email copied to clipboard');
    });
});
