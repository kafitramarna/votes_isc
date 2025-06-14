@extends('_templates.app')
@section('content')
    <h1>Vote for a Candidate</h1>

    <form action="{{ route('vote.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="candidate_id">Select Candidate:</label>
            <select name="candidate_id" id="candidate_id" class="form-control">
                @foreach ($candidate as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Vote</button>
    </form>
@endsection
