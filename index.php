<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./scss/style.css">
  <title>BLUEGECKO</title>
</head>
<body class="site">
  <header class="site__header flex flex-dir-col">
    <div class="content-wrapper">
      <h1 class="site__logo">
        <span>BLUE</span><span>GECKO</span>
      </h1>
      <span class="site__datetime">
        May 24, 2021 | 02:13:46 PM
      </span>
      <nav class="site__nav">
        <ul class="site__nav-list flex">
          <li class="site__nav-item">
            <a href="#_" class="site__nav-link">Products</a>
          </li>
          <li class="site__nav-item">
            <a href="#_" class="site__nav-link">Categories</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="section">
    <div class="content-wrapper">
      <div class="section__header flex">
        <h3 class="section__header-title"><span>Product</span> Details</h3>
        <input type="text" class="section__header-search" placeholder="Search">
        <button class="section__header-add">+ Add New</button>
      </div>
      <table class="table">
        <tr class="table__row-header">
          <th class="table__header"></th>
          <th class="table__header">Brand</th>
          <th class="table__header">Name</th>
          <th class="table__header">Category</th>
          <th class="table__header">Price (USD)</th>
          <th class="table__header">Quantity</th>
          <th class="table__header"></th>
        </tr>
        <tr class="table__row-data">
          <td class="table__data"></td>
          <td class="table__data">ASUS</td>
          <td class="table__data">TUF Gaming VG27AQ1A Gaming Monitor</td>
          <td class="table__data">Monitor</td>
          <td class="table__data">399.00</td>
          <td class="table__data">25</td>
          <td class="table__data">
            <span class="action action-edit"><i class="fas fa-pen"></i></span>
            <span class="action action-delete"><i class="fas fa-trash-alt"></i></span>
          </td>
        </tr>
      </table>
    </div>
  </section>
  
  <?php include_once("./footer.php") ?>
</body>
</html>