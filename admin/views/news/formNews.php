              <?php if (isset( $data["idNews"])):?>
                <input name="idNews" type="text" value="<?= $data["idNews"]?>" hidden>
              <?php endif;?>
              <div class="row">
                <div class="input-field col s12">
                  <input name="title"  type="text" class="validate" value="<?= isset($data["title"])? $data["title"] : null?>">
                  <label for="first_name">Titulo</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input name="news" type="text" class="validate" value="<?= isset($data["news"])? $data["news"] : null?>">
                  <label for="endereco">Noticia</label>
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