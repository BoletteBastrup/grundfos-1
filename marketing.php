<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>My Grundfos</title>
  <link rel="stylesheet" href="css/skabelon.min.css">
  <link rel="stylesheet" href="css/mystyle.min.css">
  <link rel="stylesheet" href="css/awesomplete.css">
  <link rel="stylesheet" href="fontawesome/scss/font-awesome.min.css">
</head>

<body>
  <header>
    <section class="top">
      <ul>
        <li>Denmark</li>
        <li><img src="img/grid-icon.png" alt="grid icon">Service <i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></li>
        <li><i class="fa fa-user fa-lg" aria-hidden="true"></i>Sign Out <i class="fa fa-angle-down fa-lg" aria-hidden="true"></i></li>
      </ul>
    </section>
    <section class="bottom">
      <img src="img/grundfoslogo.png" alt="grundfos logo">
      <input type="text" placeholder="Search">
    </section>
  </header>

  <nav class="mainNav">
    <ul>
      <li>Products</li>
      <li>Industries og Solutions</li>
      <li>Cases</li>
      <li>Service og Support</li>
      <li>Training</li>
      <li>About Us</li>
      <li>How to Buy</li>
      <li class="active"><a href="index.html">My Grundfos</a></li>
    </ul>
  </nav>

  <section class="breadcrumbs">
    <a href="">Grundfos</a>
    <span>/</span>
    <a href="index.html">My Grundfos</a>
  </section>

  <section class="main-content">
    <aside>
      <h1>MyGrundfos</h1>
      <nav class="sideNav">
        <ul>
          <li><a href="index.html">Dashboard</a></li>
        </ul>
      </nav>

      <h2>Tools</h2>
      <nav class="sideNav">
        <ul>
          <li>Spare parts finder</li>
          <li>Pump replacement</li>
          <li>Quotations</li>
          <li>Orderstatus</li>
          <li>List price finder</li>
          <li>Availability</li>
          <li class="active">Marketing material</li>
        </ul>
      </nav>
    </aside>

    <main class="marketing-main">
      <article class="tab">
        <button class="tablinks" onclick="openTab(event, 'marketingMaterial')" id="defaultOpen">Marketing material</button>
        <button class="tablinks" onclick="openTab(event, 'myMaterial')">My material</button>
        <button class="tablinks" onclick="openTab(event, 'inspiration')">Inspiration</button>
      </article>

    <!-- include tab contents -->
    <?php include 'marketingMaterial.php' ?>
    <?php include 'myMaterial.php' ?>
    <?php include 'inspiration.php' ?>

    </main>
  </section>

  <footer>
    <section class="be-think-innovate">
      <img src="img/bethinkinnovate.png" alt="Be Think Innovate">
    </section>

    <section class="contact">
      <h4>Grundfos Pumps Ltd</h4>
      <ul>
        <li>Grovebury Road</li>
        <li>Leighton Buzzard</li>
        <li>Beds LU7 4TL</li>
      </ul>
      <ul>
        <li>Tel: 01525 850000</li>
        <li>Email: grundfos-uk@sales.grundfos.com</li>
      </ul>
      <ul>
        <li>Registration No. 805960 England.</li>
      </ul>
      <a href="">Legal Issues</a>
    </section>
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/awesomplete.min.js" charset="utf-8"></script>
  <script src="js/bloodhound.min.js" charset="utf-8"></script>
  <script src="js/typeahead.bundle.min.js" charset="utf-8"></script>
  <script src="js/typeahead.jquery.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    var pumps = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.whitespace,
      queryTokenizer: Bloodhound.tokenizers.whitespace,
      // url points to a json file that contains an array of country names, see
      // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
      prefetch: 'data.json'
      });

      // passing in `null` for the `options` arguments will result in the default
      // options being used
      $('.prefetch .typeahead').typeahead(null, {
      name: 'pumps',
      source: pumps
    });

    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[class="checked"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }};


  </script>
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.js" charset="utf-8"></script>
  <script src="js/script.js" charset="utf-8"></script>
  <!--<script src="js/table-animationer.js" charset="utf-8"></script>-->
</body>

</html>
