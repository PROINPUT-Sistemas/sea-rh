@extends('layouts.default')
@section('content')

    <div class="container-fluid">
        <div class="side-body padding-top">
            <div class="row">
                <div class="x_content">

                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                        <div class="profile_img">

                            <!-- end of image cropping -->
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <div class="avatar-view" title="Change the avatar">
                                    <img src="$linha['FOTO']" height="220" width="220" alt="SEM FOTO">
                                </div>

                                <!-- Cropping modal -->
                                <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" type="button">&times;</button>
                                                    <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="avatar-body">

                                                        <!-- Upload image and data -->
                                                        <div class="avatar-upload">
                                                            <input class="avatar-src" name="avatar_src" type="hidden">
                                                            <input class="avatar-data" name="avatar_data" type="hidden">
                                                            <label for="avatarInput">Local upload</label>
                                                            <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                                        </div>

                                                        <!-- Crop and preview -->
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <div class="avatar-wrapper"></div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="avatar-preview preview-lg"></div>
                                                                <div class="avatar-preview preview-md"></div>
                                                                <div class="avatar-preview preview-sm"></div>
                                                            </div>
                                                        </div>

                                                        <div class="row avatar-btns">
                                                            <div class="col-md-9">
                                                                <div class="btn-group">
                                                                    <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                                                    <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                                                    <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                                                    <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                                                    <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                                                    <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                                                    <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="modal-footer">
                                  <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                </div> -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->

                                <!-- Loading state -->
                                <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                            </div>
                            <!-- end of image cropping -->

                        </div>
                        <h3>['NOMEFUNCIONARIO']</h3>

                        <ul class="list-unstyled user_data">
                            <li><i class="fa fa-map-marker user-profile-icon"></i> $linha['ENDERECO'] ,RO'] , 'COMPLEMENTO'], 
                            </li>

                            <li>
                                <i class="fa fa-briefcase user-profile-icon"></i> 
                            </li>

                            <li class="m-top-xs">
                                <i class="fa fa-external-link user-profile-icon"></i> Funcionário Ativo: <</a>
                            </li>
                        </ul>

                        <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i> Editar Dados</a>
                        <a class="btn btn-danger" target="_blank" href="imprimir_ficha.php?id="><i class="fa fa-print m-right-xs"></i> Imprimir Ficha para Assinar</a>
                        <br />

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Documentações</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Ocorrências</a>
                                </li>
                                <li role="presentation" class="active"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Dados do Funcionário</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">

                                    <!-- start user projects -->
                                    <table class="data table table-striped no-margin">
                                        <thead>
                                        <tr>
                                            <th>DOCUMENTO ENVIADO</th>
                                            <th>OPÇÕES</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                            echo '<td>'.$DOC.'</td>';
                                            echo '<td> <a class="btn btn-danger btn-sm" target="_blank" href="'.$LINK.'"><i class="fa fa-search m-right-xs"></i> Visualizar Documentação</a>
