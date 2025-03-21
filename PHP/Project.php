<?php
include_once "./Conn.php";

$response = ['success' => false, 'message' => ''];

try {
    // Validate required fields
    if (empty($_POST['project_name'])) {
        throw new Exception('Project name is required.');
    }

    // Sanitize inputs
    $projectName = mysqli_real_escape_string($conn, trim($_POST['project_name']));
    $projectLink = !empty($_POST['project_link']) 
        ? mysqli_real_escape_string($conn, trim($_POST['project_link']))
        : '#'; // Default placeholder value

    // Handle file upload
    if (!isset($_FILES['project_image']) || $_FILES['project_image']['error'] !== UPLOAD_ERR_OK) {
        throw new Exception('Please upload a project image.');
    }

    $file = $_FILES['project_image'];
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $fileType = mime_content_type($file['tmp_name']);

    if (!in_array($fileType, $allowedTypes)) {
        throw new Exception('Only JPG, PNG, and GIF images are allowed.');
    }

    // Generate unique filename
    $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $newFileName = uniqid('project_', true) . '.' . $fileExtension;
    $uploadPath = 'uploads/' . $newFileName;

    // Create uploads directory if not exists
    if (!is_dir('uploads')) {
        mkdir('uploads', 0755, true);
    }

    if (!move_uploaded_file($file['tmp_name'], $uploadPath)) {
        throw new Exception('Failed to save uploaded image.');
    }

    // Process technology stack
    $stack = [];
    if (!empty($_POST['stack']) && is_array($_POST['stack'])) {
        foreach ($_POST['stack'] as $technology) {
            $stack[] = mysqli_real_escape_string($conn, $technology);
        }
    }
    $stackList = implode(', ', $stack);

    // Database insertion
    $sql = "INSERT INTO projects (title, link, image, stack)
            VALUES ('$projectName', '$projectLink', '$uploadPath', '$stackList')";
    
    if (mysqli_query($conn, $sql)) {
        $response['success'] = true;
        $response['message'] = 'Project uploaded successfully!';
    } else {
        throw new Exception('Database error: ' . mysqli_error($conn));
    }
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

header('Content-Type: application/json');
echo json_encode($response);
?>