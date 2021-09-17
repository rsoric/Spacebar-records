<?php include_once "dashboard-header.php";
?>

<div class="container-fluid dashboard-content">
    <div class="row">
        <div class="col-11">
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">Cover</th>
              <th scope="col">Cat. number</th>
              <th scope="col">Artist name</th>
              <th scope="col">Title</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <img src="https://media.pitchfork.com/photos/5929a534b1335d7bf1698b43/1:1/w_320/ebf5c60d.jpg" class="img-responsive catalogue-cover">
              </th>
              <td class="align-middle">SPCBR001</td>
              <td class="align-middle">Young Hacker</td>
              <td class="align-middle">Rave Anthems</td>
              <td class="align-middle">
                <input class="product-edit-button" type="submit" name="submit" value="Edit" id="product-edit-1">
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
      </div>
      
</div>

<?php include "dashboard-footer.php";?>