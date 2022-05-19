@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Psyclini ADMIN/index</title>
  
  <link rel="stylesheet" href="../css/admin_bootstrap.css">
  <link rel="stylesheet" href="../css/icofont.css">
  <link rel="stylesheet" href="../css/admin main style.css">
  <link rel="stylesheet" href="../css/datatable_style.css">
  <link rel="icon" href="../img/icon.png">
</head>

<body>    
    <div id="main">

      <header class="mb-4">
        <a href="#" class="burger-btn d-block d-xl-none"><i class="icofont-navigation-menu fs-3"></i></a>
      </header>

      <div class="container">
        <div class="card shadow mb-4 ml-3">
          <div class="card-body">
            <div class="table-responsive ">
                <table class="table" id="table1">
                    <thead> 
                        <tr class="justify-content-between">
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th class="w-15">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Marwa Mohammad</td>
                        <td>01123456789</td>
                        <td>mohammed_mostafa@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Mohammed Mostafa </td>
                        <td>01112334533</td>
                        <td>esraa_adel@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Alyaa Ahmed</td>
                        <td>01123456789</td>
                        <td>esraa_adel@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Sahar Khaled</td>
                        <td>01123456789</td>
                        <td>esraa_adel@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Mohammad Eid</td>
                        <td>01123456789</td>
                        <td>esraa_adel@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Marwa Mohammad</td>
                        <td>01123456789</td>
                        <td>mohammed_emad@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Marwa Mohammad</td>
                        <td>01123456789</td>
                        <td>mohammed_emad@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Marwa Mohammad</td>
                        <td>01123456789</td>
                        <td>mohammed_emad@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Marwa Mohammad</td>
                        <td>01123456789</td>
                        <td>mohammed_emad@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Marwa Mohammad</td>
                        <td>01123456789</td>
                        <td>mohammed_emad@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Marwa Mohammad</td>
                        <td>01123456789</td>
                        <td>mohammed_emad@gmail.com</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#post-modal"> View </button>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title " id="exampleModalCenterTitle"> Message Content </h5>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-lg-3 pl-2">
                          <label > Message : </label>
                        </div>
                        <div class="col-lg-9 pb-1">
                          <label >
                            Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis.
                            Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <span class="d-none d-sm-block">OK</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>

    </div>
  </div>


  
  <script src="../js/bootstrap.bundle.js"></script> 
  <script src="../js/admin main script.js"></script>
  <script src="../js/simple-datatables.js"></script>
    <script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
    </script>
</body>

</html>
@endsection