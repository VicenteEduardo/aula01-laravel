@extends('layouts.marge.admin')

@section('content')
    <div class="content-body">
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects style-1">
                                <div class="tbl-caption">
                                    <h4 class="heading mb-0">Cadastrar Prato dia</h4>
                                    <div>



                                        <a href="{{ route('pratodia.index') }}" class="btn btn-primary btn-sm">  Listar Pratos</a>
                                    </div>
                                </div>
                            	<div class="col-xl-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Horizontal Form</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                <!-- Validation Errors -->
                                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                                <form method="POST" action="{{ route('pratodia.store') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Nome</label>
                                                            <input type="text" name="name" :value="old('name')" required autofocus  class="form-control" placeholder="1234 Main St">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Preço</label>
                                                            <input type="text" name="price" :value="old('price')" required class="form-control" placeholder="Digite o preço">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Foto de Capa</label>
                                                            <input   type="file"
                                                            name="photo"
                                                            required class="form-control" placeholder="photo">
                                                        </div>

                                                    </div>


                                                    <x-button class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </x-button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
