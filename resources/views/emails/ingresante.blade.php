@extends('layouts.email')

@section('title')
   Estimado postulante
@endsection

@section('content')
   <p>usted a logrado pasar la etapa de evaluacion de nues:</p>

   @include('partials.email-action-button', ['link'=>$enlace, 'label'=>'Confirmar correo electrónico'])

   <p>Este enlace estará disponible por 60 minutos desde su recepción.</p>
@endsection

@section('signature')
   Atentamente,
   <br>
   La Comisión de Admisión
@endsection
