
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <h1>{{ $clients->client_name }}</h1>
    <h2>{{ str_pad($clients->id, 6, '0', STR_PAD_LEFT) }}</h2>
    <p>{{ $clients->date_of_birth }}
    {{ $clients->address  }}
    {{ $clients->post_code  }}
    {{ $clients->email  }}
    {{ $clients->phone  }}
    {{ $clients->status  }}
    {{ $clients->risk_status  }}
    {{ $clients->service  }}
    {{ $clients->invoiced  }}</p>
    <a role="button" class="btn btn-primary" href="">Edit</a>
        </div>
    </div>
    
</x-app-layout>


