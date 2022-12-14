@extends('layouts.master')

@section('content')

    <form action="{{ route('verification.send') }}" method="POST">

        @csrf

        <div class="card-header">{{ ('Verify Your Email Address') }}</div>

            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                <button type ="submit"  class="btn-link">{{('click here to request another')}}</button>.
            </div>
        </div>
    </form>
@endsection
