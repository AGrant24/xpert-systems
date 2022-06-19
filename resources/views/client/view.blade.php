
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
                    <a class="btn btn-dark" href="{{ route('all.client') }}" role="button">Back</a>
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

{{-- Appointments --}}
<div class="col">
  <h3>
      Appointments
      <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addNewAppointment">
        Add appointment
                <i class="far fa-plus-square" id="add-client-button"></i>
      </button>
  </h3>

  @if (Session::has('message'))
  <div class="alert alert-success alert-block">
    <strong>{{ Session::get('message') }}</strong>
  </div>
  @endif

  @if($errors->any())
  <div class="alert alert-danger">
    <b>Errors</b><br>
    @foreach($errors->all() as $error)
      {{$error}}<br>
    @endforeach
  </div>
  @endif

  
  
  <!-- The Modal -->
  <div class="modal" id="addNewAppointment">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" action="{{route('appointment.store')}}">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add new appointment</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            
            @include('partials.appointment-form',['appointment' => null])
              <input type="hidden" name="client_id" value="{{$clients->id}}" />
            
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end The Modal -->

  <table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Status</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Duration</th>
        <th scope="col">Invoiced</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($clients->appointments as $appointment)
      <tr>
        <td scope="row">{{$loop->iteration }}</th>
        <td>{{$appointment->status}}</td>
        <td>{{$appointment->date}}</td>
        <td>{{$appointment->time}}</td>
        <td>{{$appointment->duration}}</td>
        <td>{{ ($appointment->invoiced) ? ' Yes' : ' No'}}</td>
        <td>
          <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateAppointment_{{$appointment->id}}">Edit</a>
           <!-- The Modal -->
            <div class="modal" id="updateAppointment_{{$appointment->id}}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="post" action="{{route('appointment.update',[$appointment])}}">
                    @method('PUT')
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Edit appointment {{$appointment->id}}</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      
                        @include('partials.appointment-form',['appointment' => $appointment])
                        <input type="hidden" name="client_id" value="{{$clients->id}}" />
                      
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- end The Modal -->

          <form method="POST" style="float:right; display: inline" action="{{route('appointment.destroy',[$appointment])}}">
            @csrf
            @method('DELETE')

            <div class="form-group">
                <input type="submit" class="btn btn-danger btn-sm" onClick='return confirm("Are you sure?")' value="Delete">
            </div>
         </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


{{-- container end --}}
  </div>
</x-app-layout>


