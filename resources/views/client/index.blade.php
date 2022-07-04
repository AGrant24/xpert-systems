
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

{{-- Client list --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="client-container">

                {{-- Top section --}}
                <div id="top-section">
                    <div class="client-search">
                        <div class="row height d-flex justify-content-left align-items-left">
                            <div class="col-md-8">
                                
{{-- Search bar --}}
<div class="form"><i class="fa fa-search"></i><input type="text" class="form-control form-input" placeholder="Search for client"> <span class="left-pan"></span>
</div>
 {{-- Search bar end --}}

                            </div>
                        </div>
                    </div>

                    
                    {{-- Add client Modal --}}

                    <div id="add-button">
                        {{-- <button type="button" class="btn btn-light">Add Client</button> --}}
                        {{-- Add Client Button --}}

                        
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><b>ADD CLIENT</b>
                <i class="far fa-plus-square" id="add-client-button"></i>
            </button>
                    </div>
                    {{-- Modal start --}}
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">ADD NEW CLIENT</h5>
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{-- New Client post --}}

                                
                                <form class="row g-3" action="{{ route('store.client') }}" method="POST">

                                    @csrf
                                    {{-- Name --}}
                                    <div class="col-md-6">
                                      <label for="inputName4" class="form-label">Name</label>
                                      <input type="text" class="form-control" name="client_name" id="inputName4" value="{{ old('client_name') }}" required>
                                    </div>
                                    
                                    {{-- Date of birth --}}
                                    <div class="col-md-6">
                                      <label for="inputdob4" class="form-label">Date of birth</label>
                                      <input type="date" class="form-control" name="date_of_birth" id="inputDob4" value="{{ old('date_of_birth') }}">
                                    </div>
                                    <div class="col-md-6">
                                        {{-- email --}}
                                      <label for="inputEmail4" class="form-label">Email</label>
                                      <input type="email" class="form-control" name="email" id="inputEmail4" value="{{ old('email') }}">
                                    </div>
                                   
                                        {{-- Phone number --}}
                                    <div class="col-md-6">
                                      <label for="inputContact4" class="form-label">Contact Number</label>
                                      <input type="text" class="form-control" name="phone" id="inputContact4" value="{{ old('phone') }}">
                                    </div>
                                    {{-- Address --}}
                                    <div class="col-8">
                                      <label for="inputAddress" class="form-label">First Line of Address</label>
                                      <input type="text" class="form-control" name="address" id="inputAddress" placeholder="" value="{{ old('address') }}">
                                    </div>
                                    {{-- Post code --}}
                                    <div class="col-4">
                                      <label for="inputPost" class="form-label">Post Code</label>
                                      <input type="text" class="form-control" name="post_code" id="inputPost" placeholder="" value="{{ old('post_code') }}">
                                    </div>
                                    {{-- Service --}}
                                    <div class="col-md-6">
                                        <label for="inputService" class="form-label">Service</label>
                                        <select id="inputService" class="form-select" name="service">
                                          <option selected>Choose...</option>
                                          <option>CBT</option>
                                          <option>Counselling</option>
                                          <option>EMDR</option>
                                          <option>Consultation</option>
                                          <option>Supervision</option>
                                          <option>Tutoring</option>
                                          <option>Crisis</option>
                                        </select>
                                      </div>
                                      {{-- Risk status --}}
                                      <div class="col-md-6">
                                        <label for="inputRisk" class="form-label">Risk</label>
                                        <select id="inputRisk" class="form-select" name="risk_status">
                                          <option selected>None</option>
                                          <option>Low</option>
                                          <option>Medium</option>
                                          <option>High</option>
                                          <option>Crisis</option>
                                        </select>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-outline-primary">Add Client</button>
                                        </div>
                                  </form>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                    {{-- end Modal --}}
                    {{-- end Add client Modal --}}
                            
                </div>
                {{-- end Top section --}}

                {{-- Alert Section --}}
                {{-- uncomment the if statement once back end ready to link --}}
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><strong>{{ $error }}</strong></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
        {{-- Alert Section end--}}
        

                {{-- Client Table --}}
                <table class="table align-middle table-borderless" id="clients-table">
                <thead>
                    <tr class="client-header align-middle">
                    <th scope="col" class="client-spacing">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">STATUS</th>
                    <th scope="col" class="text-center">ACTIONS</th>
                    </tr>
                </thead>
                {{-- Body content for clients table --}}
                @foreach($clients as $client)
                
                <tbody>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">{{ str_pad($client->id, 6, '0', STR_PAD_LEFT) }}</th>
                    <td>{{ $client->client_name }}</td>
                    <td>{{ $client->service }}</td>
                    <td>{{ $client->status }}</td>
                    <td class="text-center"><a role="button" class="btn btn-light" href="{{ url('client/'.$client->id) }}"><i class="fas fa-external-link-alt" id="view-button"></i></a>
                    </tr>
                    @endforeach
                </tbody>
                {{-- pagination and footer --}}
                <tfoot>
                    {{-- <tr class="client-row">
                        <th scope="row" class="client-spacing"></th>
                        <td colspan="2"></td>
                        <td></td>
                        <td class="text-right">
                            <button type="button" class="btn btn-light"><i class="fas fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-light"><i class="fas fa-chevron-right"></i></button>
                        </td>
                    </tr> --}}
                </tfoot>
                
                </table>
                {{ $clients->links() }}
            </div>
        </div>
    </div>
{{-- End Client List --}}


</x-app-layout>
