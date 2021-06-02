<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../scss/style.css">
  <script src="../js/admin.js" type="text/javascript" defer></script>
  <title>BLUEGECKO</title>
</head>
<body class="site">
  <?php include_once("./includes/header.inc.php") ?>

  <section class="section">
    <div class="content-wrapper">
      <div class="section__header flex">
        <h3 class="section__header-title"><span>Product</span> Details</h3>
        <input type="text" class="section__header-search" placeholder="Search">
        <button class="section__header-add  btn btn-primary">+ Add New</button>
      </div>
      <table class="table">
        <tr class="table__row-header">
          <th class="table__header"></th>
          <th class="table__header">Brand</th>
          <th class="table__header">Name</th>
          <th class="table__header">Category</t h>
          <th class="table__header">Price</th>
          <th class="table__header">Quantity</th>
          <th class="table__header"></th>
        </tr>
        <tr class="table__row-data">
          <td class="table__data">
            <div class="product__table-img flex"><i class="far fa-image"></i></div>
          </td>
          <td class="table__data">ASUS</td>
          <td class="table__data">
            <a href="#_" class="ellipsis bold">TUF Gaming VG27AQ1A Gaming Monitor TUF Gaming VG27AQ1A Gaming Monitor</a>
          </td>
          <td class="table__data">Monitor</td>
          <td class="table__data">399.00</td>
          <td class="table__data">25</td>
          <td class="table__data product__table-actions">
            <a href="#" class="action action-edit"><i class="fas fa-pen"></i></a>
            <a href="#" class="action action-delete"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        <tr class="table__row-data">
          <td class="table__data">
            <div class="product__table-img flex"><i class="far fa-image"></i></div>
          </td>
          <td class="table__data">ASUS</td>
          <td class="table__data">
            <a href="#_" class="ellipsis bold">TUF Gaming VG27AQ1A Gaming Monitor TUF Gaming VG27AQ1A Gaming Monitor</a>
          </td>
          <td class="table__data">Monitor</td>
          <td class="table__data">399.00</td>
          <td class="table__data">25</td>
          <td class="table__data product__table-actions">
            <a href="#" class="action action-edit"><i class="fas fa-pen"></i></a>
            <a href="#" class="action action-delete"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        <tr class="table__row-data">
          <td class="table__data">
            <div class="product__table-img flex"><i class="far fa-image"></i></div>
          </td>
          <td class="table__data">ASUS</td>
          <td class="table__data">
            <a href="#_" class="ellipsis bold">TUF Gaming VG27AQ1A Gaming Monitor TUF Gaming VG27AQ1A Gaming Monitor</a>
          </td>
          <td class="table__data">Monitor</td>
          <td class="table__data">399.00</td>
          <td class="table__data">25</td>
          <td class="table__data product__table-actions">
            <a href="#" class="action action-edit"><i class="fas fa-pen"></i></a>
            <a href="#" class="action action-delete"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      </table>
      <p class="pagination">
        <a href="#_" class="pagination__prev">&#8592; prev</a>
        <a href="#_" class="pagination__number">1</a>
        <a href="#_" class="pagination__number">2</a>
        <a href="#_" class="pagination__number selected">3</a>
        <a href="#_" class="pagination__number">4</a>
        <a href="#_" class="pagination__number">5</a>
        <a href="#_" class="pagination__number">6</a>
        <a href="#_" class="pagination__number">7</a>
        <a href="#_" class="pagination__next">next &#8594;</a>
      </p>
    </div>
  </section>

  <?php include_once("./includes/footer.inc.php") ?>
</body>
</html>