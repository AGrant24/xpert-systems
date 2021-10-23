
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}



{{-- Client list --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="client-container">

                {{-- Top section --}}
                <div id="top-section">
                    <div class="client-search">
                        <div class="row height d-flex justify-content-left align-items-left">
                            <div class="col-md-8">
                                <div class="form"><i class="fa fa-search"></i><input type="text" class="form-control form-input" placeholder="Search for client"> <span class="left-pan"></span></div>
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
                                <form class="row g-3">
                                    <div class="col-md-6">
                                      <label for="inputEmail4" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                      <label for="inputPassword4" class="form-label">Contact Number</label>
                                      <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="col-12">
                                      <label for="inputAddress" class="form-label">Address</label>
                                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                      <label for="inputAddress2" class="form-label">Address 2</label>
                                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                      <label for="inputCity" class="form-label">City</label>
                                      <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="inputState" class="form-label">State</label>
                                      <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                      </select>
                                    </div>
                                    <div class="col-md-2">
                                      <label for="inputZip" class="form-label">Zip</label>
                                      <input type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-12">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                          Check me out
                                        </label>
                                      </div>
                                    </div>
                                  </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Add Client</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- end Modal --}}
                    {{-- end Add client Modal --}}
                            
                </div>
                {{-- end Top section --}}
                {{-- Alert Section --}}
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Client Added Successsfully</strong>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                <tbody>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">123546</th>
                    <td>Mark Johnson</td>
                    <td>CBT</td>
                    <td>In Treatment</td>
                    <td class="text-center"><button type="button" class="btn btn-light"><i class="fas fa-external-link-alt" id="view-button"></i></button>
                    </tr>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">123546</th>
                    <td>Mark Johnson</td>
                    <td>Counselling</td>
                    <td>New</td>
                    <td class="text-center"><button type="button" class="btn btn-light"><i class="fas fa-external-link-alt" id="view-button"></i></button>
                    </tr>
                    <tr class="client-row">
                    <th scope="row" class="client-spacing">123546</th>
                    <td>Mark Johnson</td>
                    <td>EMDR</td>
                    <td>Discharged</td>
                    <td class="text-center"><button type="button" class="btn btn-light"><i class="fas fa-external-link-alt" id="view-button"></i></button>
                    </tr>
                    
                </tbody>
                {{-- pagination and footer --}}
                <tfoot>
                    <tr class="client-row">
                        <th scope="row" class="client-spacing"></th>
                        <td colspan="2"></td>
                        <td></td>
                        <td class="text-right">
                            <button type="button" class="btn btn-light"><i class="fas fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-light"><i class="fas fa-chevron-right"></i></button>
                            </td>
                    </tr>
                </tfoot>
                
                </table>
            
            </div>
        </div>
    </div>
{{-- End Client List --}}

{{-- Example list --}}



{{-- Example list End --}}

</x-app-layout>
