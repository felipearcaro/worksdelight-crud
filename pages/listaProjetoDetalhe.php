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
                    <h1 class="page-header">Projeto #NUMERO - Cliente #NOME</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
		   
		   
           <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><b>Data inserção</b></td>
                                            <td>10/05/2018</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Nome</b></td>
                                            <td>Márcio Hillsesheim</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Relacionamento com o cliente</b></td>
                                            <td>5 estrelas</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Nome do cliente</b></td>
                                            <td>Felipe Arcaro</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Endereço da obra</b></td>
                                            <td>Av. Saudades 120, Bloco 2 - Porto Alegre, RS - XX.XXX-XXX</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Telefone do cliente</b></td>
                                            <td>(XX) XXXX-XXXX</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Etapa da obra</b></td>
                                            <td>Laje</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Previsão de conclusão</b></td>
                                            <td>12/12/2018</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Área de construção</b></td>
                                            <td>120 m2</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Previsão de custo total da obra</b></td>
                                            <td>R$1MM</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Profissionais da obra</b></td>
                                            <td>Engenheiro; Designer</td>
                                        </tr>
                                         <tr class="odd gradeX">
                                            <td><b>Descrição dos profissionais da obra</b></td>
                                            <td>Engenheiro: Engenharia LTDA; Designer: Marketing LTDA</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Restrição de contrato</b></td>
                                            <td>Não</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Observação de restrição</b></td>
                                            <td>-</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td><b>Observação geral</b></td>
                                            <td>Amigo de infância</td>
                                        </tr>
    
                                    </tbody>
                                </table>
                <div class="btn-toolbar panel-padding">
                <a onclick="location.href='#'"id="" class="btn btn-danger pull-right">Excluir</a>
                <button type="submit" name="submit" class="btn btn-info pull-right">Editar</button>
            </div>
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