</td>
                                        </tbody>
                                    </table><br>
                                    <center><a class="btn btn-danger btn-sm" href="adicionar-documentacao.php?id="><i class="fa fa-check-square-o m-right-xs"></i> Adicionar Documentação</a></center>
                                    <!-- end user projects -->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                    <!-- start user projects -->
                                    <table class="data table table-striped no-margin">
                                        <thead>
                                        <tr>
                                            <th>TIPO DE OCORRÊNCIA</th>
                                            <th>SOLICITANTE DA OCORRÊNCIA</th>
                                            <th>DATA OCORRÊNCIA</th>
                                            <th>OPÇÔES</th>

                                        </tr>
                                        </thead>

                                        <tbody>


                                            echo '<td>'.$TIPOOCORRENCIA.'</td>';
                                            echo '<td>'.$SOLICITANTE.'</td>';
                                            echo '<td>'.$DATAOCORRENCIA.'</td>';
                                            echo '<td> <a class="btn btn-danger btn-sm" target="_blank" href=""><i class="fa fa-search m-right-xs"></i> Visualizar Ocorrência</a></td>


                                            echo "</tr>";

                                        </tbody>
                                    </table>
                                    <!-- end user projects -->
                                    <br>
                                    <center><a class="btn btn-danger btn-sm" href="adicionar-ocorrencia.php?id= echo $linha['ID']?>"><i class="fa fa-check-square-o m-right-xs"></i> Adicionar Ocorrência</a></center>


                                </div>
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content3" aria-labelledby="profile-tab">
                                    <div class="card-body">
                                        <table width='837' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td width='837'><h1>Dados do Funcionário:</h1>
                                                </td>
                                            </tr>
                                        </table>
                                        <table width='837' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td width='836'><table width='836' border='0'>
                                                        <tr>
                                                            <td width='162'><b>Nome Completo:</b></td>
                                                            <td width='764'> echo $linha['NOMEFUNCIONARIO'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Data de Nascimento:</b></td>
                                                            <td> echo $linha['DATANASCIMENTO'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td height='21'><b>Sexo:</b></td>
                                                            <td> echo $linha['SEXO'] ?>&nbsp;&nbsp;&nbsp;&nbsp; <b>Grau De Escolaridade:&nbsp;&nbsp;&nbsp;  echo $linha['GRAUESCOLARIDADEL'] ?></b></td>
                                                        </tr>
                                                        <tr>
                                                            <td height='21'><b>Telefone Residencial:</b></td>
                                                            <td> echo $linha['TELEFONERESIDENCIAL'] ?>&nbsp;&nbsp;&nbsp;&nbsp; <b>Telefone Celular:</b>&nbsp;&nbsp;&nbsp;  echo $linha['TELEFONECELULAR'] ?> &nbsp;&nbsp;&nbsp;&nbsp; <b>Telefone de Recado:</b>&nbsp;&nbsp;&nbsp;  echo $linha['TELEFONERECADO'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td height='21'><b>Estado Civil:</b></td>
                                                            <td> echo $linha['ESTADOCIVIL'] ?>&nbsp; &nbsp; &nbsp; &nbsp; <b>Filhos:</b>  echo $linha['FILHOS'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td height='21'><b>Endereço:</b></td>
                                                            <td> echo $linha['ENDERECO'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Nº:</b> echo $linha['NUMERO'] ?>&nbsp;&nbsp;&nbsp;<b>Complemento:</b>  echo $linha['COMPLEMENTO'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td height='21'><strong>Bairro/Municipio:</strong></td>
                                                            <td> echo $linha['BAIRRO'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>UF:</b>  echo $linha['UF'] ?>&nbsp;&nbsp;&nbsp;<b>CEP:</b>&nbsp; echo $linha['CEP'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td height='21'><b>CPF:</b></td>
                                                            <td> echo $linha['CPF'] ?>&nbsp;&nbsp;&nbsp;<b>RG:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo $linha['RG'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td height='21'><b>Nome da Mãe:</b></td>
                                                            <td> echo $linha['NOMEMAE'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td height='21'><b>Nome do Pai:</b></td>
                                                            <td> echo $linha['NOMEPAI'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td height='21'><b>Email:</b></td>
                                                            <td> echo $linha['EMAIL'] ?></td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table>
                                        <h1>Dados Admissionais(Uso da Empresa):</h1>
                                        <table width='836' border='0' cellspacing='0' cellpadding='0'>

                                            <tr>
                                                <td width='152'><b>Admissão:</b></td>
                                                <td width='776'> echo $linha['DATAADMISSAO'] ?> &nbsp;&nbsp;&nbsp; <b>Empresa:</b>&nbsp;&nbsp; echo $linha['EMPRESA'] ?>;&nbsp;&nbsp; <b>Salário:</b>&nbsp;&nbsp; echo $linha['SALARIO'] ?>;&nbsp;&nbsp;<b>Horário de Expediente:</b>&nbsp; echo $linha['HORAEXPEDIENTE'] ?> </td>
                                            </tr>
                                            <tr>
                                                <td><b>Departamento:</b></td>
                                                <td> echo $linha['DEPARTAMENTO'] ?>&nbsp;&nbsp;&nbsp; <b>Cargo:</b> &nbsp;&nbsp;&nbsp;&nbsp; <b>Supervisor:</b> &nbsp;&nbsp;&nbsp; <b>Matricula:</b> &nbsp;</td>
                                            <tr>
                                                <td><b>Banco:</b></td>
                                                <td> &nbsp;&nbsp;&nbsp; <b>Agência:</b> &nbsp;  &nbsp;&nbsp;&nbsp; <b>Conta:</b>&nbsp;&nbsp; <b>Tipo de Conta:</b> &nbsp;  </td>
                                            </tr>
                                            <tr>
                                                <td><b>Vale Transporte:</b></td>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp; <b>Valor:</b> &nbsp;&nbsp;&nbsp; <b>Plano de Saúde:</b> &nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><b>Vale Refeição:</b></td>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp; <b>Valor:</b>&nbsp;&nbsp;&nbsp; <b>Auxilio Creche:</b> &nbsp;&nbsp;&nbsp;&nbsp; <b>Comissão:</b> </td>
                                            </tr>
                                        </table>








                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


@endsection