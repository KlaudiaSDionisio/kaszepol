<div id="all">

    <div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li>Carrinho</li>
                </ul>
            </div>

            <div class="col-md-9" id="basket">

                <div class="box">

                    <form method="post" action="checkout1.html">

                        <h1>Carrinho</h1>
                        <p class="text-muted">Você possui <?= count($produtos) ?> produto(s) no seu carrinho.</p>
                        <div class="table-responsive">
                            <?php if (count($produtos)): ?>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Produto</th>
                                        <th>Quantidade</th>
                                        <th>Preço unitário</th>
                                        <th>Desconto</th>
                                        <th colspan="2">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $total = 0 ?>
                                    <?php foreach ($produtos as $p): ?>
                                        <?php $total += ($p->preco_promocao ? $p->preco_promocao : $p->preco) * $_SESSION['carrinho'][$p->id] ?>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="<?= asset_url("img/produtos_prontos/$p->imagem") ?>"
                                                         alt="<?= $p->nome ?>">
                                                </a>
                                            </td>
                                            <td><a href="#"><?= $p->nome ?></a>
                                            </td>
                                            <td>
                                                <input type="number" value="<?= $_SESSION['carrinho'][$p->id] ?>"
                                                       class="form-control">

                                            </td>
                                            <td>R$ <?= $p->preco_promocao ? $p->preco_promocao : $p->preco ?></td>
                                            <td>R$ 0.00</td>
                                            <td>
                                                R$ <?= number_format(($p->preco_promocao ? $p->preco_promocao : $p->preco) * $_SESSION['carrinho'][$p->id], 2) ?></td>
                                            <td>
                                                <a href="<?= site_url("produto/carrinho_adicionar/$p->id") ?>">
                                                    <i class="fa fa-refresh"></i>
                                                </a>
                                                <a href="<?= site_url("produto/carrinho_remover/$p->id") ?>">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">R$ <?= $total ?></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            <?php endif; ?>

                        </div>
                        <!-- /.table-responsive -->

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="category.html" class="btn btn-default"><i class="fa fa-chevron-left"></i>
                                    Continue shopping</a>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
                                <button type="submit" class="btn btn-primary">Proceed to checkout <i
                                        class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
                <!-- /.box -->


                <div class="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height">
                            <h3>You may also like these products</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product1.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product1.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="product same-height">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img src="img/product3.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="img/product3.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>

                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                </div>


            </div>
            <!-- /.col-md-9 -->

            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Resumo do pedido</h3>
                    </div>
                    <p class="text-muted">Frete grátis.</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <th>R$ <?= $total ?></th>
                            </tr>
                            <tr>
                                <td>Frete</td>
                                <th>R$ 0.00</th>
                            </tr>
                            <tr>
                                <td>Adicional</td>
                                <th>R$ 0.00</th>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <th>R$ <?= $total ?></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="box">
                    <div class="box-header">
                        <h4>Cupom de desconto</h4>
                    </div>
                    <p class="text-muted">Se você possui um cupom de desconto, por favor insira-o no campo abaixo:</p>
                    <form>
                        <div class="input-group">

                            <input type="text" id="cupom" class="form-control">

                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button"
                                        onclick="alert('Cupom inválido');$('#cupom').val('');"><i class="fa fa-gift"></i></button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </form>
                </div>

            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->
