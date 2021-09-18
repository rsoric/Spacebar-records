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
            <h1>Edit release:</h1>
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
                        <input hidden class="form-control form-control-lg" type="text" name="albumID" value="<?php echo $albumID?>">
                        <label for="albumAutor">Artist:</label>
                        <input class="form-control form-control-lg" type="text" name="albumAutor" value="<?php echo $albumAutor?>" required>
                        <label for="albumName">Title:</label>
                        <input class="form-control form-control-lg" type="text" name="albumName" value="<?php echo $albumName?>" required>
                        <label for="albumImg">Cover URL:</label>
                        <input class="form-control form-control-lg" type="url" name="albumImg" value="<?php echo $albumImg?>" required>
                        <label for="albumTracks">Tracklist:</label>
                        <textarea class="form-control" rows="10" style="height:100%;" aria-label="With textarea"><?php echo $albumTracks?></textarea>
                        <label for="albumDescription">Description:</label>
                        <textarea class="form-control" rows="5" style="height:100%;" aria-label="With textarea"><?php echo $albumDescription?></textarea>
                    </div>
                    
                    
                </div>
            </div>
            <div class="d-flex p-2 justify-content-around">

                    <input type="submit" name="delete" class="btn btn-primary delete-product-button" value="Delete release">


                    <input type="submit" name="update" class="btn btn-primary add-product-button" value="Save">   

            </div>
        </form>
    </div>
</div>

<?php include "dashboard-footer.php";?>