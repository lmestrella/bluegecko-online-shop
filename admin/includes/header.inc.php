<header class="site__header flex flex-dir-col">
  <div class="content-wrapper">
    <h1 class="site__logo">
      <span>BLUE</span><span>GECKO</span>
    </h1>
    <span class="site__datetime"></span>
    <nav class="site__nav">
      <ul role="list" class="site__nav-list flex">
        <li class="site__nav-item">
          <a
            href="./products.php"
            class="site__nav-link
            <?php if (basename($_SERVER["PHP_SELF"]) == "products.php") echo "site__nav-link-selected"; ?>">
            Products
          </a>
        </li>
        <li class="site__nav-item">
          <a
            href="./categories.php"
            class="site__nav-link
            <?php if (basename($_SERVER["PHP_SELF"]) == "categories.php") echo "site__nav-link-selected"; ?>">
            Categories
          </a>
        </li>
        
        <li class="site__nav-item site__nav-item-logout">
          <a href="./includes/logout.inc.php" class="site__nav-link">
            Log out
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>