//AJAX - POST FUNCTION
function load(url, data, callback) {
    let http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            callback(http);
        }
    }
}