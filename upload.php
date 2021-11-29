<!DOCTYPE html>
<html>
    <head>
        <title>ARSchool Database</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://code.jquery.com/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <script>
             function disableSubmit() {
              document.getElementById("createvid").disabled = true;
             }

              function activateButton(element) {

                  if(element.checked) {
                    document.getElementById("createvid").disabled = false;
                   }
                   else  {
                    document.getElementById("createvid").disabled = true;
                  }

              }
        </script>
    </head>
    <body onload="disableSubmit()" style="background-color: rgb(50,50,72);">
        <br />
        <div class="container">
            <h3 align="center" style="color: rgb(255,255,255);">< Upload to ARSchool Database ></h3>
            <br />
            <div class="panel panel-default" style="background-color:rgb(0, 0, 0);border: rgb(0, 0, 0);">
                <div class="panel-heading" style="background-color:rgb(82, 82, 152);color: rgb(255, 255, 255); border: rgb(0, 0, 0);">
                    <h3 class="panel-title">Generate weblink for a file to use it in ARSchool</h3>
                </div>
                <div class="panel-body" style="background-color: rgb(82,82,92); color: rgb(255, 255, 255);">
                    <form method="POST" enctype="multipart/form-data" action="backend.php">
Select item to upload:<br>
<!-- <label for="profile_photo" class="btn btn-primary btn-outlined" style="background-color:rgb(102,102,122); border: rgb(0,0,0); height: 9rem; text-align: center; font-size: 5rem;">Drag and drop a file here!</label> -->
Choose from your device or drag drop on the button below
  <input type="file" name="profile_photo" id="profile_photo">

  </form>
  Maximum file size is 200MB
  <br>
  <br>
  The Work / Contents / Materials will be created in this platform is made available<br> under a <a href="http://creativecommons.org/licenses/bysa/4.0/">Creative Commons Attribution-Share Alike 4.0 License</a>(International) by CEMCA.
  <br>
  <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">  I Agree to the above Terms & Coditions
<br>
  <button class="submit btn btn-success btn-lg d-block mx-auto" align="center" type="submit" name="create video" id="createvid" onclick="submitForms()">Upload Selected File</button>

                </div>
            </div>
        </div>
        <br />
        <br />
    </body>
</html>

