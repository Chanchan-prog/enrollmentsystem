<?php 
session_start();
if (isset($_GET['page']) && $_GET['page'] === 'logout') {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
$pageTitle = "Dashboard - NiceAdmin";
  include "includes/header.php"; 
  include "includes/navbar.php"; 
  include "includes/sidebar.php"; 
?>

<main id="main" class="main">
<?php
$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case 'student_form':
        include __DIR__ . '../module/register_student.php';
        break;
    case 'display_student_list':
        include __DIR__ . '../module/enrollment_form.php';
        break;
    case 'logout':   // ✅ Added logout
        session_unset();    // remove all session variables
        session_destroy();  // destroy session
        header("Location: login.php"); // redirect to login page
        exit();
    case 'dashboard':
    default:
        include __DIR__ . '../module/dashboard.php';
        break;
}
?>
</main>

<?php include "includes/footer.php"; ?>
