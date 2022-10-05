document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementsByClassName('item');
});

function replaceQueryParam(param, newval, search) {
    var regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
    var query = search.replace(regex, "$1").replace(/&$/, '');

    return (query.length > 2 ? query + "&" : "?") + (newval ? param + "=" + newval : '');
}
function setItem(x,y) {
    let url = window.location.origin + '?x='+x+'&y='+y;
    window.location.replace(url);
}