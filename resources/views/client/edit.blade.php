<x-app-layout>
  
    <form action="" method="POST">
        @csrf
    <div class="py-8">
      
        {{-- Warning bar --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> You are editing client information.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
<div class="container">
<div class="col" id="left-col">
{{-- Action card --}}

    <div class="row">
        <div class="col-sm-4">
          
            <div class="card" id="action-card">
              <div class="card-body">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Name</span>
                  <input type="text" name="client_name" class="form-control"  aria-describedby="client name" value="{{ $clients->client_name }}">
                </div>
                <p class="card-text">Client Reference: {{ str_pad($clients->id, 6, '0', STR_PAD_LEFT) }}<br>{{ $clients->service }}</p></p>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                              <a href="{{ url('client/'.$clients->id)}}" class="btn btn-danger">Cancel</a> 
                    
                </div> 
              </div>
            </div>
          
        
     

{{-- Risk status bar --}}

  
    <div class="alert alert-warning" role="alert" id="risk-status-bar">
      Client Risk status is:
<div class="form-group">
              <select name="risk_status" class="form-control" id="" value="{{ $clients->risk_status }}">
                <option value="None" {{ $clients->risk_status=="None" ? "selected" : ''}}>None</option>
                <option value="Low" {{ $clients->risk_status=="Low" ? "selected" : ''}}>Low</option>
                <option value="Medium" {{ $clients->risk_status=="Medium" ? "selected" : ''}}>Medium</option>
                <option value="High" {{ $clients->risk_status=="High" ? "selected" : ''}}>High</option>
                <option value="Imminent" {{ $clients->risk_status=="Imminent" ? "selected" : ''}}>Imminent</option>
              </select>
            </div>
    
  </div>
  

    {{--  info card --}}
    
        
            <table class="table align-middle table-borderless" id="info-card">
                <tbody>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">Status:</th>
                    <td><div class="form-group">
                      <select name="status" class="form-control" value="{{ $clients->status }}">
                        <option value="New" {{ $clients->status=="New" ? "selected" : ''}}>New</option>
                        <option value="In Treatment" {{ $clients->status=="In Treatment" ? "selected" : ''}}>In Treatment</option>
                        <option value="Discharged" {{ $clients->status=="Discharged" ? "selected" : ''}}>Discharged</option>
                      </select>
                    </div></td>
                    </tr>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">Date of birth:</th>
                    <td><div class="input-group mb-3">
                      <input type="date" name="date_of_birth" class="form-control"  aria-describedby="client date of birth" value="{{ $clients->date_of_birth }}">
                    </div></td>
                    </tr>
                    <tr class="client-row">
                      <th scope="row" class="client-spacing">Phone:</th>
                      <td><div class="input-group mb-3">
                        <input type="text" name="phone" class="form-control"  aria-describedby="client's phone number" value="{{ $clients->phone }}">
                      </div></td>
                    </tr>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">Email:</th>
                    <td><div class="input-group mb-3">
                      <input type="text" name="email" class="form-control"  aria-describedby="client's email" value="{{ $clients->email }}">
                    </div></td>
                    </tr>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">Address:</th>
                    <td><div class="input-group mb-3">
                      <input type="text" name="address" class="form-control"  aria-describedby="client's address" value="{{ $clients->address }}">
                    </div></td>
                  </tr>
                    <th scope="row" class="client-spacing">Post Code:</th>
                    <td><div class="input-group mb-3">
                      <input type="text" name="post_code" class="form-control"  aria-describedby="client's Post code" value="{{ $clients->post_code }}">
                    </div></td>
                    
                    </tr>
                </tbody>
                <tfoot>
                </tfoot>
                </table>
        
    
    {{-- Form Submission button --}}
  </form>




{{-- end of left collumn --}}
</div>

      {{-- Appointments --}}
  <div class="col">
    <h3>Appointments</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>01/01/2022</td>
          <td>20:00</td>
          <td>Completed</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>01/01/2022</td>
          <td>20:00</td>
          <td>Cancelled</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>01/01/2022</td>
          <td>20:00</td>
          <td>Booked</td>
        </tr>
      </tbody>
    </table>
  </div>
  {{-- Appointments end --}}
    



{{-- container end --}}
</div>


</x-app-layout>


