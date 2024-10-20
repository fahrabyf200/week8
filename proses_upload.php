<?php
// Set the target directory for uploaded images
$targetDirectory = "uploads/";

// Check if the target directory exists, if not, create it
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Allowed image file extensions
$allowedExtensions = array("jpg", "jpeg", "png", "gif");

if (isset($_FILES['myfile']['name'][0])) {
    $totalFiles = count($_FILES['myfile']['name']);

    // Loop through all uploaded files
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['myfile']['name'][$i];
        $fileTmpName = $_FILES['myfile']['tmp_name'][$i];
        $fileSize = $_FILES['myfile']['size'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $targetFile = $targetDirectory . basename($fileName);

        // Validate the file extension (must be an image)
        if (in_array($fileType, $allowedExtensions)) {
            // Validate file size (e.g., limit to 5MB)
            if ($fileSize <= 5 * 1024 * 1024) {
                // Move the uploaded image to the target directory
                if (move_uploaded_file($fileTmpName, $targetFile)) {
                    echo "File $fileName successfully uploaded.<br>";
                } else {
                    echo "Failed to upload file $fileName.<br>";
                }
            } else {
                echo "File $fileName exceeds the maximum size of 5MB.<br>";
            }
        } else {
            echo "File $fileName is not a valid image file.<br>";
        }
    }
} else {
    echo "No files were uploaded.";
}
?>
