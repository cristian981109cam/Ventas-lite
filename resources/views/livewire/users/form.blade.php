@include('common.modalHead')

<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" wire:model.lazy="name" class="form-control" placeholder="ej: Cristian Silva">
            @error('name') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label for="">Telefono</label>
            <input type="text" wire:model.lazy="phone" class="form-control" placeholder="ej: 3015384586" maxlength="10">
            @error('phone') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" wire:model.lazy="email" class="form-control" placeholder="ej: cristian@gmail.com">
            @error('email') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label for="">Contraseña</label>
            <input type="text" wire:model.lazy="password" class="form-control">
            @error('password') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label for="">Estatus</label>
            <select wire:model.lazy="status" class="form-control">
                <option value="Seleccione" selected>Seleccione</option>
                <option value="Active" selected>Activo</option>
                <option value="Locked" selected>Bloqueado</option>
            </select>
            @error('status') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label for="">Asignar Rol</label>
            <select wire:model.lazy="profile" class="form-control">
                <option value="Seleccione" selected>Seleccione</option>
                @foreach($roles as $role)
                <option value="{{$role->id}}" >{{$role->name}}</option>
                @endforeach
            </select>
            @error('profile') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label for="">Imagen de perfil</label>
            <input type="file" wire:model="image"
            accept="image/x-png, image/gif, image/jpeg" class="form-control">
            @error('image') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
</div>
@include('common.modalFooter')
