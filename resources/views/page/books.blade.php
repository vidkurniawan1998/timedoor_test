@extends('layouts.main')
@section('content')
    <form action="searchbooks" method="get">
        <div class="input-group pt-3">
            <label for="listOfShown" class="col-sm-2 col-form-label">List Shown :</label>
            <div class="col-sm-3">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="show">
                    <option value="">List Shown</option>
                    <option value="10">10</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="input-group pt-3">
                <label for="Search" class="col-sm-2 col-form-label">Search :</label>
                <div class="col-sm-3">
                    <input type="search" class="form-control form-control-sm" placeholder="Search" name="cari">
                </div>
            </div>

            <div class="input-group pt-3">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            </div>
        </div>
    </form>

    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Book Name</th>
                <th>Category Name</th>
                <th>Author Name</th>
                <th>Average Rating</th>
                <th>Voter</th>
            </tr>
        </thead>

        <tbody>
            @if (count((array) $books) > 0)
                @foreach ($books as $index => $li)
                    <tr>
                        <td>{{ $li->id }}</td>
                        <td>{{ $li->book_name }}</td>
                        <td>{{ $li->category_name }}</td>
                        <td>{{ $li->author_name }}</td>
                        <td>{{ $li->average_rating }}</td>
                        <td>{{ $li->voter }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" style="text-align:center;"><b>Books Data Not Found</></b></td>
                </tr>
            @endif
        </tbody>
    </table>
