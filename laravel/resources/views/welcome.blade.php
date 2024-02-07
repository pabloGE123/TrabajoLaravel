@extends('layouts.enlaces-tienda')
@section('contenido')
            
        <!-- Mostramos las camisetas de oferta a cualquier cliente que entre a la web (sin necesidad de estar autenticado) -->            
        <div class="container">
                <h2 class="text-center">CAMISETAS EN OFERTA</h2>
                        <div class="row">
                                 @foreach($camisetas as $camiseta)

                                <div class="col-4">
                                    <div class="card" style="width:100%;">
						  			<a href="{{ route('welcome-elegida', $camiseta->id) }}"><img class="card-img-top" src="{{ asset($camiseta->imagen) }}" style=""></a>
						  			<div class="card-body">
						    		<h4 class="card-title">{{ $camiseta->modelo}}</h4>
						   			<p class="card-text">{{ $camiseta->marca}}</p>
						    		<p class="card-text">{{ $camiseta->caracteristicas}}</p>
                                    <p class="card-text">{{ $camiseta->precio}} <?php echo "€" ?></p>
                                    <p class="card-text">{{ $camiseta->descuento}} <?php echo "%" ?></p>
                                    <p class="card-text">{{ $camiseta->stock}} <?php echo "uds" ?></p>
						  			</div>
                                </div>
                                    
								</div>
                                    @endforeach 
                        </div>
                        
                            <!-- Mostraremos el listado de camisetas en formato tabla -->
                            
                               
                                </tbody>
                            </table>
                        </div>
        </div>
                
@endsection