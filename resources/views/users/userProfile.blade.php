@extends('layoutUserProfile')

@section('content')
    <div class="container">
        <p class="bg-danger">Por favor, es necesario que complete su perfil.</p>
        <form>
            <div class="form-group">
                <label for="user_type">Tipo de usuario</label>
                <select name="user_type" class="form-control" required>
                    <option>Estudiante de UTN</option>
                    <option>Graduado de UTN</option>
                    <option>Audiencia general</option>
                </select>
            </div>
            <div class="form-group">
                <label for="university">Universidad</label>
                <select name="university" class="form-control" required>
                    <option>-</option>
                    <option>Facultad Regional Buenos Aires</option>
                    <option>Facultad Regional Concepción del Uruguay</option>
                    <option>Facultad Regional Cordoba</option>
                    <option>Facultad Regional Delta</option>
                    <option>Facultad Regional La Plata</option>
                    <option>Facultad Regional Mendoza</option>
                    <option>Facultad Regional Resistencia</option>
                    <option>Facultad Regional Rosario</option>
                    <option>Facultad Regional San Francisco</option>
                    <option>Facultad Regional Santa Fe</option>
                    <option>Facultad Regional Tucumán</option>
                    <option>Facultad Regional Villa María</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input name="dni" type="number" class="form-control" placeholder="DNI (sin puntos)" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
