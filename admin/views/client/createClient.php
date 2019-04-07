
          <div class="row">
            <h2 class="center">Criar cliente</h2>
            <form class="col s12" method="POST" action="?c=c&a=ca">
              <div class="row">
                
              <div class="row">
                <div class="input-field col s12">
                  <input name="name"  type="text" class="validate">
                  <label for="first_name">Nome</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="endereco" type="text" class="validate">
                  <label for="endereco">Endereço</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="telefone" type="text" class="validate">
                  <label for="telefone">Telefone</label>
                </div>
              </div>

              <button class="btn waves-effect waves-light" type="submit" name="action">
                Criar
              </button>
            </form>
          </div>