<?php include_once('header.php'); ?>

<main class="px-3">

  <div class="row">
    
    <table class="table">
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
          <a href="release.php">
            <input  class="product-edit-button" type="submit" value="View" id="view-release">
             </a>
            </td>
        </tr>
      </tbody>
    </table>
    
  </div>

</main>

<?php include_once('footer.php'); ?>

