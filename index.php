<html>
<head>
	<link rel="stylesheet" type="text/css" href="./index.css">
</head>
<body>
	<h1> Available Products </h1>
	<table>
		<thead>
			<td>Product</td>
			<td>Code</td>
			<td>Price</td>
		</thead>
		<tr>
			<td>Red Widget</td>
			<td>R01</td>
			<td>$32.95</td>
		</tr>
		<tr>
			<td>Green Widget</td>
			<td>G01</td>
			<td>$24.95</td>
		</tr>
		<tr>
			<td>Blue Widget</td>
			<td>B01</td>
			<td>$7.95</td>
		</tr>
	</table>

	<h1> Delievery cost </h1>

	<table>
		<thead>
			<td>Orders</td>
			<td>Delievery cost</td>
		</thead>
		<tr>
			<td><$50</td>
			<td>$4.95</td>
		</tr>
		<tr>
			<td><$90</td>
			<td>$2.95</td>
		</tr>
		<tr>
			<td>>=$90</td>
			<td>Free</td>
		</tr>
	</table>
	
	<h1> Cost Calculation </h1>

	<table>
		<thead>
			<td>Orders</td>
			<td>Actions</td>
		</thead>
		<tbody id="cost-form-body">
			<tr>
				<td>
				</td>
				<td>
				</td>
			</tr>
		</tbody>
	</table>
	<h2> Total cost </h2>
	<h3 id="total-cost"></h3>
	<select id="product-code">
		<option value="R01">R01</option>
		<option value="G01">G01</option>
		<option value="B01">B01</option>
	</select>
	<button onclick="addProduct()"> Add product </button>
	<script type="text/javascript" src="./index.js"></script>
</body>
</html>