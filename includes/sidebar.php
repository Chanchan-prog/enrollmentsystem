<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Dashboard -->
    <li class="nav-item">
  <a class="nav-link <?php echo ($_GET['page'] ?? '') === 'dashboard' ? 'active' : ''; ?>" href="index.php?page=dashboard">
    <i class="bi bi-grid"></i>
    <span>Dashboard</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="forms-nav" 
      class="nav-content collapse <?php echo in_array($_GET['page'] ?? '', ['student_form','display_student_list']) ? 'show' : ''; ?>" 
      data-bs-parent="#sidebar-nav">

    <li>
      <a href="index.php?page=student_form" 
         class="<?php echo ($_GET['page'] ?? '') === 'student_form' ? 'active' : ''; ?>">
        <i class="bi bi-circle"></i><span>Evaluation Form</span>
      </a>
    </li>

    <li>
      <a href="index.php?page=display_student_list" 
         class="<?php echo ($_GET['page'] ?? '') === 'display_student_list' ? 'active' : ''; ?>">
        <i class="bi bi-circle"></i><span>Evaluation List</span>
      </a>
    </li>
  </ul>
</li>


  </ul>
</aside><!-- End Sidebar-->


