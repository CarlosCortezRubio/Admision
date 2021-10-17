@extends('layouts.email')

@section('title')
   Estimado postulante
@endsection

@section('content')
   <p>Usted a logrado pasar satisfactoriamente la etapa de evaluación de ingreso</p>
   <p>Para culminar con el proceso de inscripción pulse en el botón de continuar:</p>
   @include('partials.email-action-button', ['link'=>$enlace, 'label'=>'Continuar'])

@endsection

@section('signature')
   Atentamente,
   <br>
   La Comisión de Admisión
@endsection
