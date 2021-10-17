@extends('layouts.email')

@section('title')
   Estimado postulante
@endsection

@section('content')
   <p>usted a logrado pasar satisfactoriamente la etapa de evaluación de ingreso:</p>

   @include('partials.email-action-button', ['link'=>$enlace, 'label'=>'Para culminar con el proceso de inscripción, ingrese aquí'])

   <p>Este enlace estará disponible por 60 minutos desde su recepción.</p>
@endsection

@section('signature')
   Atentamente,
   <br>
   La Comisión de Admisión
@endsection
