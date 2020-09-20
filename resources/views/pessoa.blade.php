@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

</head>

        <!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Pessoas</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de Pessoas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>E-mail</th>
                      <th>Data Nascimento</th>
                      <th>Sexo</th>
                      <th>Chapa</th>
                      <th>Opções</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>E-mail</th>
                      <th>Data Nascimento</th>
                      <th>Sexo</th>
                      <th>Chapa</th>
                      <th>Opções</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($pessoa as $pessoa)
                    <tr>
                      <td>{{ $pessoa->user->nome }}</td>
                      <td>{{ $pessoa->user->cpf }}</td>
                      <td>{{ $pessoa->user->email }}</td>
                      <td>{{ $pessoa->dt_nascimento }}</td>
                      <td>{{ $pessoa->sexo }}</td>
                      <td>{{ $pessoa->id_chapa }}</td>
                      <td>{{ $pessoa->id_chapa }}</td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


</body>

</html>
@endsection
