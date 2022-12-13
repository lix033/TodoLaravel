<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card shadow-sm4">
            <div class="card-body">
                <h3>Todo list</h3>
                <form action=" {{route('store')}} " method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="content" class="form-control">
                        <button type="submit" class="btn btn-primary btn-sm px-4"><i class="fas fa-plus"></i></button>
                    </div>
                </form>
                
                @if (count($todolists))
                <ul class="list-group list-group-flush mt-3">

                    @foreach ($todolists as $todolist)
                    <li class="list-group-item">

                        <form action=" {{route('delete', $todolist->id)}} " method="post">
                            {{$todolist->content}}
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm float-end"><i class="fa fa-trash"></i></button>
                        </form>

                    </li>   
                    @endforeach
                    

                </ul>
                @endif
            </div>
        </div>
    </div>
</body>
</html>