<div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="userstable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th></th>
                        <th></th>
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
                            
                            @can('Editar usuarios')
                            <td width="10px">
                                <a href="admin.users.edit"  class="btn btn-sm btn-primary">Editar</a>
                            </td>
                            @endcan

                            @can('Eliminar usuarios')
                            <td width="10px">
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
    </div>
    
</div>
