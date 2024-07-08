<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.Front.head')
</head>

<body class="index-page">

    {{--Header --}}
    @include('layouts.Front.header')

    <main class="main">
        @include('layouts.Front.singlePage')

        <div class="container w-50 mx-auto p-2 my-5">
            <div class="card shadow-1-strong" style="background-color: #37517e;">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Book Name</th>
                                    <th>Book Author</th>
                                    <th>Book Status</th>
                                    <th>Image</th>
                                    <th>Request Cancel</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($borrow as $borrow )
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td class="pt-5">
                                        <strong>{{$borrow->book->title_book}}</strong>
                                    </td>
                                    <td class="pt-5">
                                        <strong>{{$borrow->book->author_name}}</strong>
                                    </td>
                                    <td class="pt-5">
                                        @if ($borrow->status == 'applied')
                                                <span class="badge text-bg-secondary ">{{$borrow->status}}</span>
                                                @elseif($borrow->status == 'Approved')
                                                <span class="badge text-bg-primary">{{$borrow->status}}</span>
                                                @elseif ($borrow->status == 'Rejected')
                                                <span class="badge text-bg-danger">{{$borrow->status}}</span>
                                                @else
                                                <span class="badge text-bg-secondary">{{$borrow->status}}</span>
                                                @endif
                                    </td>
                                    <td>
                                        <img src="bookImages/{{$borrow->book->book_img}}" style="width: 80px;" alt="">
                                    </td>
                                    <td class="">
                                        <a class="" href="{{url('ApproveRequest', $borrow->id)}}"><i
                                                class="text-success  fs-2 bi bi-check-square-fill"></i></a>
                                        <a class="" href="{{url('RejectRequest', $borrow->id)}}"><i
                                                class="text-secondary mx-3 fs-2 bi bi-x-square-fill"></i></a>
                                        <a class="" href="{{url('ReturnRequest', $borrow->id)}}"><i class="text-secondary mx-3 fs-2 bi bi-arrow-return-left"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
        </div>
    </main>

    {{--footer--}}
    @include('layouts.Front.footer')


    {{--javascribt--}}
    @include('layouts.Front.script')

</body>

</html>