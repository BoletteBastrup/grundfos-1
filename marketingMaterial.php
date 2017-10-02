<article id="Marketing material" class="tabcontent">
  <p>Search by product number or name</p>
  <section class="prefetch">
    <input class="typeahead inputPump inputLarge">
    <button type="button" id="submit" class="iconButton" name="button"><i class="fa fa-search" aria-hidden="true"></i></button>
    <button type="button" id="advancedSearch" name="button">Advanced Search</button>
  </section>
  <section class="show displayNone">
    <input type="checkbox" name="mymaterialsonly" value="mymaterialsonly">
    <label for="mymaterialsonly">Search by 'My material' only</label>
  </section>
  <section id="advancedSearchBox" class="displayNone up-arrow">

    <div id="advancedSearchFlex">
      <section id="productResult">
        <p class="padding-bottom">Search ‘All’ or add product(s) to search list</p>

        <div id="searchBar">
          <input id="addProduct" class="awesomplete inputPump inputSmall" data-list="Alpha 1, Alpha 2, Alpha 3" v-model="newProduct" @keyup.enter="addProduct" placeholder="Add product(s)">
          <button @click="addProduct" class="iconButton"><i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>

        <section>
          <input type="checkbox" name="mymaterialsonly" value="mymaterialsonly">
          <label for="mymaterialsonly">Search by 'My material' only</label>
        </section>

        <section>
          <ul class="productList">
            <li v-for="productItem in productItems" v-bind:key="productItem.text">
              <p>{{ productItem.text }}</p>
              <button @click="removeProductItems(productItem)">X</button>
            </li>
          </ul>
        </section>


      </section>

      <section id="category">
        <p class="padding-bottom">Category</p>
        <ul>
          <li>
            <input type="checkbox" name="productImages">
            <label for="productImages">Product Images</label>
          </li>
          <li>
            <input type="checkbox" name="webbanners">
            <label for="webbanners">Webbanners</label>
          </li>
          <li>
            <input type="checkbox" name="videos">
            <label for="vidoes">Videos</label>
          </li>
          <li>
            <input type="checkbox" name="caseStories">
            <label for="caseStories">Case Stories</label>
          </li>
          <li>
            <input type="checkbox" name="uniqueSellingPoints">
            <label for="uniqueSellingPoints">Unique Selling Points</label>
          </li>
          <li>
            <input type="checkbox" name="publications">
            <label for="publicaitons">Publications</label>
          </li>
        </ul>

    </section>
    </div>

    <button class="secondaryAction">Search</button>


  </section>
  <section id="searchResult" style="display: none;">
    <p>Results</p>
    <table id="table-header">
      <tr>
        <td class="td-checkbox"></td>
        <td class="showImage"></td>
        <td class="td-name">Title</td>
        <td class="td-file">File</td>
        <td class="td-size">Size</td>
        <td class="td-update">Update</td>
      </tr>
    </table>
    <details open>
      <summary>Alpha 2</summary>
      <details open>
        <summary>Product Images</summary>
        <table>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_application_image</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_product_image</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_application_image_1200x800px</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_application_image_1200x800px</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_product_image_62x62px</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_product_image_62x62px</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_product_image1200x1651</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_product_image1200x1651</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
        </table>
      </details>
      <details open>
        <summary>Webbanners</summary>
        <table>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_webbanner_300x250px_ENGLISH</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_webbanner_728x90px_ENGLISH</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
        </table>
      </details>
      <details open>
        <summary>Unique Selling Points (USP)</summary>
        <table>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/proeve.png" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_UPSs</td>
            <td class="td-file">png</td>
            <td class="td-size">41kb</td>
            <td class="td-update">17/09/21</td>
          </tr>
        </table>
      </details>
    </details>
    <section class="download">
      <article class="selectBox">
        <input type="checkbox" onclick="toggle(this);">
        <label for="">Select All</label>
        <input type="checkbox">
        <label for="">Deselect All</label>
      </article>
      <button class="primaryAction">Download Selected</button>
    </section>
  </section>
</article>
