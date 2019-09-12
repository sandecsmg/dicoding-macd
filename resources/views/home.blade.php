<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Cloud Web App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">
    <div class="row justify-content-center w-100 align-items-center">
        <div class="col-4 align-self-center">
            <form action="/new" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="text-muted" for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label class="text-muted" for="">E-mail</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label class="text-muted" for="">Address</label>
                    <input type="text" class="form-control" name="address">
                </div>

                <div class="form-group">
                    <label class="text-muted" for="">Phone Number</label>
                    <input type="tel" class="form-control" name="phone">
                </div>

                <div class="form-group mx-auto text-center">
                    <input type="submit" value="Submit" class="btn btn-primary shadow mx-auto">
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            @if ($users != null)
            <table class="text-center table table-bordered">
                <tr class="font-weight-bold">
                    <td>Name</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>UID</td>
                </tr>
                @foreach ($users as $i)
                <tr>
                    <td>{{$i->name}}</td>
                    <td>{{$i->email}}</td>
                    <td>{{$i->address}}</td>
                    <td>{{$i->phone}}</td>
                    <td>{{$i->user_id}}</td>

                </tr>
                @endforeach
            </table>
            @else
            <h1 class="text-center">Nothing to do here!</h1>
            @endif

        </div>
    </div>
</body>

</html>
