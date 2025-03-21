<?php
include_once "./Conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input
    $title = mysqli_real_escape_string($conn, $_POST['experience_name']);
    $company = mysqli_real_escape_string($conn, $_POST['company_name']);
    $start_date = mysqli_real_escape_string($conn, $_POST['start_date'] . '-01');
    $end_date = mysqli_real_escape_string($conn, $_POST['end_date'] . '-01');
    $content = mysqli_real_escape_string($conn, $_POST['experience_content']);

    // Check if any field is empty
    if (empty($title) || empty($company) || empty($start_date) || empty($end_date) || empty($content)) {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
        exit;
    }

    // Insert into database
    $sql = "INSERT INTO experience (name, company, start_date, end_date, content) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $title, $company, $start_date, $end_date, $content);
        $execute = mysqli_stmt_execute($stmt);

        if ($execute) {
            echo json_encode(["success" => true, "message" => "Experience added successfully."]);
        } else {
            echo json_encode(["success" => false, "message" => "Execution failed: " . mysqli_stmt_error($stmt)]);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to prepare statement: " . mysqli_error($conn)]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
}

mysqli_close($conn);
?>