function copyToClipboard(text, msg = "Besedilo kopirano v odložišče"){
    let $temp = $("<textarea>");
    $("body").append($temp);
    $temp.val(text).select();
    document.execCommand("copy");
    $temp.remove();

	showToast(msg);
}
