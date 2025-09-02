<div class="row">
<div class="col-md-12">
<div class="tile">
<div class="tile-body">
<div class="table-responsive">
<h3 class="tile-title">Students</h3>
<table class="table table-hover table-bordered" id="srmsTable">
<thead>
<tr>
  <th>Student ID</th>
  <th>First Name</th>
  <th>Middle Name</th>
  <th>Last Name</th>
  <th>Email</th>
  <th>Gender</th>
  <th>Class</th>
  <th>Status</th>
  <th>Action</th>
</tr>
</thead>
<tbody>

<?php
try {
    // Database connection
    $conn = new PDO("mysql:host=localhost;dbname=srms_makumbusho;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query students + class name
    $stmt = $conn->prepare("SELECT s.id, s.fname, s.mname, s.lname, s.email, s.gender, 
                                   s.status, c.name as class_name
                            FROM tbl_students s
                            JOIN tbl_classes c ON s.class = c.id
                            ORDER BY s.id ASC");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $row) {
        // Status badge
        $st = ($row['status'] == "1") 
            ? '<span class="badge bg-success">Active</span>' 
            : '<span class="badge bg-danger">Disabled</span>';
?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['fname']; ?></td>
  <td><?php echo $row['mname']; ?></td>
  <td><?php echo $row['lname']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['gender']; ?></td>
  <td><?php echo $row['class_name']; ?></td>
  <td><?php echo $st; ?></td>
  <td>
    <button onclick="set_student('<?php echo $row['id']; ?>', '<?php echo $row['gender']; ?>', '<?php echo $row['status']; ?>');" 
            data-bs-toggle="modal" 
            data-bs-target="#editModal" 
            class="btn btn-success btn-sm">
      Edit
    </button>
    <a onclick="del('admin/core/drop_student?id=<?php echo $row['id']; ?>', 'Delete Student?');" 
       href="javascript:void(0);" 
       class="btn btn-danger btn-sm">
      Delete
    </a>
  </td>
</tr>
<?php
    }

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />

<script>
  $(document).ready(function() {
      $('#srmsTable').DataTable();
  });
</script>
