<?php include __DIR__ . '/../../../partials/head.php' ?>
<?php include __DIR__ . '/../../../partials/header.php' ?>


<div class="container mt-5">    
    <div class="row justify-content-center py-3">

        <div class="col-lg-3 shadow">

            <div class="row">
                <div class="col-md-12">
                    <h2>Adicionar Product</h2>
                </div>
            </div>
            <div class="row p-3">
                <form action="/" method="post" enctype="multipart/form">
                    <div class="form-group">
                        <label for="name" class="form-label">Nome</label>
                        <input class="form-control" type="text" name="name" id="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-label">Preço</label>
                        <input class="form-control" type="number" name="price" id="price" required>
                    </div>
                    <div class="form-group">
                        <label for="category" class="form-label">Categoria</label>
                        <select class="form-control" type="category" name="category" id="category">
                            <?php foreach ($categories as $category) { ?>
                            <option value="<?= $category->getId() ?>"><?= $category->getName() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea class="form-control" type="description" name="description" id="description"></textarea>
                    </div>

                    <button class="btn btn-primary w-100 my-2" type="submit" value="Submit">Enviar</button>
                </form>
            </div>
            <hr>
            <div class="row py-4">
                <div class="col-md-12">
                    <h2>Nova categories</h2>
                </div>
                <form action="/categoryinsert" method="post" enctype="multipart/form">
                    <div class="form-group">
                        <label for="newCategory" class="form-label"><b>Nome da nova categoria</b></label>
                        <input class="form-control" type="text" name="newCategory" id="newCategory">
                    </div>
                    <button class="btn btn-primary w-100 my-2" type="submit" value="Submit">Enviar</button>
                </form>
            </div>

        </div>
        <div class="col-lg-8 offset-lg-1 shadow rounded rounded-3">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="py-3">Products</h2 class="py-3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product) {?>
                            <tr>
                                <td><?= $product->getNome()?></td>
                                <td><?= $product->getDescricao()?></td>
                                <td>R$<?= $product->getPreco()?></td>
                                <td><?= $product->getCategory()->getName()?></td>
                            </tr>
                            <?php } ;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include __DIR__ . '/../../../partials/footer.php' ?>
<?php include __DIR__ . '/../../../partials/foot.php' ?>