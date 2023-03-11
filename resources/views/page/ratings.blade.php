@extends('layouts.road')
@section('content')
    <div class="container-fluid pt-3">
        <h1 style="font-family:verdana;font-size:14pt;text-align:center;">Insert Rating</h1>
    </div>

    <form>
        <div class="input-group pt-3">
            <label for="bookAuthor" class="col-sm-2 col-form-label">Book Author :</label>
            <div class="col-sm-3">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Book Author</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="e">e</option>
                </select>
            </div>

            <div class="input-group pt-3">
                <label for="bookName" class="col-sm-2 col-form-label">Book Name :</label>
                <div class="col-sm-3">
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Book Name</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                        <option value="d">d</option>
                        <option value="e">e</option>
                    </select>
                </div>

                <div class="input-group pt-3">
                    <label for="rating" class="col-sm-2 col-form-label">Rating :</label>
                    <div class="col-sm-3">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Rating</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

                <div class="input-group pt-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-3">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </div>
    </form>
