<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->apellido }}</td>
                                <td>{{ $user->dni }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $rol)
                                            {{ $rol }}
                                        @endforeach
                                    @endif
                                </td>
                                @can('Editar roles')
                                <td>
                                    <a href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                </td>
                                @endcan
                                
                                @can('Eliminar roles')
                                <td>
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                                @endcan

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="card-footer">
                {{ $users->links() }}
            </div>

        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
