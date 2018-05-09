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
                    <h1 class="page-header">Registros</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            
        <div class="row">
            <div class="col-lg-12">
                <form id="convFilter" class="form-horizontal" action="/admin/conversations/filter">
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="keywords">Nome do cliente</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="keywords" id="keywords" placeholder="Ex: Nome do cliente">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="dialogAct">Etapa da obra</label>
                       <div class="col-sm-8">
                      <input type="text" class="form-control" name="dialogAct" id="dialogAct" placeholder="Ex: Etapa da obra">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="toDate">Profissionais da obra</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="toDate" placeholder="Ex: Previsão de conclusão">
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ">
                      <label class="col-sm-4 control-label" for="fromDate">Previsão de conclusão</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="fromDate" placeholder="Ex: Profissional da obra">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="toDate">Previsão de custo total da obra</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="toDate" placeholder="Ex: Previsão de conclusão">
                      </div>
                    </div>
                     
                    
              </div>
                  <div>
                        <div class="btn-toolbar panel-padding2 center-block">
                    <button  class="btn btn-primary">Filtrar</button>
                    </div>
                    </div>
              </form>
        </div>
		   
		   
           <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome do cliente</th>
                                            <th>Etapa da obra</th>
                                            <th>Previsão de conclusão</th>
                                            <th>Previsão de custo total da obra</th>
                                            <th>Profissionais da obra</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Informação 1</td>
                                            <td>Informação 2</td>
                                            <td>Informação 3</td>
                                            <td>Informação 4</td>
                                            <td>Informação 5</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Informação 1</td>
                                            <td>Informação 2</td>
                                            <td>Informação 3</td>
                                            <td>Informação 4</td>
                                            <td>Informação 5</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Informação 1</td>
                                            <td>Informação 2</td>
                                            <td>Informação 3</td>
                                            <td>Informação 4</td>
                                            <td>Informação 5</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>Informação 1</td>
                                            <td>Informação 2</td>
                                            <td>Informação 3</td>
                                            <td>Informação 4</td>
                                            <td>Informação 5</td>
                                        </tr>
										
                                                      
                                    </tbody>
                                </table>
                            </div>
        </div>
        <!-- /#page-wrapper -->

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
