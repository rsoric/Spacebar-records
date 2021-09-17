<?php include_once "dashboard-header.php";
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
        <form id="edit-product-form" action="Includes/editProduct.php" method="post">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-group">
                        <label hidden for="ProductID">Cat. Number:</label>
                        <input hidden class="form-control form-control-lg" type="text" name="productID" value="">
                        <label for="ProductName">Artist:</label>
                        <input class="form-control form-control-lg" type="text" name="productName" value="" required>
                        <label for="imageURL">Title:</label>
                        <input class="form-control form-control-lg" type="text" name="productImg" value="" required>
                        <label for="price">Cover URL:</label>
                        <input class="form-control form-control-lg" type="text" name="productAmount" value="" required>
                        <label for="amount">Tracklist:</label>
                        <textarea class="form-control" rows="10" style="height:100%;" aria-label="With textarea"></textarea>
                        <label for="amount">Description:</label>
                        <textarea class="form-control" rows="5" style="height:100%;" aria-label="With textarea"></textarea>
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