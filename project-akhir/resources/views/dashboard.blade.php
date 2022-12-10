<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                
        </div>
        </div>
    </div>
    <div>
        <a class="btn btn-primary btn-block btn-lg" style="margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%" href="home">Admin Page</a>  
        <a class="btn btn-primary btn-block btn-lg" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%" href="beranda">Menuju web</a>  
</div>
</x-app-layout>
