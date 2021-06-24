@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('centroDeLlamadas.index') }}">Centro De Llamadas</a>
            </li>
            <li class="breadcrumb-item active">Detalle</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Detalle</strong>
                                  <a href="{{ route('centroDeLlamadas.index') }}" class="btn btn-primary pull-right">Atras</a>
                             </div>
                             <div class="card-body">
                                 @include('centro_de_llamadas.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
