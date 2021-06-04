<div id="contato" class="container">

    <div class="row">

        <div class="col-12 text-center my-5">

            <h1 class="display-4">
                <i class="fa fa-paper-plane text-danger" aria-hidden="true"></i> Entre em Contato
            </h1>

        </div>

    </div>


    @include('templates.showSuccess')
    @include('templates.showError')

    <div class="row justify-content-center mb-5">

        <div class="col-sm-12 col-md-12 col-lg-8">

            <form>

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-12">
                        <label for="name"> Nome: </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome"
                        value="{{isset($user) ? $user->name: ''}}">
                    </div>

                </div>

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-12">
                        <label for="address"> Endereço: </label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Endereço"
                        value="{{isset($user) ? $user->address: ''}}">
                    </div>

                </div>

                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-6">
                        <label for="city"> Cidade: </label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Cidade"
                        value="{{isset($user) ? $user->cityName: ''}}">
                    </div>



                    <div class="form-group col-sm-2">
                        <label for="cep"> CEP: </label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP"
                        value="{{isset($user) ? $user->addressCep: ''}}">
                    </div>

                </div>

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-12">
                        <label for="email"> E-mail: </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail"
                        value="{{isset($user) ? $user->email: ''}}">
                        <small id="emailHelp" class="form-text text-muted"> Seu e-mail não será compartilhado com
                            ninguém. </small>
                    </div>

                </div>

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-12">
                        <label for="suggestion"> Gostaria de fazer sugestões ou solicitações? </label>
                        <textarea class="form-control" id="suggestion" name="suggestion" rows="3"></textarea>
                    </div>

                </div>

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-12">
                        <div class="form-check">
                            <label for="checkboxEmail" class="form-check-label">
                                <input type="checkbox" id="checkboxEmail" class="form-check-input"> Desejo receber
                                novidades por e-mail
                            </label>
                        </div>
                    </div>

                </div>

                <div class="form-row justify-content-center">

                    <div class="col-sm-12">

                        <input type="submit" class="btn btn-primary" value="Enviar">

                        <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover"
                            data-placement="right" title="Título"
                            data-content="Conteúdo Conteúdo Conteúdo Conteúdo Conteúdo Conteúdo Conteúdo Conteúdo Conteúdo ">
                            Ajuda </a>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

