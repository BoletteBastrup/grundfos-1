<article id="marketingMaterial" class="tabcontent">
  <div class="animationWrapper">
    <p>Search by product number or name</p>
    <section class="prefetch">
      <input class="typeahead inputPump inputLarge">
      <button type="button" id="submit" onclick="submitPump()" class="iconButton" name="button"><i class="fa fa-search" aria-hidden="true"></i></button>
      <button type="button" id="advancedSearch" name="button">Advanced Search</button>
    </section>
    <section class="show" id="shuit">
      <input type="checkbox" name="mymaterialsonly" value="mymaterialsonly">
      <label for="mymaterialsonly">Search by 'My material' only</label>
    </section>
  </div>

  <section id="advancedSearchBox" class="up-arrow">

    <div id="advancedSearchFlex">
      <section id="productResult">
        <p class="padding-bottom">Search ‘All’ or add product(s) to search list</p>

        <div id="searchBar">
          <input id="addProduct" class="awesomplete inputPump inputSmall" data-list="ALPHA2, CMBE, MAGNA" v-model="newProduct" @keyup.enter="addProduct" placeholder="Add product(s)">
          <button @click="addProduct" class="iconButton"><i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>

        <section class="prefetch">
          <input type="checkbox" name="mymaterialsonly" value="mymaterialsonly">
          <label for="mymaterialsonly"> Search by 'My material' only</label>
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
            <input type="checkbox" id="webBanners" name="webbanners">
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
            <input type="checkbox" id="uspCheck" name="uniqueSellingPoints">
            <label for="uniqueSellingPoints">Unique Selling Points</label>
          </li>
          <li>
            <input type="checkbox" name="publications">
            <label for="publicaitons">Publications</label>
          </li>
        </ul>

    </section>
    </div>

    <button class="secondaryAction advancedSearchBtn">Search</button>


  </section>
  <section id="searchResult" style="display: none;">
    <p>Results</p>
    <table id="table-header">
      <tr>
        <td class="td-checkbox"></td>
        <td class="showImage"></td>
        <td class="td-name">Title</td>
        <td class="td-type"></td>
        <td class="td-file">File</td>
        <td class="td-size">Size</td>
        <td class="td-unit"></td>
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
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Images/Web/ALPHA2_product_image_1200x1200px.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_left_product_image</td>
            <td class="td-type"><span class="typeLabel">print</span></td>
            <td class="td-file">.tiff</td>
            <td class="td-size">7,7</td>
            <td class="td-unit">mb</td>
            <td class="td-update">15/09/15</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Images/Web/ALPHA2_application_image_1200x800px.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_application_image</td>
            <td class="td-type"><span class="typeLabel">print</span></td>
            <td class="td-file">.tiff</td>
            <td class="td-size">40,2</td>
            <td class="td-unit">mb</td>
            <td class="td-update">20/05/15</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Images/Web/ALPHA2_application_image_1200x800px.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_application_image_1200x800px</td>
            <td class="td-type"><span class="typeLabel">web</span></td>
            <td class="td-file">.jpg</td>
            <td class="td-size">127</td>
            <td class="td-unit">kb</td>
            <td class="td-update">20/05/15</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Images/Web/ALPHA2_application_image_1200x800px.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_application_image_1200x800px</td>
            <td class="td-type"><span class="typeLabel">web</span></td>
            <td class="td-file">.png</td>
            <td class="td-size">1,3</td>
            <td class="td-unit">mb</td>
            <td class="td-update">20/05/15</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Images/Web/ALPHA2_product_image_1200x1200px.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_product_image_62x62px</td>
            <td class="td-type"><span class="typeLabel">web</span></td>
            <td class="td-file">.jpg</td>
            <td class="td-size">2</td>
            <td class="td-unit">kb</td>
            <td class="td-update">20/05/15</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Images/Web/ALPHA2_product_image_1200x1200px.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_product_image_62x62px</td>
            <td class="td-type"><span class="typeLabel">web</span></td>
            <td class="td-file">.png</td>
            <td class="td-size">13</td>
            <td class="td-unit">kb</td>
            <td class="td-update">18/05/15</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Images/Web/ALPHA2_product_image_1200x1200px.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_product_image_1200x1200px</td>
            <td class="td-type"><span class="typeLabel">web</span></td>
            <td class="td-file">.jpg</td>
            <td class="td-size">78</td>
            <td class="td-unit">kb</td>
            <td class="td-update">20/05/15</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Images/Web/ALPHA2_product_image_1200x1200px.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_product_image_1200x1200px</td>
            <td class="td-type"><span class="typeLabel">web</span></td>
            <td class="td-file">.png</td>
            <td class="td-size">2</td>
            <td class="td-unit">mb</td>
            <td class="td-update">20/05/15</td>
          </tr>
        </table>
      </details>
      <details open>
        <summary>Webbanners</summary>
        <table>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Webbanners/ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg" alt="ALPHA 2 webbanner"></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_webbanner_300x250px_ENGLISH</td>
            <td class="td-type"></td>
            <td class="td-file">.jpg</td>
            <td class="td-size">39</td>
            <td class="td-unit">kb</td>
            <td class="td-update">21/04/16</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Webbanners/ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_webbanner_728x90px_ENGLISH</td>
            <td class="td-type"></td>
            <td class="td-file">.jpg</td>
            <td class="td-size">38</td>
            <td class="td-unit">kb</td>
            <td class="td-update">29/03/17</td>
          </tr>
        </table>
      </details>
      <details open>
        <summary>Unique Selling Points (USP)</summary>
        <table>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/UniqueSellingPoints/ALPHA2_USPs.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_UPSs</td>
            <td class="td-type"></td>
            <td class="td-file">.docx</td>
            <td class="td-size">22</td>
            <td class="td-unit">kb</td>
            <td class="td-update">26/08/15</td>
          </tr>
        </table>
      </details>
    </details>
    <section class="download">
      <article class="selectBox">
        <input type="checkbox" onclick="toggle(this);">
        <label for="">Select All</label>
      </article>
      <button class="primaryAction">Download Selected</button>
    </section>
  </section>
  <section id="advancedSearchResult" style="display: none;">
    <p>Results</p>
    <table id="table-header">
      <tr>
        <td class="td-checkbox"></td>
        <td class="showImage"></td>
        <td class="td-name">Title</td>
        <td class="td-type"></td>
        <td class="td-file">File</td>
        <td class="td-size">Size</td>
        <td class="td-unit"></td>
        <td class="td-update">Update</td>
      </tr>
    </table>
    <details open>
      <summary>Alpha 2</summary>
      <details open>
        <summary>Webbanners</summary>
        <table>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Webbanners/ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg" alt="ALPHA 2 webbanner"></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_webbanner_300x250px_ENGLISH</td>
            <td class="td-type"></td>
            <td class="td-file">.jpg</td>
            <td class="td-size">39</td>
            <td class="td-unit">kb</td>
            <td class="td-update">21/04/16</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Webbanners/ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_circulator_webbanner_728x90px_ENGLISH</td>
            <td class="td-type"></td>
            <td class="td-file">.jpg</td>
            <td class="td-size">38</td>
            <td class="td-unit">kb</td>
            <td class="td-update">29/03/17</td>
          </tr>
        </table>
      </details>
      <details open>
        <summary>Unique Selling Points (USP)</summary>
        <table>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/UniqueSellingPoints/ALPHA2_USPs.jpg" alt=""></span></i></a></td>
            <td class="td-name">ALPHA2_UPSs</td>
            <td class="td-type"></td>
            <td class="td-file">.docx</td>
            <td class="td-size">22</td>
            <td class="td-unit">kb</td>
            <td class="td-update">26/08/15</td>
          </tr>
        </table>
      </details>
    </details>
    <details open>
      <summary>MAGNA</summary>
      <details open>
        <summary>Webbanners</summary>
        <table>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Webbanners/ALPHA2_circulator_webbanner_300x250px_ENGLISH.jpg" alt="ALPHA 2 webbanner"></span></i></a></td>
            <td class="td-name">MAGNA_circulator_webbanner_300x250px_ENGLISH</td>
            <td class="td-type"></td>
            <td class="td-file">.jpg</td>
            <td class="td-size">39</td>
            <td class="td-unit">kb</td>
            <td class="td-update">21/04/16</td>
          </tr>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/Webbanners/ALPHA2_circulator_webbanner_728x90px_ENGLISH.jpg" alt=""></span></i></a></td>
            <td class="td-name">MAGNA_circulator_webbanner_728x90px_ENGLISH</td>
            <td class="td-type"></td>
            <td class="td-file">.jpg</td>
            <td class="td-size">38</td>
            <td class="td-unit">kb</td>
            <td class="td-update">29/03/17</td>
          </tr>
        </table>
      </details>
      <details open>
        <summary>Unique Selling Points (USP)</summary>
        <table>
          <tr>
            <td class="td-checkbox"><input type="checkbox" class="checked"></td>
            <td class="showImage"><a href=""><i class="fa fa-eye" aria-hidden="true"><span><img src="img/ALPHA2/UniqueSellingPoints/ALPHA2_USPs.jpg" alt=""></span></i></a></td>
            <td class="td-name">MAGNA_UPSs</td>
            <td class="td-type"></td>
            <td class="td-file">.docx</td>
            <td class="td-size">22</td>
            <td class="td-unit">kb</td>
            <td class="td-update">26/08/15</td>
          </tr>
        </table>
      </details>
    </details>
    <section class="download">
      <article class="selectBox">
        <input type="checkbox" onclick="toggle(this);">
        <label for="">Select All</label>
      </article>
      <button class="primaryAction">Download Selected</button>
    </section>
  </section>
</article>
