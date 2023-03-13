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
</x-app-layout> 
    <div class="col-md-12">
        <ul>
            <li>
                <a href="#" class="btn btn-dark">Ajouter des fournisseurs</a>
            </li>
            <li>
                <a href="#" class="btn btn-dark">Afficher les fournisseurs</a>
            </li>
        </ul>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="row">
                                <p><h3>Selectioner les fournisseur</h3> </p>
                                <select name="select" id="" class="form-control" >
                                    <option value=""></option>
                                </select>
                            <p> </p>
                            <p><h3>Objet de consultation</h3> </p>
                                <input type="text" class="form-control">
                            </div><br/>
                            <div>
                                <button class="btn btn-dark">Envoyer</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






