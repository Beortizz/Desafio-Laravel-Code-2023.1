<div class="row">
    <div class="form-group col-sm-6">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" class="form-control" required autofocus value="{{ old('name',$user->name) }}">
    </div>
    <div class="form-group col-sm-6">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email',$user->email) }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <label for="birth_date" class="required">Data de Nascimento </label>
        <input type="date" name="birth_date" id="birth_date" class="form-control" required autofocus value="{{ old('birth_date',$user->birth_date) }}">
    </div>
    <div class="form-group col-sm-6">
        <label for="phone_number" class="required">Telefone</label>
        <input type="text" name="phone_number" id="phone_number" class="form-control"  data-mask="(99) 99999-9999" data-mask-selectonfocus="true" required autofocus value="{{ old('phone_number',$user->phone_number) }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <label for="enter_hour" class="required">Horário de Entrada </label>
        <input type="time" name="enter_hour" id="enter_hour" class="form-control" required autofocus value="{{ old('enter_hour',$user->enter_hour) }}">
    </div>
    <div class="form-group col-sm-6">
        <label for="leave_hour" class="required">Horário de Saída </label>
        <input type="time" name="leave_hour" id="leave_hour" class="form-control" required value="{{ old('leave_hour',$user->leave_hour) }}">
    </div>
    <div class="row">   
        <div class="form-group col-sm-12">
            <label for="address" class="required">Endereço </label>
            <input type="text" name="address" id="address" class="form-control" required  value="{{ old('address',$user->address) }}">
        </div>
    </div>
</div>
