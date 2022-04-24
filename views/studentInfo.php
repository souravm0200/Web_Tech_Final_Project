<?php
if (isset($_GET['exam'])) {
    include_once('student_views/exam.php');
}
if (isset($_GET['meeting'])) {
    include_once('student_views/meeting.php');
}
if (isset($_GET['payment'])) {
    include_once('student_views/payment.php');
}
if (isset($_GET['Mail'])) {
    include_once('student_views/Mail.php');
}
if (isset($_GET['Course_Teacher_List'])) {
    include_once('student_views/Course_Teacher_List.php');
}
if (isset($_GET['FinancialStatement'])) {
    include_once('student_views/FinancialStatement.php');
}
