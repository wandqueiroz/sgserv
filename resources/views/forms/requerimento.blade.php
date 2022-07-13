@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Requerimento</h1>
@stop

@section('content')
    <div class="card container">

        <div class="card-body">
            {{-- <h5 class="card-title">Requerimento</h5> --}}

            <form>
                <div style="display: flex; justify-content: space-between;">
                    <img src="{{ asset(config('adminlte.logo_horizontal')) }}" height="130">
                    <div class="card">
                        <div class="card-header">
                            <p class="text-center card-title" style="font-size:14px; width:400px;">CARIMBO DATADOR</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCarimboDatador" style="border: 0 none; outline: 0;">
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="text-center col-md-12"><strong>REQUERIMENTO</strong></h4>

                <div class="form-group">
                    <label for="inputOrgao">Orgão</label>
                    <input type="text" class="form-control" id="inputOrgao" placeholder="Orgão">
                </div>
                <hr size="10" width="100%">
                <p class="text-center col-md-12 bg-info">SERVIDOR</p>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCpf">CPF</label>
                        <input type="text" class="form-control" id="inputCpf" placeholder="Somente números">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEndereco">Endereço</label>
                        <input type="text" class="form-control" id="inputEndereco" placeholder="Endereço">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputMunicipio">Município</label>
                        <input type="text" class="form-control" id="inputMunicipio" placeholder="Município">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputTelefone">Telefone</label>
                        <input type="phone" class="form-control" id="inputTelefone" placeholder="Somente números">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputCargo">Cargo/Função</label>
                        <input type="text" class="form-control" id="inputCargo" placeholder="Cargo/Função">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputMatricula">Matrícula</label>
                        <input type="text" class="form-control" id="inputMatricula" placeholder="Matrícula">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputFolha">Folha</label>
                        <input type="text" class="form-control" id="inputFolha" placeholder="Folha">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputLotacao">Lotação</label>
                        <input type="text" class="form-control" id="inputLotacao" placeholder="Lotação">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputUnidade">Unidade/Setor</label>
                        <input type="text" class="form-control" id="inputUnidade" placeholder="Unidade">
                    </div>


                </div>
                <hr size="10" width="100%">
                <p class="text-center col-md-12 bg-info">REQUER AO:</p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlinePrefeito"
                                value="prefeito">
                            <label class="form-check-label" for="inlinePrefeito">Prefeito</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineSecretario"
                                value="secretario">
                            <label class="form-check-label" for="inlineSecretario">Secretário</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                id="inlinePresidente" value="presidente">
                            <label class="form-check-label" for="inlinePresidente">Presidente</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                id="inlineSuperintendente" value="superintendente">
                            <label class="form-check-label" for="inlineSuperintendente">Superintendente</label>
                        </div>
                    </div>
                </div>
                <hr size="10" width="100%">
                <p class="text-center col-md-12 bg-info">ASSUNTO:</p>

                <div class="form-row">
                    <div class="form-col col-md-4">
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto1"
                                    value="Autorização p/ afastamento p/ trato de interesse particular"
                                    style="transform: scale(1.5);">
                                <label class="form-check-label" for="inlineCheckbox1">Autorização p/ afastamento p/ trato
                                    de
                                    interesse particular</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto2"
                                    value="Autorização p/ incentivo a formação quando estudante"
                                    style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto2">Autorização p/ incentivo a formação
                                    quando estudante</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto3"
                                    value="Aposentadoria por tempo de serviço" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto3">Aposentadoria por tempo de
                                    serviço</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto4"
                                    value="Certidão/Declaração" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto4">Certidão/Declaração</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto5"
                                    value="Contagem em dobro de férias" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto5">Contagem em dobro de férias</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto6"
                                    value="Contagem em dobro de Licença Prêmio" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto6">Contagem em dobro de Licença
                                    Prêmio</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto7"
                                    value="Ultilização de Licensa Prêmio" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto7">Ultilização de Licensa
                                    Prêmio</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-col col-md-4">
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto8"
                                    value="Acompanhar cônjuge ou companheiro" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto8">Acompanhar cônjuge ou
                                    companheiro</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto9"
                                    value="Desempenhar mandato eletivo" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto9">Desempenhar mandato eletivo</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto10"
                                    value="Salário Família" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto10">Salário Família</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto11"
                                    value="Serviço militar obrigatório" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto11">Serviço militar
                                    obrigatório</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto12" value="Casamento"
                                    style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto12">Casamento</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto13" value="Luto"
                                    style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto13">Luto</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto14"
                                    value="Redução de carga horária" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto14">Redução de carga horária</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto15" value="Remoção"
                                    style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto15">Remoção</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-col col-md-4">
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto16"
                                    value="Disposição" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto16">Disposição</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto17"
                                    value="Readaptação" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto17">Readaptação</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto18"
                                    value="Gratificação de insalubridade" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto18">Gratificação de
                                    insalubridade</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto19"
                                    value="Gratificação de periculosidade/risco de vida" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto19">Gratificação de
                                    periculosidade/risco de vida</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto20"
                                    value="Adicional noturno" style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto20">Adicional noturno</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="checkboxAssunto21" value="Outros"
                                    style="transform: scale(1.5);">
                                <label class="form-check-label" for="checkboxAssunto21">Outros</label>
                            </div>
                        </div>
                    </div>
                </div>

                <hr size="10" width="100%">
                <p class="text-center col-md-12 bg-info">INFORMAÇÕES COMPLEMENTARES</p>

                <div class="form-group col-md-12">
                    <textarea class="form-control" rows="4" id="informacoesComplementares" placeholder="Digite aqui ..."></textarea>
                </div>
                <div class="form-row">

                    <div class="card text-center col-md-6">
                        <div class="card-header">
                            <p class="text-center card-title" style="font-size:13px">ASSINATURA DO REQUERENTE / DATA</p>
                        </div>
                        <div class="card-body">

                            <br><br>
                        </div>
                        <div class="card-footer">
                            <br>
                            <div style="display: flex; justify-content: space-between;">
                                <small class="text-muted">________________________________________________</small>
                                <small class="text-muted">______/______/______</small>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <small class="text-muted">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Assinatura</small>
                                <small class="text-muted">Data&emsp;&emsp;&emsp;&emsp;</small>
                            </div>
                        </div>
                    </div>

                    <div class="card text-center col-md-6">
                        <div class="card-header">
                            <p class="text-center card-title" style="font-size:13px">CARIMBO E ASSINATURA DO CHEFE
                                IMEDIATO / DATA</p>
                        </div>
                        <div class="card-body">

                            <br><br>
                        </div>
                        <div class="card-footer">
                            <br>
                            <div style="display: flex; justify-content: space-between;">
                                <small class="text-muted">________________________________________________</small>
                                <small class="text-muted">______/______/______</small>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <small class="text-muted">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Assinatura</small>
                                <small class="text-muted">Data&emsp;&emsp;&emsp;&emsp;</small>
                            </div>

                        </div>
                    </div>

                </div>



                <button type="submit" class="btn btn-primary">Gerar Requerimento</button>
            </form>

        </div>
    </div>
@stop

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#inputTelefone').mask('(00) 0 0000-0000');
            $('#inputCpf').mask('000.000.000-00');
        });
    </script>
@stop
