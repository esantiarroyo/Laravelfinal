<div class="bg-primary-subtle mt-3 mb-3 pt-3 pb-3">
    <label class="d-flex justify-content-center h6 p-2">Elige:</label>
    <div class="d-flex justify-content-around m-2 ">
        <div class="d-grid align-items-center" style="justify-items: center;">
            <h6><a href="{{ route('home') }}">Inicio</a></h6>
        </div>
        <div class="d-grid align-items-center" style="justify-items: center;">
            <h6><a href="{{ route('admins.index') }}">Administrador</a></h6>
        </div>
        <div class="d-grid align-items-center" style="justify-items: center;">
            <h6><a href="{{ route('cels.index') }}">Celador</a></h6>
        </div>
        <div class="d-grid align-items-center" style="justify-items: center;">
            <h6><a href="{{ route('inss.index') }}">Instructor</a></h6>
        </div>
        <div class="d-grid align-items-center" style="justify-items: center;">
            <h6><a href="{{ route('press.index') }}">Prestamos</a></h6>
        </div>
    </div>
</div>
