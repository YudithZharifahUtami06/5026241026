@extends('template')
@section('title','Data Siswa')

@section('konten')

<a href="{{ route('siswa.create') }}" class="btn btn-primary">
    Tambah Siswa Baru
</a>

<br><br>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Opsi</th>
        </tr>
    </thead>

    <tbody>
        @forelse($siswa as $row)
        <tr>
            <td>{{ $row->NRP }}</td>
            <td>{{ $row->Nama }}</td>
            <td>{{ $row->Kelas }}</td>
            <td>{{ $row->TanggalLahir }}</td>
            <td>
                <a href="{{ route('siswa.edit',$row->NRP) }}"
                   class="btn btn-warning">
                    Edit
                </a>

                |

                <form action="{{ route('siswa.destroy',$row->NRP) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">
                Belum ada data siswa.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
