

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
			if (productItem) {
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
