
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
                            <div id="add-button">
                                <button type="button" class="btn btn-light">Add Client</button>
                            </div>
                </div>
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
{{-- End Patient List --}}

</x-app-layout>
