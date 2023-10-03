<label>
    Nombre <br>
    <input name="name" type="text" value="{{ old('name', $admin->name) }}">
    @error('name')
    <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label><br>

<label>
    Contraseña<br>
    <input name="password" type="password" value="{{old('password', $admin->password)}}">
    @error('password')
    <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label><br>
