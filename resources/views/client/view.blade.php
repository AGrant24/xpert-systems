
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{-- Action card --}}

    <div class="row">
        <div class="col-sm-4">
          
            <div class="card" id="action-card">
              <div class="card-body">
                <h1 class="card-title">{{ $clients->client_name }}</h1>
                <p class="card-text">Client Reference: {{ str_pad($clients->id, 6, '0', STR_PAD_LEFT) }}</p>
                <a role="button" class="btn btn-primary" href="{{ url('client/edit/'.$clients->id) }}">Edit</a>
              </div>
            </div>
          
        </div>
     </div>

{{-- Risk status bar --}}
<div class="row">
  <div class="col-sm-4">
    <div class="alert alert-warning" role="alert" id="risk-status-bar">
      Client Risk status is: {{ $clients->risk_status }}
    </div>
  </div>
</div>
    {{--  info card --}}
    <div class="row">
        <div class="col-sm-4">
            <table class="table align-middle table-borderless" id="info-card">
                <thead>
                    <tr class="info-card-header align-middle">
                    <th scope="col">Contact Information</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                
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
                    <th scope="row" class="client-spacing">Contact number:</th>
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
        </div>
    </div>
    {{-- Appointments --}}
</x-app-layout>


