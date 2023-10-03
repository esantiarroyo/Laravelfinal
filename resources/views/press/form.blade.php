<label>
    Nombre Producto <br>
    <input name="namePres" type="text" value="{{ old('namePres', $pres->namePres) }}">
    @error('namePres')
    <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label><br>

<label>
    Nombre Instructor <br>
    <input name="nameIns" type="text" value="{{ old('nameIns', $pres->nameIns) }}">
    @error('nameIns')
    <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label><br>

<label>
    Cantidad<br>
    <input name="cantidad" type="number" value="{{old('cantidad', $pres->cantidad)}}">
    @error('cantidad')
    <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label><br>

<label>
    Fecha Entrada<br>
    <input name="fEntrada" type="date" value="{{old('fEntrada', $pres->fEntrada)}}">
    @error('fEntrada')
    <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label><br>
