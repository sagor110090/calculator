@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.blog.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.blogs.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="titel">{{ trans('cruds.blog.fields.titel') }}</label>
                <input class="form-control {{ $errors->has('titel') ? 'is-invalid' : '' }}" type="text" name="titel" id="titel" value="{{ old('titel', '') }}" required>
                @if($errors->has('titel'))
                    <span class="text-danger">{{ $errors->first('titel') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.titel_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="blog">{{ trans('cruds.blog.fields.blog') }}</label>
                <textarea class="form-control {{ $errors->has('blog') ? 'is-invalid' : '' }}" name="blog" id="blog" required>{{ old('blog') }}</textarea>
                @if($errors->has('blog'))
                    <span class="text-danger">{{ $errors->first('blog') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.blog.fields.blog_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>


    </div>
</div>
@endsection