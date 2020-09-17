@extends('template')
@section('titulo'){!! $sms->id !!} @endsection
@section('conteudo')
<i>({{$sms->name}})</i><br>
{{$sms->status}}
  <p>
    {{$sms->content}}
  </p>
@endsection
