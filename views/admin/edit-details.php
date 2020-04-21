<?php

include('../includes/head.php');

?>
<link rel="stylesheet" href="/css/product.css">
</head>

<body>

    <main>

        <?php

        include('../includes/navigation.php');

        ?>

        <div class="grid">

            <article class="card product-item">
                <header class="card__header">
                    <h1 class="product__title">

                    </h1>
                </header>
                <div class="card__image">
                    <img src="" alt="">
                </div>
                <div class="card__content">
                    <h2 class="product__price">$
                        <%= product.price %>
                    </h2>
                    <p class="product__description">
                        <%= product.description %>
                    </p>
                </div>
                <div class="card__actions">
                    <a href="/admin/edit-product/" class="btn">Edit</a>
                    <form action="/admin/delete-product" method="POST">
                        <input type="hidden" value="<%= product._id %>" name="productId">
                        <button class="btn" type="submit">Delete</button>
                    </form>

                </div>
            </article>

        </div>

        <h1>No Products Found!</h1>

    </main>
</body>

</html>