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
                                                <a href="<?= site_url("produto/detalhe/$p->id")?>">
                                                    <img src="<?= asset_url("img/produtos_prontos/$p->imagem") ?>"
                                                         alt="<?= $p->nome ?>">
                                                </a>
                                            </td>
                                            <td><a href="<?= site_url("produto/detalhe/$p->id")?>"><?= $p->nome ?></a>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("produto/carrinho_decrementar/$p->id") ?>">
                                                    <i class="fa fa-minus"></i>
                                                </a>
                                                <b><?= $_SESSION['carrinho'][$p->id] ?></b>
                                                <a href="<?= site_url("produto/carrinho_adicionar/$p->id") ?>">
                                                    <i class="fa fa-plus"></i>
                                                </a>



                                            </td>
                                            <td>R$ <?= $p->preco_promocao ? $p->preco_promocao : $p->preco ?></td>
                                            <td>R$ 0.00</td>
                                            <td>
                                                R$ <?= number_format(($p->preco_promocao ? $p->preco_promocao : $p->preco) * $_SESSION['carrinho'][$p->id], 2) ?></td>
                                            <td>

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
                                        <th colspan="2">R$ <?= number_format($total, 2) ?></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            <?php endif; ?>

                        </div>
                        <!-- /.table-responsive -->

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="<?= site_url()?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>
                                    Continuar comprando</a>
                            </div>
                            <div class="pull-right">
<!--                                <button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>-->
                                <button type="submit" class="btn btn-primary">Finalizar pedido <i
                                        class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
                <!-- /.box -->

                <?php $this->load->view('produto/_gostar', ['produtos' => $produtos_aleatorios])?>

            </div>
            <!-- /.col-md-9 -->

            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Resumo do pedido</h3>
                    </div>
                    <p class="text-muted">Em compras acima de R$ 300.00 será concedido um desconto de 15%</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <th>R$ <?= number_format($total, 2) ?></th>
                            </tr>
                            <tr>
                                <td>Frete</td>
                                <th>Grátis</th>
                            </tr>
                            <tr>
                                <td>Adicional</td>
                                <th>R$ 0.00</th>
                            </tr>
                            <tr>
                                <td>Desconto</td>
                                <th>R$ <?= number_format(($total > 300?$total*0.15:0), 2)?></th>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <th>R$ <?= number_format(($total > 300?$total*0.85:$total), 2) ?></th>
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
