<?php include "db/db.php"; ?>

<div class="container mt-5 mb-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white text-center">
      <h4 class="mb-0">Student Registration Form</h4>
    </div>
    <div class="card-body p-4">
      <form action="function/save_student.php" method="POST">

        <!-- Student ID -->
        <div class="mb-3">
          <label for="studentId" class="form-label">Student ID</label>
          <input type="text" class="form-control" id="studentId" name="id" placeholder="e.g. RG040" required>
        </div>

        <!-- Name Fields -->
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="mname" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="mname" name="mname" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" required>
          </div>
        </div>

        <!-- Gender -->
        <div class="mb-3">
          <label class="form-label">Gender</label>
          <select class="form-select" name="gender" required>
            <option value="">Select gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Class -->
        <div class="mb-3">
          <label for="class" class="form-label">Class</label>
          <select class="form-select" name="class" required>
            <?php
              $query = $conn->query("SELECT id, name FROM tbl_classes");
              while($row = $query->fetch_assoc()) {
                  echo "<option value='".$row['id']."'>".$row['name']."</option>";
              }
            ?>
          </select>
        </div>

        <!-- Submit -->
        <div class="text-center mt-4">
          <button type="submit" class="btn btn-primary px-4">
            <i class="bi bi-check-circle"></i> Register Student
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
