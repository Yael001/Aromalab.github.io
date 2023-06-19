<!DOCTYPE html>
<html>
<head>
    <title>Tienda en línea</title>
    <style>
        body {
            background-image: url('img/jajajaja.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 80px 15% 0 15%;
            padding: 0;
        }
        header {
            background-color: #d8b3ff; /* Color de fondo morado casual */
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            z-index: 9999;
        }

        header h1 {
            color: #333;
            margin: 0;
        }

        header a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
            transition: color 0.3s;
        }

        header a:hover {
            color: red; /* Cambiar a color rojo al pasar el cursor */
        }

        .product {
            display: inline-block;
            margin: 10px;
            text-align: center;
            border-radius: 10px;
            width: calc(33.33% - 20px);
            box-sizing: border-box;
            padding: 10px;
            vertical-align: top;
            background-color: #d8b3ff; /* Color de fondo morado casual */
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .product button {
            background-color: #bf80ff; /* Color de fondo morado claro */
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product button:hover {
            background-color: #6600cc; /* Color de fondo morado fuerte al pasar por encima */
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #bf80ff; /* Color del borde morado claro */
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #d8b3ff;
        }

        #products {
            text-align: center;
        }

        #cart {
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        #cart th, #cart td {
            border: 1px solid #bf80ff; /* Color del borde morado claro */
            padding: 8px;
            text-align: center;
        }

        #total {
            font-weight: bold;
        }

footer {
  background-color: #333;
  color: white;
  padding: 10px 20px;
  text-align: center;

}

    </style>
