@extends('layouts.marge.admin')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Funcinários</h5>
                </li>


            </ol>
            <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button"
                aria-controls="offcanvasExample1">+ Add Task</a>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects style-1">
                                <div class="tbl-caption">
                                    <h4 class="heading mb-0">Funcinárioss</h4>
                                    <div>



                                        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">  + Cadastrar Funcionarios</a>
                                    </div>
                                </div>
                                <table id="empoloyees-tblwrapper" class="table">
                                    <thead>
                                        <tr>
                                            <th>Funcinários ID</th>
                                            <th>Nome</th>

                                            <th>Email Address</th>

                                        </tr>
                                    </thead>
                                    <tbody>



                                        @foreach ($useres as $item)
                                            <tr>
                                                <td><span>{{ $item->id }}</span></td>
                                                <td>
                                                    <div class="products">
                                                        <img src="/dashboard/images/contacts/pic2.jpg"
                                                            class="avatar avatar-md" alt="">
                                                        <div>
                                                            <h6>{{ $item->name }}</h6>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span>{{ $item->email }}</span></td>


                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
