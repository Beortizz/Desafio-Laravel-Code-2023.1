<div class="row">
    <div class="form-group col-sm-6">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" class="form-control" required autofocus value="{{ old('name',$student->name) }}">
    </div>
    <div class="form-group col-sm-6">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email',$student->email) }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <label for="birth_date" class="required">Data de Nascimento </label>
        <input type="date" name="birth_date" id="birth_date" class="form-control" required  value="{{ old('name',$student->birth_date) }}">
    </div>
    <div class="form-group col-sm-6">
        <label for="phone_number" class="required">Telefone</label>
        <input type="text" name="phone_number" id="phone_number" class="form-control" required value="{{ old('phone_number',$student->phone_number) }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <label for="pay_date" class="required">Data de Pagamento </label>
        <input type="date" name="pay_date" id="pay_date" class="form-control"  value="{{ old('enter_hour',$student->pay_date) }}">
    </div>
    <div class="form-group col-sm-6">
        <label for="due_date" class="required">Data de Vencimento </label>
        <input type="date" name="due_date" id="due_date" class="form-control" required value="{{ old('leave_hour',$student->due_date) }}">
    </div>
    <div class="row">   
        <div class="form-group col-sm-12">
            <label for="address" class="required">Endereço </label>
            <input type="text" name="address" id="address" class="form-control" required  value="{{ old('address',$student->address) }}">
        </div>
    </div>
</div>
