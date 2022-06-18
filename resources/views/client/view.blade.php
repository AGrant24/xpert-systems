
<x-app-layout>
  <div class="container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="col" id="left-col">
  
{{-- Action card --}}
    <div class="row">
        <div class="col-sm-4">
            <div class="card" id="action-card">
              <div class="card-body">
                <h2 class="card-title">{{ $clients->client_name }}</h2>
                <p class="card-text">Client Reference: {{ str_pad($clients->id, 6, '0', STR_PAD_LEFT) }}<br>{{ $clients->service }}</p>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a role="button" class="btn btn-primary" href="{{ url('client/edit/'.$clients->id) }}">Edit</a>
                  </div>
              </div>
            </div>


{{-- Risk status bar --}}
    <div class="alert alert-warning" role="alert" id="risk-status-bar">
      Client Risk status is: {{ $clients->risk_status }}
    </div>


    {{--  info card --}}
            <table class="table align-middle table-borderless" id="info-card">
                <tbody>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">Status:</th>
                    <td>{{ $clients->status }}</td>
                    </tr>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">Date of birth:</th>
                    <td>{{ $clients->date_of_birth }}</td>
                    </tr>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">Phone:</th>
                    <td>{{ $clients->phone }}</td>
                    </tr>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">Email:</th>
                    <td>{{ $clients->email }}</td>
                    </tr>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">Address:</th>
                    <td>{{ $clients->address }}<br>{{ $clients->post_code }}</td>
                    </tr>
                </tbody>
                <tfoot>
                </tfoot>
                </table>

{{-- end of left col --}}
</div>

{{-- Notes
<div class="col">
  <h3>Notes</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td><p class="notes">00/00/0000 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          
          00/00/0000 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </td>
      </tr>
     
    </tbody>
  </table> --}}
  {{-- Appointments --}}
  <div class="col">
    <h3>Appointments</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
  
</div>


{{-- container end --}}
  </div>
</x-app-layout>


