    <div class="credit-card-wrapper">
        <div class="contact_left_grid">						
            <div class="controls">
                <label class="control-label">Nombre del Rol:</label>
                <input class=" form-control " type="text" name="nombre" value="{{ old('nombre', $data->nom_rol ?? '') }}" >  {{-- para rellenar con los campos despues de un erro es old --}}
            </div>
        </div><br>
       @if (!empty($data))
            <button type="submit" class="btn btn-danger" style="width: 50%">Actualizar</button>
       @else
            <button type="submit" class="btn btn-danger" style="width: 50%">Guardar</button>
       @endif
    </div>

