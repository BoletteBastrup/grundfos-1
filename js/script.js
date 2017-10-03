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

//Udvidet produktmateriale til ALPHA2
$('.ALPHA2').click(function() {
  $('.productMaterial').toggleClass("show");
});

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
