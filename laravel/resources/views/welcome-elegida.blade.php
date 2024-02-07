@extends('layouts.enlaces-tienda')
@section('contenido')
            
    <!-- Mostramos las camisetas de oferta a cualquier cliente que entre a la web (sin necesidad de estar autenticado) -->            
    <div class="container">
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-12">                    
                <div class="card">
                    <div class="card-header text-center" style="background-color: #F1F3F5; color: black; border-color: #343a40;">    
                        <strong>@foreach($camisetas as $camiseta) {{ $camiseta->marca }} {{ $camiseta->modelo }} @endforeach</strong>
                    </div>
                    <div class="card-body col table-responsive bg-dark" style="padding-bottom: 43px;">
                        <!-- Mostraremos el listado de camisetas en formato tabla -->
                        <table class="table table-hover table-sm table-dark text white">
                            <thead>
                                <tr>
                                    @foreach($camisetas as $camiseta) 
                                    <th class="text-center" colspan="4">
                                        <img class="mb-3" src="{{ asset($camiseta->imagen) }}" style="width:200px; border-radius:5px;">
                                    </th>
                                    @endforeach 
                                </tr>
                                <th>Características</th>
                                <th>Precio</th>
                                <th>Descuento</th>                                    
                                <th>Stock</th>
                            </thead>
                            <tbody>
                                @foreach($camisetas as $camiseta)                                
                                <tr>
                                    <td>
                                        {{ $camiseta->caracteristicas }}
                                    </td>
                                    <td>
                                        {{ $camiseta->precio }} <?php echo" €"; ?>
                                    </td>
                                    <td>
                                        {{ $camiseta->descuento }} <?php echo"%"; ?>
                                    </td>   
                                    <td>
                                        {{ $camiseta->stock }} <?php echo" uds"; ?>
                                    </td>                                                                         
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    

@endsection