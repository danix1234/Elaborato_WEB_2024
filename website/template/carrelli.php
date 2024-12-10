<div class="mx-1 mx-md-4">


    <!--title of entire page-->
    <header class="row my-2">
        <div class="col-1"> </div>
        <h1 class="col text-center my-0">
            Carrello
        </h1>
        <a href="#buy" title="button to go to buy button"
            class="col-1 d-flex align-items-center justify-content-center">
            <span class="bi bi-arrow-down-circle-fill fs-5"></span>
        </a>
    </header>

    <!--lista dei prodotti-->
    <div>
        <?php for($i=0; $i<4; $i++){ ?>
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="img/temp.jpg" alt="" />
            </div>
            <div class="col-md">
                <a href="#" class="row">
                    <h2>Nome del prodotto</h2>
                </a>
                <div class="row">
                    <span> Descrizione molto lunga del prodotto </span>
                </div>
                <label for="quantity<?php echo $i?>" class="visually-hidden">Quantity</label>
                <div class="input-group">
                    <button tabindex="-1" class="input-group-text font-monospace" type="button"
                        id="decrement<?php echo $i?>">-</button>
                    <input class="form-control" type="text" value=1 name="quantity" id="quantity<?php echo $i?>"
                        required />
                    <button tabindex="-1" class="input-group-text font-monospace" type="button"
                        id="increment<?php echo $i?>">+</button>
                    <button class="btn bg-custom-lgold bg-custom-gold-hover" type="button">Remove</button>
                </div>
                <div class="row">
                    <span>Prezzo: 11.69€</span>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

    <!--resoconto-->
    <div class="my-2">
        <div class="row justify-content-center">
            <p class="col-auto my-1 align-middle">Prezzo totale: 16.69$</p>
        </div>
        <div class="row justify-content-center ">
            <button type="button" class="col-auto btn bg-custom-lgold bg-custom-gold-hover" id="buy">Acquista</button>
        </div>
    </div>

</div>
