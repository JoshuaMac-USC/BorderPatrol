@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Ledger Page
        </div>
        <a href="/ledgers/create">New Record</a>
        @foreach($ledgers as $ledger)
            <div>
            {{ $ledger->created_at }} = {{ $ledger->fname }} {{ $ledger->lname }} - {{ $ledger->age }} - {{ $ledger->id_number }} 
            - {{ $ledger->id_type }} - {{ $ledger->mode_of_transpo }} - {{ $ledger->vplatenum }}
            - {{ $ledger->purpose }} - {{ $ledger->destination }} - {{ $ledger->border_name }}
            </div>
        @endforeach
    </div>
</div>
@endsection