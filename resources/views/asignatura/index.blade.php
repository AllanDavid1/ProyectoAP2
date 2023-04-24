@extends('layout.plantilla')
@section('contenidoPrincipal')
<div class="row">
<div class="col-md-9">
<a href="{{url('asignatura/create')}}" class="pull-right">
<button class="btn btn-success">Crear Materias</button> </a>
</div></div>
<div class="row">
<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<th>Id</th>
<th>Nombre de la asignatura</th>
</thead>
<tbody>
@foreach($asignatura as $asig)
<tr>
<td>{{ $asig->id }}</td>
<td>{{ $asig->Nombre_de_Asignatura }}</td>
<td>
<a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$asig->id}}">
 <button type="button" class="btn btn-danger"> Eliminar</button></a>
</td>
</tr>
@include('asignatura.modal')
@endforeach
</tbody> </table>
</div></div>
@endsection