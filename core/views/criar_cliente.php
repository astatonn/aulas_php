<div class="container">
    <div class="row my-5">
        <div class="col-sm-6 offset-sm-3">
            <h3 class="text-center">Registro de Novo Cliente</h3>

            <form action="?action=criar_cliente" method="post">

                <!-- EMAIL -->
                <div class="my-3">
                    <label for="">Email</label>
                    <input type="email" name="text_email" placeholder="Email" required class="form-control">
                </div>

                <!-- SENHA -->
                <div class="my-3">
                    <label for="">Senha</label>
                    <input type="password" name="text_senha_1" placeholder="Senha" required class="form-control">
                </div>

                <!-- REPETIR A SENHA -->
                <div class="my-3">
                    <label for="">Repetir a senha</label>
                    <input type="password" name="text_senha_2" placeholder="Repetir a Senha" required class="form-control">
                </div>

                <!-- NOME COMPLETO -->
                <div class="my-3">
                    <label for="">Nome Completo</label>
                    <input type="text" name="text_nome_completo" placeholder="Nome Completo" required class="form-control">
                </div>

                <!-- ENDEREÇO -->
                <div class="my-3">
                    <label for="">Endereço</label>
                    <input type="text" name="text_endereco" placeholder="Endereco" required class="form-control">
                </div>

                <!-- CIDADE -->
                <div class="my-3">
                    <label for="">Cidade</label>
                    <input type="text" name="text_cidade" placeholder="Cidade" required class="form-control">
                </div>

                <!-- TELEFONE -->
                <div class="my-3">
                    <label for="">Telefone</label>
                    <input type="text" name="text_telefone" placeholder="Telefone" class="form-control">
                </div>


                <!-- ENVIAr -->
                <div class="my-4">
                    <input type="submit" value="Criar conta" class="btn btn-primary">
                </div>

                <?php if(isset($_SESSION['erro'])): ?>
                    <div class="alert alert-danger text-center p-2">
                        <?= $_SESSION['erro'] ?>
                        <?php echo $_SESSION['erro'] ?>
                    </div>
                <?php endif;?>



            </form>

        </div>
    </div>
</div>