</head>
<body>
    <header>
        <h1>Tienda en línea</h1>
        <div>
            <a href="hombres.php" style="margin-right: 10px;"><span style="margin-right: 10px;">Hombres</span></a>
            <a href="niños.php"><span style="margin-right: 10px;">Niños</span></a>
        </div>
    </header>
    <div id="products">
        <!-- Aquí van los productos -->
    </div>
    <h2>Carrito de compras</h2>
    <table id="cart">
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th></th>
        </tr>
    </table>
    <p>Total a pagar: $<span id="total">0</span></p>

    <script>
        // Datos de los productos
        var products = [
            {name: "ADORISSE", price: 459.00, description: "Fragance: Floral Floral", image: "img/m1.jpg"},
            {name: "EAU D´AROMES SPLENDOR", price: 349.00, description: "Fragance: Floral Verde Maderosa", image: "img/m2.jpg"},
            {name: "IRRESISTIBLE STORY", price: 481.00, description: "Fragance: Floral Verde Amizclada", image: "img/m3.jpg"},
            {name: "ROSE BLOSSOM", price: 501.00, description: "Fragance: Floral Rosa", image: "img/m4.jpg"},
            {name: "SWEETIE SPLASH", price: 525.00, description: "Fragance: Floriental Frutal", image: "img/m5.jpg"},
            {name: "J-SPORT FEEME", price: 580.00, description: "Fragance: Citrica Floral Almizclada", image: "img/m6.jpg"},
            {name: "VARSHA", price: 487.00, description: "Fragance: Oriental Maderosa", image: "img/m7.jpg"},
            {name: "PLUM SKY", price: 742.00, description: "Fragance: Floriental frutal", image: "img/m8.jpg"},
            {name: "PASTEL BOMB", price: 754.00, description: "Fragance: Floral Frutal Gourmand", image: "img/m9.jpg"}
        ];

        // Obtener el carrito de compras almacenado en localStorage
        var cart = JSON.parse(localStorage.getItem("cart")) || [];

        // Mostrar los productos en la página
        var productsDiv = document.getElementById("products");
        for (var i = 0; i < products.length; i++) {
            var product = products[i];
            var productDiv = document.createElement("div");
            productDiv.className = "product";
            productDiv.innerHTML = `
                <img src="${product.image}" alt="${product.name}">
                <h3>${product.name}</h3>
                <p>${product.description}</p>
                <p>$${product.price}</p>
                <button onclick="addToCart(${i})">Agregar al carrito</button>
            `;
            productsDiv.appendChild(productDiv);
        }

        // Mostrar los productos en el carrito
        var cartTable = document.getElementById("cart");
        for (var i = 0; i < cart.length; i++) {
            var item = cart[i];
            var row = cartTable.insertRow(-1);
            row.innerHTML = `
                <td><img src="${item.image}" alt="${item.name}" width="50" height="50"></td>
                <td>${item.name}</td>
                <td>$${item.price}</td>
                <td>${item.quantity}</td>
                <td>
                    <button onclick="addOne(this)">+</button>
                    <button onclick="removeOne(this)">-</button>
                    <button onclick="removeProduct(this)">Eliminar</button>
                </td>
            `;
        }

        // Función para agregar un producto al carrito
        function addToCart(index) {
            var product = products[index];
            var foundItem = cart.find(item => item.name === product.name);
            if (foundItem) {
                // El producto ya está en el carrito, aumentar la cantidad
                foundItem.quantity++;
                var quantityCell = foundItem.row.cells[3];
                quantityCell.innerHTML = foundItem.quantity;
            } else {
                // El producto no está en el carrito, agregar una nueva fila
                var row = cartTable.insertRow(-1);
                row.innerHTML = `
                    <td><img src="${product.image}" alt="${product.name}" width="50" height="50"></td>
                    <td>${product.name}</td>
                    <td>$${product.price}</td>
                    <td>1</td>
                    <td>
                        <button onclick="addOne(this)">+</button>
                        <button onclick="removeOne(this)">-</button>
                        <button onclick="removeProduct(this)">Eliminar</button>
                    </td>
                `;
                cart.push({ name: product.name, price: product.price, quantity: 1, row: row });
            }
            updateTotal();
            saveCartToLocalStorage();
        }

        // Función para actualizar el total a pagar
        function updateTotal() {
            var total = 0;
            for (var i = 0; i < cart.length; i++) {
                var item = cart[i];
                total += item.price * item.quantity;
            }
            document.getElementById("total").innerHTML = total.toFixed(2);
        }

        // Función para agregar uno a la cantidad de un producto en el carrito
        function addOne(button) {
            var row = button.parentElement.parentElement;
            var quantityCell = row.cells[3];
            var quantity = parseInt(quantityCell.innerHTML);
            quantityCell.innerHTML = quantity + 1;
            var item = cart.find(item => item.row === row);
            item.quantity++;
            updateTotal();
            saveCartToLocalStorage();
        }

        // Función para eliminar uno de la cantidad de un producto en el carrito
        function removeOne(button) {
            var row = button.parentElement.parentElement;
            var quantityCell = row.cells[3];
            var quantity = parseInt(quantityCell.innerHTML);
            if (quantity > 1) {
                quantityCell.innerHTML = quantity - 1;
                var item = cart.find(item => item.row === row);
                item.quantity--;
                updateTotal();
                saveCartToLocalStorage();
            }
        }

        // Función para eliminar un producto del carrito
        function removeProduct(button) {
            if (confirm("¿Estás seguro de que quieres eliminar este producto del carrito?")) {
                var row = button.parentElement.parentElement;
                row.parentElement.removeChild(row);
                var itemIndex = cart.findIndex(item => item.row === row);
                cart.splice(itemIndex, 1);
                updateTotal();
                saveCartToLocalStorage();
            }
        }

        // Función para guardar el carrito de compras en localStorage
        function saveCartToLocalStorage() {
            localStorage.setItem("cart", JSON.stringify(cart));
        }

        // Actualizar el total al cargar la página
        updateTotal();
    </script>
    
    <footer>
      <p>Creado por:<br>Erick Yael Cuevas López | Estefanía Sánchez Reyes </p>
      <p>Cetis. 26, Atitalaquia Hidalgo</p>
      <p>Email: malu56964@gmail.com</p>
      <p>Teléfono: +52 5544803658</p>
      <a href="https://wa.me/5544803658"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="32" height="32"></a>
      <a href="https://www.facebook.com/profile.php?id=100030726465571&mibextid=ZbWKwL"><img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook" width="32" height="32"></a>
    </footer>

</body>
</html>
