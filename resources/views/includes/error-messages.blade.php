@if (Session::has('error'))
    <div class="alert alert-danger animated fadeInDown alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">
        	<span aria-hidden="true">&times;</span>
        	<span class="sr-only">Cerrar</span>
        </button>
        {{ Session::get('error') }}
    </div>
@endif