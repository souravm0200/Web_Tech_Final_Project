<?php
require_once('../model/noticeModel.php');
require_once('../model/usersModel.php');
$notices = getAllNotices();
foreach (array_reverse($notices) as $notice) {
    $author = userinfobyId($notice["id"]);
    echo '
            <!-- notice card -->
            <div class="notice-board" id="' . $notice['notice_id'] . '">
                <div class="n-header">
                    <h1>' . $notice["title"] . '</h1>
                    <h4>' . $notice["date"] . '</h4>
                </div>
                <p>' . $notice["notice"] . '</p>
                <div class="n-footer">
                    <div class="author">
                        <h4>Posted By: </h4>
                        <p>' . $author["f_name"] . ' ' . $author["l_name"] . '</p>
                    </div>
                    <div class="n-action">
                        <a href="#">
                            <!---<button id="n-edit">
                                Edit
                            </button> ---!>
                        </a>
                        &ensp;&ensp;
                        <div class="n-del"><a href="#">
                            <button onClick="getIdbyClick(this)" id="' . $notice['notice_id'] . '">
                                Delete
                            </button>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- card end -->
            ';
}
