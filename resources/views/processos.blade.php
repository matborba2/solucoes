@extends('partial.header')
@section('titulo', 'Processos')
@section('conteudo')
                <!-- Page Content-->                    <div class="container-fluid"> 
                
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body mb-0">
                                    <div class="row">                                            
                                        <div class="col-8 align-self-center">
                                            <div class="">
                                                <h4 class="mt-0 header-title">Usuários</h4>
                                                <h2 class="mt-0 font-weight-bold text-dark">{{ $usuarios->count() }}</h2> 
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info text-right">
                                                <i class="dripicons-cart bg-soft-{{ env('tema') }}"></i>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->                                                                  
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body mb-0">
                                    <div class="row">                                            
                                        <div class="col-8 align-self-center">
                                            <div class="">
                                                <h4 class="mt-0 header-title">Processos</h4>
                                                <h2 class="mt-0 font-weight-bold text-dark">{{ $processos->count() }}</h2> 
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info text-right">
                                                <i class="fa fa-list bg-soft-{{ env('tema') }}"></i>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->                                                              
                            </div><!--end card-->
                        </div><!--end col-->                        
                    </div><!--end row-->
                        <div class="row"> 
                            
                                             
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body new-user order-list">
                                        <h4 class="header-title mt-0 mb-3">últimos processos</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="border-top-0">Product</th>
                                                        <th class="border-top-0">Pro Name</th>
                                                        <th class="border-top-0">Country</th>
                                                        <th class="border-top-0">Order Date/Time</th>
                                                        <th class="border-top-0">Pcs.</th>                                    
                                                        <th class="border-top-0">Amount ($)</th>
                                                        <th class="border-top-0">Status</th>
                                                    </tr><!--end tr-->
                                                </thead>
                                                <tbody>
                                                    @foreach($processos as $processo)
                                                    <tr>
                                                        <td>
                                                        {{ $processo->codigo }}
                                                        <td>
                                                            {{ $processo->pessoa->nome }}
                                                        </td>
                                                        <td>                                                                
                                                            <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                                        </td>
                                                        <td>3/03/2019 4:29 PM</td>
                                                        <td>200</td>                                   
                                                        <td> $750</td>
                                                        <td>                                                                        
                                                            @if($processo->status == "Aberto")
                                                            <span class="badge badge-boxed  badge-soft-success">
                                                            @elseif($processo->status == "Em andamento")
                                                            <span class="badge badge-boxed  badge-soft-warning">

                                                            @else
                                                            <span class="badge badge-boxed  badge-soft-danger">
                                                                @endif
                                                                {{ $processo->status }}
                                                            </span>
                                                        </td>
                                                    </tr><!--end tr-->
                                                    @endforeach                                                
                                                </tbody>
                                            </table> <!--end table-->                                               
                                        </div><!--end /div-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        
                    </div><!-- container -->

                <!-- end page content -->
                @endsection
            