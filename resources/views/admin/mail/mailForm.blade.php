@extends('layouts.master')

@section('content')
<div class="col-md-10 offset-md-1 col-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title title-form">Envio de email</h3>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form id="form-adicionar" action="{{ route('mail.sendEmail') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="subject" class="required">Assunto </label>
                        <input type="text" name="subject" id="subject" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="body" class="required">Corpo do Email </label>
                        <textarea  name="body" id="body" class="form-control" rows='10' required > </textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button onclick="setForm()" type="submit" form="form-adicionar"
                class="btn btn-dark float-right">Enviar </button>
        </div>
    </div>
</div>
@endsection