<?php include_once "dashboard-header.php";
      include_once "Backend/releases.php";
      include_once "Backend/functions.php";

    if(isset($_POST['submit']))
    {
        $albumID = sanitizeInput($_POST["albumID"]);
        $albumName = sanitizeInput($_POST["albumName"]);
        $albumImg = sanitizeInput($_POST["albumImg"]);
        $albumAutor = sanitizeInput($_POST["albumAutor"]);
        $albumTracks = sanitizeInput($_POST["albumTracks"]);
        $albumDescription = sanitizeInput($_POST["albumDescription"]);
    }

    

?>

<div class="container-fluid dashboard-content">
    <div class="row">
        <div class="col">
            <h1>Add release:</h1>
        </div>
        <div class="col-3">
            <form action="dashboard-releases.php">
                <input type="submit" id="back-button" value="Go back" />
            </form>
        </div>
    </div>

    <div class="new-product-input">
        <form id="edit-product-form" action="Backend/releases-edit.php" method="post">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-group">
                        <label hidden for="albumID">Id Number:</label>
                        <input hidden class="form-control form-control-lg" type="text" name="albumID" value="">
                        <label for="albumAutor">Artist:</label>
                        <input class="form-control form-control-lg" type="text" name="albumAutor" value="" required>
                        <label for="albumName">Title:</label>
                        <input class="form-control form-control-lg" type="text" name="albumName" value="" required>
                        <label for="albumImg">Cover URL:</label>
                        <input class="form-control form-control-lg" type="url" name="albumImg" value="" required>
                        <label for="albumImg">Back cover URL:</label>
                        <input class="form-control form-control-lg" type="url" name="albumImg" value="" required>
                        <label for="albumTracks">Tracklist:</label>
                        <textarea class="form-control" rows="10" style="height:100%;" aria-label="With textarea"></textarea>
                        <label for="albumDescription">Description:</label>
                        <textarea class="form-control" rows="5" style="height:100%;" aria-label="With textarea"></textarea>
                    </div>
                    
                    
                </div>
            </div>
            <div class="d-flex p-2 justify-content-around">

                    <input type="submit" name="update" class="btn btn-primary add-product-button" value="Save">   

            </div>
        </form>
    </div>
</div>

<?php include "dashboard-footer.php";?>