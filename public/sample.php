<!DOCTYPE html>
<html lang="en">
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
	<form action="view.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="VIEW"/>
    </form>
</body>
</html>