<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4 font-weight-bold">Nombre Socio</label>
        <input type="text"
            name="nombre_socio"
            class="form-control @error('nombre_socio') is-invalid  @enderror"
            value="{{ old('nombre_socio', $socio->nombre_socio) }}"
            id="inputEmail4"
            placeholder="Ejm: ALBERCA YANAYACO TERESA"
            required
        >

        @error('nombre_socio')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail1">N. Placa</label>
        <input type="text"
            name="num_placa"
            class="form-control @error('num_placa') is-invalid  @enderror"
            value="{{ old('num_placa', $socio->num_placa) }}"
            id="inputEmail1"
            placeholder="Ejm: 5816-4P"
            required
        >

        @error('num_placa')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail1">Asociación</label>
        <input type="text"
            name="nombre_asociacion"
            class="form-control @error('nombre_asociacion') is-invalid  @enderror"
            value="{{ old('nombre_asociacion', $socio->nombre_asociacion) }}"
            id="inputEmail1"
            placeholder="Ejm: San Miguel"
            required
        >

        @error('nombre_asociacion')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail1">Expedición</label>
        <input type="text"
            name="expedicion"
            class="form-control @error('expedicion') is-invalid  @enderror"
            value="{{ old('expedicion', $socio->expedicion) }}"
            id="inputEmail1"
            placeholder="Ejm: "
        >

        @error('expedicion')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail1">Revalidación</label>
        <input type="text"
            name="revalidacion"
            class="form-control @error('revalidacion') is-invalid  @enderror"
            value="{{ old('revalidacion', $socio->revalidacion) }}"
            id="inputEmail1"
            placeholder="Ejm: "
        >

        @error('revalidacion')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail1">N. Operación</label>
        <input type="text"
            name="num_operacion"
            class="form-control @error('num_operacion') is-invalid  @enderror"
            value="{{ old('num_operacion', $socio->num_operacion) }}"
            id="inputEmail1"
            placeholder="Ejm: 036-2019"
            required
        >

        @error('num_operacion')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail1">Vigencia Operación</label>
        <input type="text"
            name="vigencia_operacion"
            class="form-control @error('vigencia_operacion') is-invalid  @enderror"
            value="{{ old('vigencia_operacion', $socio->vigencia_operacion) }}"
            id="inputEmail1"
            placeholder="Ejm: 19/09/2019 AL 19/09/2025"
            required
        >

        @error('vigencia_operacion')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="exampleFormControlFile1">Foto</label>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>
</div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $btn }}</button>
    </div>
