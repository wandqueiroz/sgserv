@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>FORMULÁRIO DE COMUNICAÇÃO DE CONCESSÃO DE FÉRIAS</h1>
@stop

@section('content')

    <div class="container">
        <form>
            <div class="form-group">
                <label for="inputNome">Nome do Servidor</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Nome">
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
                <div class="form-group col-md-4">
                    <label for="inputCargo">Ano de Referência</label>
                    <input type="text" class="form-control" id="inputCargo" placeholder="Cargo/Função">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputMatricula">Matrícula</label>
                    <input type="text" class="form-control" id="inputMatricula" placeholder="Matrícula">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputFolha">Folha</label>
                    <input type="text" class="form-control" id="inputFolha" placeholder="Folha">
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
            </button>
        </form>



    </div>



    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="folha">


                        <form>
                            <div style="display: flex; justify-content: space-between;">
                                <img src="{{ asset(config('adminlte.logo_horizontal')) }}" height="130">
                                <h5>ORGÃO: SDHDS</h5>

                            </div>
                            <h4 class="text-right col-md-12"><strong>COMUNICAÇÃO DE CONCESSÃO DE FÉRIAS</strong></h4>

                            <hr size="10" width="100%">
                            <div class="form-group">
                                <label for="inputNome">Nome do Servidor</label>
                                <input type="text" class="form-control" id="inputNome" placeholder="Nome">
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


                            <div class="card ">
                                <p>Sr. (a) Diretor (a)</p>
                                <br>
                                <p>Conforme normas regulamentares de concessão de férias para os servidores da
                                    <strong>PREFEITURA
                                        MUNICIPAL DE FORTALEZA</strong>,
                                    comunicamos-lhe que as férias do servidor supra mencionado relativas ao ano de
                                </p>
                                <input type="number" placeholder="ano">
                            </div>

                            <div class="form-row">

                                <div class="card text-center col-md-6">
                                    <div class="card-header">
                                        <p class="text-center card-title" style="font-size:13px">ASSINATURA DO
                                            REQUERENTE / DATA
                                        </p>
                                    </div>
                                    <div class="card-body">

                                        <br><br>
                                    </div>
                                    <div class="card-footer">
                                        <br>
                                        <div style="display: flex; justify-content: space-between;">
                                            <small
                                                class="text-muted">________________________________________________</small>
                                            <small class="text-muted">______/______/______</small>
                                        </div>
                                        <div style="display: flex; justify-content: space-between;">
                                            <small
                                                class="text-muted">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Assinatura</small>
                                            <small class="text-muted">Data&emsp;&emsp;&emsp;&emsp;</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="card text-center col-md-6">
                                    <div class="card-header">
                                        <p class="text-center card-title" style="font-size:13px">CARIMBO E ASSINATURA
                                            DO CHEFE
                                            IMEDIATO / DATA</p>
                                    </div>
                                    <div class="card-body">

                                        <br><br>
                                    </div>
                                    <div class="card-footer">
                                        <br>
                                        <div style="display: flex; justify-content: space-between;">
                                            <small
                                                class="text-muted">________________________________________________</small>
                                            <small class="text-muted">______/______/______</small>
                                        </div>
                                        <div style="display: flex; justify-content: space-between;">
                                            <small
                                                class="text-muted">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Assinatura</small>
                                            <small class="text-muted">Data&emsp;&emsp;&emsp;&emsp;</small>
                                        </div>

                                    </div>
                                </div>

                            </div>



                            <button type="submit" class="btn btn-primary">Gerar Requerimento</button>
                        </form>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>




    {{--  --}}



@stop

@section('css')
    <style type="text/css">
        .folha {
            background-image: linear-gradient(rgba(254, 255, 217, 0.9) 0%, rgba(254, 255, 217, 0.9) 100%), url('{{ asset(config('adminlte.logo_img')) }}');
            background-repeat: no-repeat;
            background-size: 100%;
        }
    </style>
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
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        });
    </script>
@stop
