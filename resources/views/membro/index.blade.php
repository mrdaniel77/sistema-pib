@include('layout.header');
@include('layout.navbar');
@include('layout.sidebar');

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Membros</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item "><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Membros</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.content-header -->

    <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->

      <div class="card">
        <div class="card-header">

        <!--   <div class="alert alert-info" style=" width:350px; float:left;">
            Nenhum registro encontrado!
          </div>
          -->
          <div class="card-tools" style="margin-top:8px;">
            <form action="">
              <div class="input-group " style="width: 150px; ">
                <input type="search" id="form1" class="form-control" name="pesquisa">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap table-bordered ">
            <tbody>
              <tr>
                <th scope="col">#</th>
                
                <th>Nome</th>
                <th>Telefone</th>
                <th>Data de nascimento</th>
                <th>Idade</th>
                
                <th></th>
              </tr>
            </tbody>
            <tbody>
              @foreach ($dados as $t)
                  
              
              <tr>
                <td> {{$t->id}} </td>
                <td> {{$t->nome}} </td>
                <td> {{$t->telefone}} </td>
                <td> {{$t->nascimento}} </td>
                <td> {{$t->idade}} </td>
                
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-eye"></i></button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Perfil</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                                <!--conteudo modal-->    

                                <div class="modal-body ">
                          
                                <div class="card bg-light d-flex flex-fill">
                                    <div class="card-header text-muted border-bottom-0">
                                    <!--CARGO--> Desenvolvedor
                                    </div>
                                    <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-8 d-flex align-items-stretch flex-column">
                                        <h2 class="lead"><b>Daniel Monteiro<!--NOME--></b></h2>
                                        <p class="text-muted text-sm"><b>Aniversário: 19/01/1999 -  </b> 23 Anos   </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Address:</b> QR 121 conjunto A casa 13</li>
                                            <br>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <b>Telefone #:</b> +55 61 99999-5555 <!--telefone--></li>
                                        </ul>
                                        </div>
                                        <div class="col-4 text-center">
                                        <img src="../img/Daniel.jpeg" alt="user-avatar" class="img-circle img-fluid" height="128" width="128" style="margin-left:5px">
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>
                                  
                              </div>
                                    
                                <!--/.conteudo modal-->  
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                      </div>
                    </div>
                    
                  <a href="fornecedores/editar/" class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger" onclick="deleta('/membro/deletar/'{{$item->id})">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
        <div class="row d-flex justify-content-center" style="margin:10px;">
          <a href="/membro/novo" class="btn btn-primary w-50" >
              Novo Membro <i class="fas fa-plus" ></i>
          </a>
        </div>
        <!-- /.card-body -->
      </div>

    <!-- /.row (main row) -->
    </div><!-- /.container-fl uid -->
  </section>

<!-- /.content -->
</div>

@include('layout.footer');