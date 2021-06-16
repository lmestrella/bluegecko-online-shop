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
  <link rel="stylesheet" href="../assets/scss/style.css">
  <script src="../assets/js/admin.js" type="text/javascript" defer></script>
  <title>BLUEGECKO | Categories</title>
</head>
<body>
  <?php include_once("./includes/header.inc.php") ?>

  <section class="section">
    <div class="content-wrapper">
      <div class="section__header flex">
        <h3 class="section__header-title"><span>Category</span> List</h3>
        <button class="section__header-add  btn btn-primary">+ Add New Category</button>
      </div>
      <table class="table table-plain">
        <tr class="table__row-header">
          <th class="table__header">Name</th>
          <th class="table__header"></th>
        </tr>
        <tr class="table__row-data">
          <td class="table__data">Monitor</td>
          <td class="table__data category__table-actions">
            <a href="#" class="action action-edit"><i class="fas fa-pen"></i></a>
            <a href="#" class="action action-delete"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        <tr class="table__row-data">
          <td class="table__data">SSD/HDD</td>
          <td class="table__data category__table-actions">
            <a href="#" class="action action-edit"><i class="fas fa-pen"></i></a>
            <a href="#" class="action action-delete"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
        <tr class="table__row-data">
          <td class="table__data">CPU Case</td>
          <td class="table__data category__table-actions">
            <a href="#" class="action action-edit"><i class="fas fa-pen"></i></a>
            <a href="#" class="action action-delete"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      </table>
    </div>
  </section>

  <?php include_once("./includes/footer.inc.php") ?>
</body>
</html>