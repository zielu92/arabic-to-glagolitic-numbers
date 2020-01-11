function copy() {
    var copyText = document.getElementById("glagolitic");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    swal("Copied the text: " + copyText.value);
}