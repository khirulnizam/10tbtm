@extends('layouts/app')

@section('content')

    <!-- insert form -->
    <form action="{{ url('training/store')}}" method="post">
        @csrf
    <table class="table-fixed">
        <tr>
            <td>Training title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>Trainer</td>
            <td><input type="text" name="trainer"></td>
        </tr>
        <tr>
            <!-- buttons -->
            <td><x-primary-button class="ml-3">
                Save Record
            </x-primary-button>
            </td>
            <td><button type="reset">Reset</button></td>
        </tr>
    </table>
    </form>
@endsection