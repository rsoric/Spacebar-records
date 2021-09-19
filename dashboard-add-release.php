<?php include_once "dashboard-header.php";?>

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
        <form id="edit-product-form" action="Backend/releases-add.php" method="post">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="albumAutor">Artist:</label>
                        <input class="form-control form-control-lg" type="text" name="albumAutor" value="" required>
                        <label for="albumName">Title:</label>
                        <input class="form-control form-control-lg" type="text" name="albumName" value="" required>
                        <label for="albumImg">Cover URL:</label>
                        <input class="form-control form-control-lg" type="url" name="albumImg" value="" required>
                        <label for="albumCover">Back cover URL:</label>
                        <input class="form-control form-control-lg" type="url" name="albumCover" value="" required>
                        <label for="albumTracks">Tracklist:</label>
                        <textarea class="form-control" rows="10" style="height:100%;" aria-label="With textarea" name="albumTracks" ></textarea>
                        <label for="albumDescription">Description:</label>
                        <textarea class="form-control" rows="5" style="height:100%;" aria-label="With textarea" name="albumDescription"></textarea>
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