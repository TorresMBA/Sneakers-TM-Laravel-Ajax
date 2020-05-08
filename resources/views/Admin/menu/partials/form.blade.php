    <div class="credit-card-wrapper">
        <div class="contact_left_grid">						
            <div class="controls">
                <label class="control-label">Nombre:</label>
                <input class=" form-control " type="text" name="nombre" value="{{ old('nombre') }}" >  {{-- para rellenar con los campos despues de un erro es old --}}
            </div>
            <div class="controls">
                <label class="control-label">URL:</label>
                <input class=" form-control " type="text" name="url" value="{{ old('url') }}" >
            </div>
            <div class="controls">
                <label class="control-label">Icono:</label>
                <input class="form-control " type="text" name="icono" value="{{ old('icono') }}" >
            </div>
            {{-- <div class="w3_agileits_card_number_grid_left">
                <div class="controls">
                    <label class="control-label">Apellido</label>
                    <input class="number form-control" type="text" name="Ape"  >
                </div>
            </div>
            <div class="w3_agileits_card_number_grid_right">
                <div class="controls">
                    <label class="control-label">Email:</label>
                    <input class=" form-control" type="text" name="Email"  >
                </div>
            </div>						
            <div class="controls">
                <label class="control-label">Celular</label>
                <input class=" form-control" type="text" name="Telephone"  >
            </div>
            <div class="controls">
                <label class="control-label">Dirrecion</label>
                <input class=" form-control" type="text" name="Dirrecion" >
            </div> --}}
        </div><br>
        <button type="submit" class="btn btn-danger" style="width: 50%">Actualizar</button>
    </div>

