              <?php if (isset( $data["idCliente"])):?>
                <input name="idClient" type="text" value="<?= $data["idCliente"]?>" hidden>
              <?php endif;?>
              <div class="row">
                <div class="input-field col s12">
                  <input name="name"  type="text" class="validate" value="<?= isset($data["name"])? $data["name"] : null?>">
                  <label for="first_name">Nome</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="endereco" type="text" class="validate" value="<?= isset($data["endereco"])? $data["endereco"] : null?>">
                  <label for="endereco">Endereço</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="email" type="email" class="validate" value="<?= isset($data["email"]) ? $data["email"] : null?>">
                  <label for="email">Email</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="telefone" type="text" class="validate" value="<?= isset($data["telefone"])? $data["telefone"] : null?>">
                  <label for="telefone">Telefone</label>
                </div>
              </div>
              <div class="row">
                
                <div class="file-field input-field col s8">
                  <div class="btn">
                    <span>Foto</span>
                      <input name="foto" type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
              <?php if(isset($data['foto'])){ ?>
                <img class="col s4"src="<?=$data['foto']?>" style="max-width:100px; max-height:100px;">
              <?php }?>
              </div>
              <button class="btn waves-effect waves-light right green darken-1 btn-small" type="submit" name="action">
                Salvar
              </button>