function showItems() {
    document.getElementById("dropdown").classList.toggle("show");
}
userId = undefined;

function getIdbyClick(clicked_btn) {
    userId = clicked_btn.id;
}
window.onload = function () {
    const filter = document.getElementById('filter');
    if (filter) {
        filter.addEventListener('change', function () {
            load('admins_views/usersList.php', 'filter=' + filter.value, function (http) {
                document.getElementById('userTable').innerHTML = http.responseText;
            });
        });
    }
    const del = document.getElementById('delAcc');
    if (del) {
        del.addEventListener('click', function () {
            load('../controllers/Delete.php', 'id=' + parseInt(userId), function (http) {
                document.getElementById(userId).parentElement.parentElement.parentElement.parentElement.remove();
            });
        });
    }
    const s_fin = document.getElementById('student-fin');
    if (s_fin) {
        s_fin.addEventListener("click", function (evt) {
            var id = evt.target.id;
            load('../controllers/getStudentPayHistory.php', 'id=' + parseInt(id), function (http) {
                document.getElementById('paytable').innerHTML = http.responseText;
            })
        });
    }
    const n_post = document.getElementById('n-post');
    if (n_post) {
        n_post.addEventListener("click", function () {
            let title = document.getElementById('n-title').value;
            let content = document.getElementById('n-notice').value;
            load('../controllers/postNotice.php', 'title=' + title + '&notice=' + content, function (http) {
                document.getElementById('n-title').value = '';
                document.getElementById('n-notice').value = '';
                document.getElementById('notices').innerHTML = http.responseText;
            })
        });
    }
    const delNotice = document.getElementById('notices');
    if (delNotice) {
        delNotice.addEventListener('click', function () {
            if (confirm("Are you sure you want to delete this notice?")) {
                load('../controllers/deleteNotice.php', 'notice_id=' + parseInt(userId), function (http) {
                    document.getElementById(userId).remove();
                });
            }
        });
    }
    const s_res = document.getElementById('student-res');
    if (s_res) {
        s_res.addEventListener("click", function (evt) {
            var id = evt.target.id;
            load('../controllers/getStudentcourseResult.php', 'id=' + parseInt(id), function (http) {
                document.getElementById('resTable').innerHTML = http.responseText;
            })
        });
    }
};
document.getElementById("smallScreen").innerHTML = ("<h1><strong> SCREEN IS TOO SMALL <br> MOBILE VERSION IS NOT SUPPORTED </strong><h1>");