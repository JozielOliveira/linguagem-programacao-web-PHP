
          <div class="row">
            <h2 class="center">Atualizar Cliente</h2>
            <form class="col s12" method="POST" action="?c=c&a=ua">
                <input name="idClient" type="text" value="<?= $data["idCliente"]?>" hidden>
              
              <div class="row">
                <div class="input-field col s12">
                  <input name="name"  type="text" class="validate" value="<?= $data["name"]?>">
                  <label for="first_name">Nome</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="endereco" type="text" class="validate" value="<?= $data["endereco"]?>">
                  <label for="endereco">Endereço</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="email" type="email" class="validate" value="<?= $data["email"]?>">
                  <label for="email">Email</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="telefone" type="text" class="validate" value="<?= $data["telefone"]?>">
                  <label for="telefone">Telefone</label>
                </div>
              </div>

              <button class="btn waves-effect waves-light" type="submit" name="action">
                Atualizar
              </button>
            </form>
          </div>