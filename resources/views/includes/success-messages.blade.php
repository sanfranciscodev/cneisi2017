@if (Session::has('success'))
    <div class="alert alert-success animated fadeInDown alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">
        	<span aria-hidden="true">&times;</span>
        	<span class="sr-only">Cerrar</span>
        </button>
        {{ Session::get('success') }}
    </div>
@endif