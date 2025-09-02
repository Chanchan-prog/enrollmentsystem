<?php
include "db.php";  // database connection

// ----------------------
// Function: Register Student
// ----------------------
function registerStudent($id, $fname, $mname, $lname, $gender, $email, $class) {
    global $conn;

    // Default values
    $password = password_hash("123456", PASSWORD_BCRYPT); // default password
    $level = 3;   // student level
    $status = 1;  // active
    $display_image = "DEFAULT";

    $stmt = $conn->prepare("INSERT INTO tbl_students 
        (id, fname, mname, lname, gender, email, class, password, level, display_image, status) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssisssi", 
        $id, $fname, $mname, $lname, $gender, $email, $class, 
        $password, $level, $display_image, $status);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// ----------------------
// Function: Display Students Table
// ----------------------
function displayStudents() {
    global $conn;

    $sql = "SELECT s.id, CONCAT(s.fname,' ',s.mname,' ',s.lname) AS fullname, 
                   s.gender, s.email, c.name AS class
            FROM tbl_students s
            JOIN tbl_classes c ON s.class = c.id
            ORDER BY s.id ASC";

    $result = $conn->query($sql);

    echo '<table class="table table-bordered table-striped">';
    echo '<thead><tr>
            <th>ID</th><th>Full Name</th><th>Gender</th><th>Email</th><th>Class</th>
          </tr></thead><tbody>';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['fullname']}</td>
                    <td>{$row['gender']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['class']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5' class='text-center'>No students found</td></tr>";
    }

    echo "</tbody></table>";
}
?>
