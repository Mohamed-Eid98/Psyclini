@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/datatable_style.css">
    <title>History - Psyclini</title>
    
</head>
<body>
  <div class="container mt-4">
    <div class="col-lg-12">
      <div class="feature-item ">
        <h4 class="mb-3 blue-title">Appointments' History</h4>
        <div class="table-responsive user-table">
          <table class="table table1 p-2 text-center" id="table1">
            <thead> 
              <tr class="justify-content-between blue-title text-center">
                
                <th class="text-center">Date</th>
                <th class="text-center">Time</th>
				        <th class="text-center">Massage</th>
               
              </tr>
            </thead>
            <tbody>
			@foreach($appointment as $appointment)
              <tr>
               
                <td>{{$appointment->date}}</td>
                <td>{{$appointment->time}}</td>
                <td>{{$appointment->massage}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> 

  <!--footer Section begin-->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top my-footer">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">&copy; 2022 Ain Shams Uni. , Faculty of Science,<br> Maths. Department. </span>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <a href="index.html" class="a-no-decor"><img src="../img/icon.png" width="45"></a>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted a-no-decor bi" href="https://github.com/AlyaaRushdy/Psyclini"><i class="icofont-github"></i></a></li>
        <li class="ms-3"><a class="text-muted a-no-decor bi" href="https://www.facebook.com/FacultyofScienceASU/"><i class="icofont-facebook"></i></a></li>
      </ul>
    </footer>
  </div>
  <!--footer section end-->

  
  <script src="../js/simple-datatables.js"></script>
  <script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1, {
      columns: [
        { select: 3, sortable: false }
      ]
    });
  </script>
</body>
</html>

@endsection
