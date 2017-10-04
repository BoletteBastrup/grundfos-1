function submitPump() {
  var input = document.getElementsByClassName("tt-input")[0];
  var pump = input.value;
  if (input.value === "ALPHA2") {
    document.getElementById("searchResult").style.display = "block";
  }
};

$('#advancedSearch').click(function() {
  $('#advancedSearchBox').toggleClass("show");
});

//Display block på advancedSearchBox når webbanners & uniqueSellingPoints er
//checked samt der er præcis to produkter tilføjet
var webBanners = $('#webBanners'); //Variabler
var uniqueSellingPoints = $('#uspCheck'); //Variabler
var result = $('#advancedSearchResult'); //Variabler
var search = $('#advancedSearchBox button'); //Variabler
$(search).click(function() { //Ved klik på Search knappen
  if ($(webBanners).is(':checked') && ($(uniqueSellingPoints).is(':checked')) && ($('.productList li').length === 2)) {
    $(result).css('display', 'block'); //Tilføj display block
  }
  else {
    alert('Felterne er ikke udfyldt korrekt');
  }
});

$(document).ready(function (){
    if (location.hash === '#myMaterialTab') { //Hvis URL slutter på #myMaterialTab
      $('.marketingMaterialTab').removeClass('active'); //Fjern active class fra første tab
      $('#marketingMaterialTab').removeAttr('defaultOpen'); //Fjern defaultOpen id fra første tab
      $('.myMaterialTab').addClass('active'); //Tilføj active class til anden tab (myMaterials)

      $('#marketingMaterial').css('display', 'none'); //Ændre display til none på indholdet af første tab
      $('#myMaterial').css('display', 'flex'); //Ændre display til flex på indholdet af anden tab

    } else if (location.hash === '#inspirationTop') { //Hvis URL slutter på #inspiration
      $('.marketingMaterialTab').removeClass('active'); //Same story
      $('#marketingMaterialTab').removeAttr('defaultOpen');
      $('.inspirationTab').addClass('active');

      $('#marketingMaterial').css('display', 'none');
      $('#inspiration').css('display', 'flex');

    } else if (location.hash === '#inspirationBrochure') {
      $('.marketingMaterialTab').removeClass('active');
      $('#marketingMaterialTab').removeAttr('defaultOpen');
      $('.inspirationTab').addClass('active');

      $('#marketingMaterial').css('display', 'none');
      $('#inspiration').css('display', 'flex');

      $('.brochure').css('height', 'auto'); //Udvid artiklen
    }
});

//Udvidet produktmateriale til ALPHA2
$('.ALPHA2').click(function() {
  $('.productMaterial').toggleClass("show");
});


//Indsætter .productMaterial efter 4 article-enheder
$( ".productMaterial" ).insertAfter( $( '.my-material article:eq(3)') );

//Forsøg på at sørge for at .productMaterial altid kom efter de 4 første enheder - kunne ikke få DOM-manipulationen til at virke
/*var x;
$('#filter-ALPHA3').change(function(){
if (!this.checked)
x = $('.ALPHA3').detach();
else
$('.my-material').append(x);
});*/

//Filter-funktion (source: http://jsfiddle.net/6wYzw/42/)
$(".filters :checkbox").click(function(){
  var re = new RegExp($(".filters :checkbox:checked").map(function(){
    return this.value;
  }).get().join("|"));
  $(".filterItem").each(function(){
    var $this = $(this);
    $this [re.source!="" && re.test($this.attr("class")) ? "show" : "hide"]();

  });
});

//Check all 'My material'
$("#filters input").prop("checked", true);

//check input 'all' fra og til - 'inspiration'

  $('.filter-all').on('change', function(){
    $('.filterCategoryItem').not('.filter-all').prop('checked', false);
  });

  $('.filterCategoryItem').on('change', function(){
    $('.filter-all').not('.filterCategoryItem').prop('checked', false);
  });


//TABS UNDER MARKETING MATERIAL
function openTab(evt, tab) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tab).style.display = "flex";
    evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();


new Vue({
	el: '#productResult',

	data: {
	productItems:[
		],
	newProduct:'',
	},


	methods: {

//Methods for Preperation
	addProduct: function () {
			var productItem = this.newProduct.trim();
			if (productItem == "ALPHA2" || productItem == "CMBE" || productItem == "MAGNA") {
				this.productItems.push({
					text: productItem,
					checked: false
				});
				this.newProduct = "";
			}
		},

		removeProductItems: function (productItem) {
			var index = this.productItems.indexOf(productItem);
			this.productItems.splice(index, 1);
		},

}
});

//Udvid box i 'Inspiration'
$(".seeMore").click(function(){
  var val = $(this).text();
  if (val == "Read more") {
  $(this).parent().animate({maxHeight: '60000px'});
  $(this).text("Read less");
  $(this).siblings('.gradientBox').css('display','none');
} else {
  $('.more').removeClass('animated');
  $(this).parent().animate({height:"160px"});
  $(this).text("Read more");
  $(this).siblings('.gradientBox').css('display','block');
}
  return false;
  });
