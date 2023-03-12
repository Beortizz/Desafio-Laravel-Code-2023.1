<div class="row">
    <div class="form-group col-sm-6">
        <label for="user" class="required">Nome do Funcionário</label>
        <select class="form-control select2" name="user" id="user" 
        >
            <option> </option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{old('user', $lesson->user_id) == $user->id ? 'selected' : '' }} >{{ $user->name }}</option>"
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-6">
        <label for="student" class="required">Nome do Aluno</label>
        <select class="form-control select2" name="student" id="student">
            <option> </option>
            @foreach($students as $student)
                
                <option value="{{ $student->id }}"  {{old('user', $lesson->student_id) == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>"
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-12">
        <label for="price" class="required">Preço </label>
        <input type="number" name="price" id="price" class="form-control" required value="{{ old('price', $lesson->price) }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <label for="start_time" class="required">Hora de início </label>
        <input type="datetime-local" name="start_time" id="start_time" class="form-control" required value="{{ old('start_time', $lesson->start_time) }}">
    </div>
    <div class="form-group col-sm-6">
        <label for="end_time" class="required">Hora de término </label>
        <input type="datetime-local" name="end_time" id="end_time" class="form-control" required value="{{ old('end_time', $lesson->end_time) }}">
    </div>
</div>

