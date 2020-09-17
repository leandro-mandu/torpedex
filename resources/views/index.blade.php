@extends('template')
@section('titulo'){!! 'Envio de SMS Grátis!' !!} @endsection
@section('conteudo')
<p>
  Envie mensagens gratuitamente para qualquer número, de qualquer operadora, em todo o brasil!
</p>
<p>
  Não gaste seus créditos, envie mensagens via TorpedeX!
</p>
<p>
  É simples e rápido!
</p>
<form id="sms-form" action="api/sms" method="POST">
  <div class="row g-3">

    <div class="col-md-2">
      <label for="number_ddd" class="form-label">DDD</label>
      <input type="number" class="form-control" id="number_ddd" name="number_ddd" max="99">
    </div>
    <div class="col-md-4">
      <label for="number" class="form-label">Número</label>
      <input type="number" class="form-control" id="number" name="number" max="999999999">
    </div>
    <div class="col-md-6">
      <label for="name" class="form-label">Seu Nome</label>
      <input type="text" class="form-control" id="name" name="name" maxlength="20">
    </div>
    <div class="col-12">
      <label for="content" class="form-label">Texto</label>
      <input type="text" class="form-control" id="content" name="content" maxlength="100">
    </div>
    <div class="col-12">
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="thermsCheck">
        <label class="form-check-label" for="thermsCheck">Declaro que lí e aceito os termos de uso de envio de SMS do TorpedeX</label>
      </div>
    </div>
    <div class="col-12">
      <img src="https://duvidas.bem-vindo.net/imagensFAQ/usando-recaptcha-em-seu-formulario-001.png">
    </div>

    @csrf
    <input type="hidden" id="categoria_id" name="categoria_id" value="1">
  <button id="btn_enviar" type="submit" disabled=true class="btn btn-primary">Submit</button>
</form>
<hr>
<h3>&#10146; Para empresas</h3>
Vantagens do serviço de sms frente a outros serviços!
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Vantagem</th>
      <th scope="col">SMS</th>
      <th scope="col">Email / Whatsapp / Messenger / Telegram</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Funciona sem internet</th>
      <td>SIM</td>
      <td>Não, não, não...</td>
    </tr>
    <tr>
      <th scope="row">Disponível nativamente na maioria dos aparelhos celulares</th>
      <td>SIM</td>
      <td>...não, não e não!</td>
    </tr>
  </tbody>
</table>
@endsection
@section('js')
<script src="{{ asset('js/sms.class.js') }}"></script>
<script src="{{ asset('js/sms.js') }}"></script>
@endsection
