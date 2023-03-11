@extends('layouts.pledge')
@section('content')
    <div class="container-fluid pt-3">
        <h1 style="font-family:verdana;font-size:16;font-weight:bold;text-align:center;">Top 10 Famous Author</h1>
    </div>

    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Author Name</th>
                <th>Voter</th>
            </tr>
        </thead>

        <tbody>
            @if (count($books) > 0)
                @foreach ($books as $index => $li)
                    <tr>
                        <td>{{ $li->id }}</td>
                        <td>{{ $li->author_name }}</td>
                        <td>{{ $li->voter }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" style="text-align:center;"><b>Authors Data Not Found</></b></td>
                </tr>
            @endif
        </tbody>
    </table>
