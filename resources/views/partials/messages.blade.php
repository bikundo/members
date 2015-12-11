<div class="text-center">
    @if(Session::has('error'))
        <div class="alert error">
            <i class="fa fa-exclamation-triangle"></i>
            {{Session::get('error')}}
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success">
            <i class="fa fa-check-circle-o"></i>
            {{Session::get('success')}}</div>
    @endif
    @if(Session::has('warning'))
        <div class="alert alert-warning">
            <i class="fa fa-exclamation-triangle"></i>
            {{Session::get('warning')}}</div>
    @endif
    @if(Session::has('info'))
        <div class="alert alert-info">
            <i class="fa fa-info-circle"></i>
            {{Session::get('info')}}</div>
    @endif
    @if(Session::has('message'))
        <div class="alert alert-info">
            <i class="fa fa-info-circle"></i>
            {{Session::get('message')}}</div>
    @endif
    @if(Session::has('status'))
        <div class="alert notice">
            <i class="fa fa-info-circle"></i>
            {{Session::get('status')}}</div>
    @endif
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <p class="text-warning">{{ $error }}</p>
        @endforeach
    @endif
</div>