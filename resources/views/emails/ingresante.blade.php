@extends('layouts.email')

@section('title')
   Estimado postulante
@endsection

@section('content')
   <p>Usted a logrado pasar satisfactoriamente la etapa de evaluación de ingreso, para culminar con el proceso de inscripción:</p>

   @include('partials.email-action-button', ['link'=>$enlace, 'label'=>'Ingrese aquí'])

@endsection

@section('signature')
   Atentamente,
   <br>
   La Comisión de Admisión
@endsection
