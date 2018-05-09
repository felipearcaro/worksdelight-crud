<!DOCTYPE html>
<html lang="en">

<head>

    <title>Grupo Santa Cruz</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="#">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="ico.png" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Grupo Santa Cruz - Sistema v1.0</a>
            </div>
            <!-- /.navbar-header -->

           
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>Cadastros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                   <li>
                                    <a href="cadastroProjeto.php">Projetos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="listaProjetos.php"><i class="fa fa-tasks fa-fw"></i> Projetos</a>
                        </li>
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		
	

       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de oportunidades</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
  
  
  <!-- Row start -->
  <div class="row">
    <div class="col-md-12 col-sm-6 col-xs-12">
        <form class="form-horizontal row-border" action="salvaFuncionario.php" method="POST"> 
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <i class="icon-calendar"></i>
                    <h3 class="panel-title">Cadastro</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Dados pessoais</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-xs-3">
                                     <input readonly="" value="data de hoje" name="data_insercao" class="form-control">
                                    <span class="help-block">Data de inserção</span>
                                </div>
                                <div class="col-xs-5">
                                    <select class="form-control" id="nome_insercao">
                                    <option>---</option>
                                    <option>Márcio Hillsesheim</option>
                                    <option>Nome 2</option>
                                    <option>Nome 3</option>
                                    <option>Nome 4</option>
                                    <option>Nome 5</option>
                                    <option>Nome 6</option>
                                    <option>Nome 7</option>
                                    </select>
                                    <span class="help-block">Nome</span>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control" id="relacionamento_cliente">
                                    <option>---</option>
                                    <option>1 Estrela</option>
                                    <option>2 Estrelas</option>
                                    <option>3 Estrelas</option>
                                    <option>4 Estrelas</option>
                                    <option>5 Estrelas</option>
                                    </select>
                                    <span class="help-block">Relacionamento com o cliente</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <i class="icon-calendar"></i>
                    <h3 class="panel-title">Cliente/Obra</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nome do cliente</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-xs-3">
                                    <input type="text" id="tel_client" class="form-control" placeholder="">
                                    <span class="help-block">Telefone do cliente</span>
                                </div>
                                <div class="col-xs-5">
                                    <input type="text" id="nome_cliente" class="form-control" placeholder="">
                                    <span class="help-block">Nome</span>
                                </div>
                                <div class="col-xs-4">
                                    <select class="form-control" id="etapa_obra">
                                    <option>---</option>
                                    <option>Projeto</option>
                                    <option>Fundação</option>
                                    <option>Alvenaria</option>
                                    <option>Laje</option>
                                    <option>Rebocos</option>
                                    <option>Acabamentos</option>
                                    </select>
                                    <span class="help-block">Etapa da obra</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">Dados físicos</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" id="end_cliente" class="form-control" placeholder="">
                                    <span class="help-block">Endereço</span>
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" id="area_construcao" class="form-control" placeholder="">
                                    <span class="help-block">Área de construção</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Obra</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="text" id="previsao_conclusao" class="form-control" placeholder="">
                                    <span class="help-block">Previsão de conclusão</span>
                                </div>
                                <div class="col-xs-6">
                                    <input type="text" id="previsao_custo" class="form-control" placeholder="">
                                    <span class="help-block">Previsão de custo total da obra</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Profissionais</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-xs-5 form-check">
                                    <input class="form-check-input" type="checkbox" id="arq-int">
                                    <label class="form-check-label select-prof" for="arq-int">Arquiteto Interiores</label><br>
                                    <input class="form-check-input" type="checkbox" id="arq-arq">
                                    <label class="form-check-label select-prof" for="arq-arq">Arquiteto Arquitetônico</label><br>
                                    <input class="form-check-input" type="checkbox" id="engenheiro">
                                    <label class="form-check-label select-prof" for="engenheiro">Engenheiro</label><br>
                                    <input class="form-check-input" type="checkbox" id="construtor">
                                    <label class="form-check-label select-prof" for="construtor">Construtor</label><br>
                                    <input class="form-check-input" type="checkbox" id="designer">
                                    <label class="form-check-label select-prof" for="designer">Designer</label><br>
                                    <input class="form-check-input" type="checkbox" id="paisagista">
                                    <label class="form-check-label select-prof" for="paisagista">Paisagista</label>
                                </div>
                                <div class="col-xs-7">
                                    <textarea rows="5" type="text" id="previsao_conclusao" class="form-control" placeholder=""></textarea>
                                    <span class="help-block">Descrição dos profissionais da obra</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <i class="icon-calendar"></i>
                    <h3 class="panel-title">Outras informações</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Restrição</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-xs-3">
                                     <select class="form-control" id="restricao">
                                    <option>---</option>
                                    <option>Sim</option>
                                    <option>Não</option>
                                    </select>
                                    <span class="help-block">Sim ou não</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Restrição</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-xs-5">
                                    <textarea rows="5" type="text" id="obs_restricao" class="form-control" placeholder=""></textarea>
                                    <span class="help-block">Observação sobre restrição</span>
                                </div>
                                <div class="col-xs-5">
                                    <textarea rows="5" type="text" id="restricao_geral" class="form-control" placeholder=""></textarea>
                                    <span class="help-block">Restrição geral</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-toolbar panel-padding">
                <a onclick="location.href='#'"id="" class="btn btn-danger pull-right">Voltar</a>
                <a onclick="location.href='#'" class="btn btn-info pull-right">Adicionar</a>
            </div>
        </form>
    </div>
  </div>
  <!-- Row end -->
</div> 
</div>
			


    <!-- /#wrapper -->
	
	
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
