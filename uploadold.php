<!DOCTYPE html>
<html>
    <head>
        <title>Drag or select to upload</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://code.jquery.com/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/index.css">
    </head>
    <body style="background-color: #d4baa4;">
        <br />
        <div class="container">
            <h3 align="center">Upload</h3>
            <br />
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Upload or drag</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" enctype="multipart/form-data" action="backend.php">
Select item to upload:
  <input type="file" name="profile_photo" id="profile_photo">
  <button class="submit btn btn-success btn-lg d-block mx-auto" align="center" type="submit" name="create video" id="createvid" onclick="submitForms()">Upload any item</button>
  </form>
  <br>

                </div>
            </div>
        </div>
        <br />
        <br />
    </body>
</html>

