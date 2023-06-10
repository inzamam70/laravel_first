<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" >
     <link rel="stylesheet" href="{{ asset('ui/admin/cart.css') }}">
     <link rel="stylesheet" href="bootstrap-icons-1.50/bootstrap-icons.css"> 
</head>
<body style="background-color: rgb(219, 226, 226);">
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Food cart</a>
            <div class="navbar navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"></li>
                </ul>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"></li>
                </ul>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"></li>
                </ul>
                <span class="navbar-text">Total food cart value : ৳ <span class="totalAmount">0</span></span>
            </div>
        </div>
    </nav>

    <div class="container-fluid ">
        <div class="card mx-auto mt-5 shadow-lg rounded-0" style="width: 40rem;">
            <div class="card-header">
                Cart
            </div>
            <div class="card-body">
                <table class="table table-primary">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th class="text-center">Quantity</th>
                    </tr>
                    </thead>
                    <tbody class="table-light">
                        <tr>
                            <td>1</td>
                            <td>Corn shup</td>
                            <td>
                                ৳<span class="price">10</span>
                                <input type="hidden" name="txtPrice" value="10">
                                <input type="hidden" name="totalTxtPrice" value="0">
                            </td>
                            <td class="text-center">
                                <i class="bi bi-cart-dash"></i>&nbsp;<input name="item" value="0" size="2">&nbsp<i class="bi bi-cart-plus-fill text-primary"></i>
                                <input type="hidden" name="txtItem" value="0">
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Salad</td>
                            <td>
                                ৳<span class="price">15</span>
                                <input type="hidden" name="txtPrice" value="15">
                                <input type="hidden" name="totalTxtPrice" value="0">
                            </td>
                            <td class="text-center">
                                <i class="bi bi-cart-dash"></i>&nbsp;<input name="item" value="0" size="2">&nbsp;<i class="bi bi-cart-plus-fill text-primary"></i>
                                <input type="hidden" name="txtItem" value="0">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-end">Total Amount : </td>
                            <td>৳<span class="totalAmount">0</span></td>
                            <td>Total quantity :  <span class="totalQuantity">0</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



              
          




      <footer class="bg-dark p-2 text-center fixed-bottom">
        <div class="container">
          <p class="text-white">All Right Reserved @Cumpas-Canteen </p>
        </div>
      </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" ></script>



</body>
</html>