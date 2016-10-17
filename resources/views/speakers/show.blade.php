<!DOCTYPE html>
<html>
<body>

<h1>Información sobre un speaker</h1>

<p>Nombre: {{$speaker->getName()}}</p>

@if($speaker->hasPicture())
  <p>
    <img src="{{$speaker->getPicture()}}">
  </p>
@endif

</body>
</html>