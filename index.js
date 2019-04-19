var formArr = [];
var prices = {
	"R01": 32.95,
	"G01": 24.95,
	"B01": 7.95
}

function renderCostCalcBody() {
	var html = ``;
	for (var i = 0; i < formArr.length; i ++) {
		html += `<tr>
					<td>
						${formArr[i]}
					</td>
					<td>
						<button onclick="onDelete(${i})">Delete</button>
					</td>
				</tr>`;
	}
	document.getElementById("cost-form-body").innerHTML = html;
}

function renderTotalCost() {
	var orderCost = 0;
	for (var i = 0; i < formArr.length; i ++) {
		orderCost += prices[formArr[i]];
	}
	if (formArr.filter(item => item == "R01").length > 1) {
		orderCost -= prices["R01"]/2;
	}
	var delieveryCost = (orderCost >= 90)? 0: (orderCost >= 50? 2.95: 4.95);
	var totalCost = Math.floor((orderCost + delieveryCost) * 100) / 100;

	document.getElementById("total-cost").innerHTML = "$" + totalCost;
}

function onDelete(index) {
	formArr.splice(index, 1);
	renderCostCalcBody();
	renderTotalCost();
}

function addProduct() {
	var productCode = document.getElementById("product-code").value;
	if (!prices[productCode]) {
		alert("incorrect product code");
		return;
	}
	formArr.push(productCode);
	renderCostCalcBody();
	renderTotalCost();
}
