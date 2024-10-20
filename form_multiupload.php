<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Image Upload</title>
</head>
<body>
    <h2>Upload Images</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile[]" multiple="multiple" accept="image/*">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
