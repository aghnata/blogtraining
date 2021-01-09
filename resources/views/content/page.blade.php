<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAGE</title>
</head>
<body>
    <div>
        <p> ini tampilan awal -->EDIT </p>
    </div>
    {{-- <p> ini id buku {{ $book }} </p> --}}
    
    <table>
        <tr>
            <td>No</td>
            <td>Judul</td>
            <td>Jumlah Pembaca</td>
            <td>Aksi</td>
        </tr>
        @php($no = 0)
        @foreach ($pages as $item)    
        @php($no++)
            <tr>
                <td> {{ $no }} </td>
                <td> {{ $item->judul }} </td>
                <td> {{ $item->jumlah_pembaca }} </td>
                <td>
                    <form action="{{ url('/pages/'.$item->id) }}" method="POST">
                        @csrf
                        {{ method_field('delete') }}
                        <button> delete </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <br>
    <form action=" {{ url('/pages') }} " method="POST">
        @csrf
        Judul<input type="text" name="judul">
        Jumlah Pembaca<input type="text" name="jumlah_pembaca">
        <button>submit</button>
    </form>
    <br>

    <table>
        <tr>
            <td>No</td>
            <td>Judul</td>
            <td>Jumlah Pembaca</td>
            <td>Aksi</td>
        </tr>
        @php($no = 0)
        @foreach ($pages as $item)    
        @php($no++)
            <tr>
                <form action="{{ url('/pages/'.$item->id) }}" method="POST">
                @csrf
                {{ method_field('put') }}
                    <td> {{ $no }} </td>
                    <td> <input type="text" value="{{ $item->judul }}" name="judul">  </td>
                    <td> <input type="text" value="{{ $item->jumlah_pembaca }}" name="jumlah_pembaca">  </td>
                    <td>
                        <button> update </button>
                    </td>
                </form>
            </tr>
        @endforeach
    </table>

    
    
</body>
</html>